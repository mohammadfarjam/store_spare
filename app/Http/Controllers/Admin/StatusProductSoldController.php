<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusProductSoldController extends Controller
{
    public function index()
    {
        return view('Admin.Status_product.Products_sold');
   }
}
