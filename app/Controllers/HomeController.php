<?php

namespace App\Controllers;

use App\Models\ProductModel;

class HomeController extends BaseController
{
  public function index()
  {
    helper(['url', 'text']);

    $featured = [];
    try {
      $model = new ProductModel();
      // Optional featured products: latest 3
      $featured = $model->orderBy('created_at', 'DESC')->findAll(3);
    } catch (\Throwable $e) {
      // Database not configured; show homepage without featured products
      $featured = [];
    }

    return view('layout/header')
      . view('home', ['featured' => $featured])
      . view('layout/footer');
  }
}
