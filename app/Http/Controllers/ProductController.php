<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        $products = ['produtos1', 'produtos2', 'produtos3'];

        return $products;
    }
}
