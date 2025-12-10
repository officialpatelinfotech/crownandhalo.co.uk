<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProductController extends BaseController
{
    public function index()
    {
        helper(['url', 'text']);

        $model = new ProductModel();
        $products = $model->paginate(12);
        $pager = $model->pager;

        return view('layout/header')
            . view('products/index', ['products' => $products, 'pager' => $pager])
            . view('layout/footer');
    }

    public function show(int $id)
    {
        helper(['url']);

        $model = new ProductModel();
        $product = $model->findProductById($id);

        if (!$product) {
            throw new PageNotFoundException('Product not found');
        }

        return view('layout/header')
            . view('products/detail', ['product' => $product])
            . view('layout/footer');
    }
}
