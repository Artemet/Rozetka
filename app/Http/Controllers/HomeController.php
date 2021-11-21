<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $get_product = Products::get();

        return view("pages.home.index")
            ->with('get_product', $get_product);
    }
}
