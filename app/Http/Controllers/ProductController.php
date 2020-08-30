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
        dd("Cadastrando...");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

 
    public function update(Request $request, $id)
    {
        dd("Editando...");
    }


    public function destroy($id)
    {
        //
    }
}
