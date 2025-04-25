<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/list-product', [ProductController::class, 'index']);

Route::get('/list-product', function () {
    $data = [
        ['id' => 1, 'produk' => 'Gitar'],
        ['id' => 2, 'produk' => 'Biola'],
        ['id' => 3, 'produk' => 'Drum'],
    ];
    return view('list_product', ['data' => $data]);
});
