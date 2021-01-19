<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::prefix('/p-admin')->group(function () {
    Route::get('dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('users', UserController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('contactUs', ContactUsController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('discount', DiscountController::class);
    Route::resource('attributes', AttributeController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('sliders', SliderController::class);
});
