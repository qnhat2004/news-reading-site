<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');

// xác thực người dùng ngay khi họ truy cập vào trang web
Auth::routes();

Route::get('news/{id}', [HomeController::class, 'show'])->name('news.detail');


