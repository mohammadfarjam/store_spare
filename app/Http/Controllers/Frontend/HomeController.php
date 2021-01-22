<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Frontend.Layout.index');
   }
    public function cart()
    {
        return view('Frontend.Cart.index');
    }
    public function product_detail()
    {
        return view('Frontend.product_detail.index');
    }
    public function login()
    {
        return view('Frontend.login.index');
    }
    public function register()
    {
        return view('Frontend.register.index');
    }
    public function contact()
    {
        return view('Frontend.contact.index');
    }
    public function aboutUs()
    {
        return view('Frontend.aboutUs.index');
    }
}
