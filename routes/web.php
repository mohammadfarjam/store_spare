<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentContactUsController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\ManagmentController;
use App\Http\Controllers\Admin\NameStoreController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SmsController;
use App\Http\Controllers\Admin\StatusProductSoldController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


//route Admin
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
    Route::resource('managment', ManagmentController::class);
    Route::resource('comments_contactUs', CommentContactUsController::class);
    Route::resource('sms', SmsController::class);
    Route::resource('name_store', NameStoreController::class);
    Route::get('products_sold', [StatusProductSoldController::class,'index'])->name('products.sold');
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
});



//route Frontend
Route::get('/', [HomeController::class,'index'])->name('/');
Route::get('/cart', [HomeController::class,'cart'])->name('cart');
Route::get('/product_detail', [HomeController::class,'product_detail'])->name('product.detail');
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/register', [HomeController::class,'register'])->name('register');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/aboutUs', [HomeController::class,'aboutUs'])->name('aboutUs');
Route::get('/news', [HomeController::class,'news'])->name('news');
Route::get('/detail_news', [HomeController::class,'detail_news'])->name('detail.news');
Route::get('/wishlist', [HomeController::class,'wishlist'])->name('wishlist');
Route::get('/products', [HomeController::class,'products'])->name('products');
