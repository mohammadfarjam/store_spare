<?php

namespace App\Http\Controllers\CustomLogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
    public function index()
    {
        return view('Frontend.Login.index');
  }
}
