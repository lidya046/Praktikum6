<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Hanya ini yang dipakai
Route::get('/list-product', [ProductController::class, 'index']);
