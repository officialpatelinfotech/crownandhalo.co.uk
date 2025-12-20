<?php

namespace App\Controllers;

use App\Models\DressModel;
use App\Models\UserModel;

class Admin extends BaseController
{
  protected $dressModel;

  public function __construct()
  {
    $this->dressModel = new DressModel();
    helper(['form', 'url']);
    // Note: do not call session() here — session initialization can send headers.
    // Authentication checks are performed at the start of each controller method
    // via `ensureAdmin()` which runs before any output is sent.
  }

  protected function ensureAdmin()
  {
    if (! session()->get('is_admin')) {
      return redirect()->to('/admin/login');
    }
    return null;
  }

  public function index()
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    // Dashboard stats
    $data = [];
    $data['totalDresses'] = $this->dressModel->countAllResults();
    $data['recentDresses'] = $this->dressModel->orderBy('created_at', 'DESC')->findAll(6);
    echo view('layout/header', ['admin_header' => true, 'admin_page_title' => 'Admin Panel']);
    echo view('admin/dashboard', $data);
  }

  public function dresses()
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    $data['dresses'] = $this->dressModel->orderBy('created_at', 'DESC')->findAll();
    echo view('layout/header', ['admin_header' => true, 'admin_page_title' => 'Admin Panel']);
    echo view('admin/dresses_list', $data);
  }

  public function contacts()
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    $contactModel = new \App\Models\ContactModel();
    $data['contacts'] = $contactModel->orderBy('created_at', 'DESC')->findAll();
    echo view('layout/header', ['admin_header' => true, 'admin_page_title' => 'Contacts']);
    echo view('admin/contacts_list', $data);
  }

  public function create()
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    echo view('layout/header', ['admin_header' => true, 'admin_page_title' => 'Admin Panel']);
    echo view('admin/dress_form');
  }

  public function store()
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    $post = $this->request->getPost();

    $data = [
      'title' => $post['title'] ?? null,
      'collection' => $post['collection'] ?? null,
      'size' => $post['size'] ?? null,
      'color' => $post['color'] ?? null,
      'price' => $post['price'] ?? 0,
      'stock' => $post['stock'] ?? 0,
      'description' => $post['description'] ?? null,
    ];

    // handle image upload (support multiple files). store first image path in `image` and all paths in `images` JSON.
    $firstImagePath = null;
    $imagePaths = [];
    $files = [];
    try {
      $files = $this->request->getFileMultiple('image');
    } catch (\Exception $e) {
      // fallback to single file
      $f = $this->request->getFile('image');
      if ($f) $files = [$f];
    }

    // ensure upload dir exists (public so files are web-accessible)
    $uploadDir = FCPATH . 'uploads/dresses';
    if (! is_dir($uploadDir)) {
      try {
        mkdir($uploadDir, 0755, true);
      } catch (\Exception $e) {
        log_message('error', 'Admin::store - failed to create upload dir: ' . $e->getMessage());
      }
    }

    if (! empty($files)) {
      foreach ($files as $f) {
        if (! $f instanceof \CodeIgniter\HTTP\Files\UploadedFile) continue;
        if (! $f->isValid()) {
          log_message('error', 'Admin::store - upload invalid: ' . $f->getError() . ' name:' . $f->getClientName());
          continue;
        }
        if ($f->hasMoved()) {
          log_message('warning', 'Admin::store - file already moved: ' . $f->getClientName());
          continue;
        }
        $newName = $f->getRandomName();
        try {
          $moved = $f->move($uploadDir, $newName);
          if ($moved === false) {
            log_message('error', 'Admin::store - move returned false for ' . $f->getClientName());
            session()->setFlashdata('error', 'Failed to save uploaded image: ' . $f->getClientName());
            return redirect()->back()->withInput();
          }
        } catch (\Exception $e) {
          log_message('error', 'Admin::store - exception moving file: ' . $e->getMessage());
          session()->setFlashdata('error', 'Server error saving uploaded image.');
          return redirect()->back()->withInput();
        }
        $path = 'uploads/dresses/' . $newName;
        $imagePaths[] = $path;
        if ($firstImagePath === null) {
          $firstImagePath = $path;
        }
      }
    }
    if ($firstImagePath) {
      $data['image'] = $firstImagePath;
      $data['images'] = json_encode($imagePaths);
    }
    // Ensure at least one image was uploaded
    if (empty($imagePaths)) {
      session()->setFlashdata('error', 'Please select at least one image for the dress.');
      return redirect()->back()->withInput();
    }

    $this->dressModel->insert($data);
    session()->setFlashdata('success', 'Dress created successfully.');
    return redirect()->to('/admin/dresses');
  }

  public function edit($id)
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    $data['dress'] = $this->dressModel->find($id);
    if (! $data['dress']) return redirect()->to('/admin/dresses');
    echo view('layout/header', ['admin_header' => true, 'admin_page_title' => 'Admin Panel']);
    echo view('admin/dress_form', $data);
  }

  public function update($id)
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    $post = $this->request->getPost();
    $data = [
      'title' => $post['title'] ?? null,
      'collection' => $post['collection'] ?? null,
      'size' => $post['size'] ?? null,
      'color' => $post['color'] ?? null,
      'price' => $post['price'] ?? 0,
      'stock' => $post['stock'] ?? 0,
      'description' => $post['description'] ?? null,
    ];

    // handle image upload (support multiple files). store first image path in `image` and all paths in `images` JSON.
    $firstImagePath = null;
    $imagePaths = [];
    $files = [];
    try {
      $files = $this->request->getFileMultiple('image');
    } catch (\Exception $e) {
      $f = $this->request->getFile('image');
      if ($f) $files = [$f];
    }

    // ensure upload dir exists (public so files are web-accessible)
    $uploadDir = FCPATH . 'uploads/dresses';
    if (! is_dir($uploadDir)) {
      try {
        mkdir($uploadDir, 0755, true);
      } catch (\Exception $e) {
        log_message('error', 'Admin::update - failed to create upload dir: ' . $e->getMessage());
      }
    }

    // merge with existing stored images for this dress
    $existing = $this->dressModel->find($id);
    $existingImages = [];
    if (! empty($existing)) {
      if (! empty($existing['images'])) {
        $decoded = json_decode($existing['images'], true);
        if (is_array($decoded)) $existingImages = $decoded;
      } elseif (! empty($existing['image'])) {
        $existingImages[] = $existing['image'];
      }
    }

    // Process removals sent from the form (remove_images[])
    $toRemove = $this->request->getPost('remove_images') ?? [];
    if (! empty($toRemove)) {
      // normalize to array
      if (! is_array($toRemove)) $toRemove = [$toRemove];
      foreach ($toRemove as $rem) {
        // remove from the existingImages array
        $existingImages = array_values(array_filter($existingImages, function ($v) use ($rem) {
          return $v !== $rem;
        }));
        // attempt to delete file from disk (safeguard path)
        $filepath = FCPATH . $rem;
        if (strpos(realpath($filepath) ?: '', realpath(FCPATH) ?: '') === 0 && file_exists($filepath)) {
          @unlink($filepath);
        }
      }
    }

    if (! empty($files)) {
      foreach ($files as $f) {
        if (! $f instanceof \CodeIgniter\HTTP\Files\UploadedFile) continue;
        if (! $f->isValid()) {
          log_message('error', 'Admin::update - upload invalid: ' . $f->getError() . ' name:' . $f->getClientName());
          continue;
        }
        if ($f->hasMoved()) {
          log_message('warning', 'Admin::update - file already moved: ' . $f->getClientName());
          continue;
        }
        $newName = $f->getRandomName();
        try {
          $moved = $f->move($uploadDir, $newName);
          if ($moved === false) {
            log_message('error', 'Admin::update - move returned false for ' . $f->getClientName());
            session()->setFlashdata('error', 'Failed to save uploaded image: ' . $f->getClientName());
            return redirect()->back()->withInput();
          }
        } catch (\Exception $e) {
          log_message('error', 'Admin::update - exception moving file: ' . $e->getMessage());
          session()->setFlashdata('error', 'Server error saving uploaded image.');
          return redirect()->back()->withInput();
        }
        $path = 'uploads/dresses/' . $newName;
        $imagePaths[] = $path;
        if ($firstImagePath === null) {
          $firstImagePath = $path;
        }
      }
    }
    // Build final image list and ensure at least one image remains
    $finalImages = [];
    if (! empty($imagePaths)) {
      $finalImages = array_values(array_merge($existingImages, $imagePaths));
    } else {
      $finalImages = $existingImages;
    }

    if (empty($finalImages)) {
      session()->setFlashdata('error', 'Please keep or upload at least one image for the dress.');
      return redirect()->back()->withInput();
    }

    $data['images'] = json_encode($finalImages);
    $data['image'] = $finalImages[0] ?? null;

    $this->dressModel->update($id, $data);
    session()->setFlashdata('success', 'Dress updated successfully.');
    return redirect()->to('/admin/dresses');
  }

  public function delete($id)
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    $this->dressModel->delete($id);
    return redirect()->to('/admin/dresses');
  }

  public function deleteImage()
  {
    if ($resp = $this->ensureAdmin()) return $resp;
    $path = $this->request->getPost('path');
    $id = $this->request->getPost('id');
    if (! $path) {
      return $this->response->setStatusCode(400)->setJSON(['ok' => false, 'message' => 'Missing path']);
    }
    // safe unlink
    $filepath = FCPATH . $path;
    $deleted = false;
    if (file_exists($filepath) && strpos(realpath($filepath) ?: '', realpath(FCPATH) ?: '') === 0) {
      @unlink($filepath);
      $deleted = true;
    }

    // If dress id provided, remove from DB images list
    if ($id) {
      $dress = $this->dressModel->find($id);
      if ($dress) {
        $existingImages = [];
        if (! empty($dress['images'])) {
          $decoded = json_decode($dress['images'], true);
          if (is_array($decoded)) $existingImages = $decoded;
        } elseif (! empty($dress['image'])) {
          $existingImages[] = $dress['image'];
        }
        $new = array_values(array_filter($existingImages, function ($v) use ($path) {
          return $v !== $path;
        }));
        $data = [];
        if (! empty($new)) {
          $data['images'] = json_encode($new);
          $data['image'] = $new[0] ?? null;
        } else {
          $data['images'] = null;
          $data['image'] = null;
        }
        $this->dressModel->update($id, $data);
      }
    }

    return $this->response->setJSON(['ok' => true, 'deleted' => $deleted]);
  }
}
