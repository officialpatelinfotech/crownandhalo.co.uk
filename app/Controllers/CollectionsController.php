<?php

namespace App\Controllers;

class CollectionsController extends BaseController
{
    public function index()
    {
        helper(['url']);
        $collections = [
            ['slug' => 'enchanted-twilight', 'title' => 'The Enchanted Twilight Collection – Evening Gowns'],
            ['slug' => 'princess-prom-dreams', 'title' => 'Princess Prom Dreams Collection – Prom Dresses'],
            ['slug' => 'happily-ever-after', 'title' => 'Happily Ever After Collection – Wedding Gowns'],
            ['slug' => 'couture', 'title' => 'Crown & Halo Couture – Luxury Designer Wear'],
        ];
        return view('layout/header')
            . view('collections/index', ['collections' => $collections])
            . view('layout/footer');
    }

    public function show(string $slug)
    {
        helper(['url']);
        $map = [
            'enchanted-twilight' => 'The Enchanted Twilight Collection – Evening Gowns',
            'princess-prom-dreams' => 'Princess Prom Dreams Collection – Prom Dresses',
            'happily-ever-after' => 'Happily Ever After Collection – Wedding Gowns',
            'couture' => 'Crown & Halo Couture – Luxury Designer Wear',
        ];
        $title = $map[$slug] ?? 'Collection';
        return view('layout/header')
            . view('collections/show', ['title' => $title])
            . view('layout/footer');
    }
}
