<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{   
    protected $request;

    public function __constructor(Request $request){
        $this->$request = $request;

        $this->middleware('auth')->except('store');
    }

    public function index()
    {   
        $numero = 15;
        
        return view('admin.pages.products.index', compact('numero'));  //   admin/pages/products/index.blade.php
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
