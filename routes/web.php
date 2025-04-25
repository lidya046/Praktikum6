<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/list-product', [ProductController::class, 'index']);

Route::get('/list-product', function () {
    $data = [
        ['id' => 1, 'produk' => 'Iphone 12'],
        ['id' => 2, 'produk' => 'Iphone 14'],
        ['id' => 3, 'produk' => 'Iphone 16'],
    ];
    return view('list_product', ['data' => $data]);
});
