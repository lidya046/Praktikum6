<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $data = [
            ['id' => 1, 'produk' => 'Iphone 12'],
            ['id' => 2, 'produk' => 'Iphone 14'],
            ['id' => 3, 'produk' => 'Iphone 16'],
        ];

        return view('list_product', compact('data'));
    }
}
