<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class PageController extends BaseController
{
    public function about()
    {
        helper(['url']);
        return view('layout/header')
            . view('about')
            . view('layout/footer');
    }

    public function contact()
    {
        helper(['url']);
        return view('layout/header')
            . view('contact')
            . view('layout/footer');
    }

    public function sendContact(): RedirectResponse
    {
        helper(['url']);

        $rules = [
            'name'    => 'required|min_length[2]',
            'email'   => 'required|valid_email',
            'phone'   => 'permit_empty|min_length[7]',
            'message' => 'required|min_length[10]',
        ];

        if (!$this->validate($rules)) {
            $errors = $this->validator ? $this->validator->getErrors() : [];
            return redirect()->back()->withInput()->with('error', 'Please correct the form and try again.')->with('validation_errors', $errors);
        }

        $formData = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'phone'   => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message'),
        ];

        // Save to database
        try {
            $contactModel = new \App\Models\ContactModel();
            $contactModel->insert($formData);
        } catch (\Exception $e) {
            log_message('error', 'Contact save failed: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Could not save your message. Please try again.');
        }

        $email = \Config\Services::email();

        // Target recipient (site owner) from env or fallback - make sure it's a non-empty string
        $rawTo = $_ENV['SITE_OWNER_EMAIL'] ?? getenv('SITE_OWNER_EMAIL') ?? '';
        $to = is_string($rawTo) ? trim($rawTo) : '';
        if (empty($to)) {
            $to = 'owner@example.com';
        }

        // Send notification to site owner
        try {
            // Defensive: only call setTo if we have a string
            $email->setTo("chdresshire@gmail.com");
            $email->setFrom($_ENV['FROM_EMAIL'] ?? getenv('FROM_EMAIL') ?? 'no-reply@example.com', 'Website Contact');
            $email->setReplyTo($formData['email'], $formData['name']);
            $email->setSubject('New Contact Message from ' . $formData['name']);
            $email->setMessage(view('email/contact_email_template', $formData));
            $email->send();
        } catch (\Exception $e) {
            log_message('error', 'Contact admin email failed: ' . $e->getMessage());
        }

        // Send confirmation to visitor (if email provided)
        if (! empty($formData['email'])) {
            try {
                $confirm = \Config\Services::email();
                $confirm->setTo($formData['email']);
                $confirm->setFrom($_ENV['FROM_EMAIL'] ?? getenv('FROM_EMAIL') ?? 'no-reply@example.com', 'Crown & Halo');
                $confirm->setSubject('We received your message');
                $confirm->setMessage(view('email/contact_confirmation', $formData));
                $confirm->send();
            } catch (\Exception $e) {
                log_message('error', 'Contact confirmation email failed: ' . $e->getMessage());
            }
        }

        return redirect()->to('/contact')->with('success', 'Thanks! Your message has been received.');
    }

    public function sitemap()
    {
        helper(['url']);
        return view('layout/header')
            . view('sitemap')
            . view('layout/footer');
    }

    public function gallery()
    {
        helper(['url']);
        return view('layout/header')
            . view('gallery')
            . view('layout/footer');
    }

    public function pricing()
    {
        helper(['url']);
        return view('layout/header')
            . view('pricing')
            . view('layout/footer');
    }

    public function howDressHire()
    {
        helper(['url']);
        return view('layout/header')
            . view('how-dress-hire')
            . view('layout/footer');
    }

    public function terms()
    {
        helper(['url']);
        return view('layout/header')
            . view('terms')
            . view('layout/footer');
    }

    public function faqs()
    {
        helper(['url']);
        return view('layout/header')
            . view('faqs')
            . view('layout/footer');
    }

    public function book()
    {
        helper(['url']);
        return view('layout/header')
            . view('book')
            . view('layout/footer');
    }

    public function privacy()
    {
        helper(['url']);
        return view('layout/header')
            . view('privacy')
            . view('layout/footer');
    }
}
