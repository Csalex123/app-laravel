<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeProductsRequest;

use Illuminate\Http\Request;

class ProductController extends Controller
{   

    public function __constructor(){
        // $this->middleware('auth')->except('store');
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

    public function store(storeProductsRequest $request)
    {    
        // dd($request)->only('description')
        // dd($request->only['name', 'description'])
        // dd($request->all());
        // dd($request->description); 
        // dd($request->has('description'));
        // dd($request->input('teste', 'Se não tiver valor, esse será o valor padrão'));
        // dd($request->except(['description', 'name']));

        /* Pegando arquivo */
        // dd($request->file('foto'));

        /* Verificar se o arquivo é válido */
        // dd($request->file('foto')->isValid());

        /* Enviando arquivo para a pasta storage/app/products */
        // if($request->foto->isValid()){
        //     dd($request->foto->store('products')); 
        // }


        /* Validação */
        // $request->validate([
        //     'name' => 'required|min:3|max:255',
        //     'description' => 'nullable|min:3|max:1000',
        //     'foto' => 'required|image'
        // ]);

        dd('Ok');
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
        if($request->foto->isValid()){
            dd($request->foto->store('products'));
        }
    }


    public function destroy($id)
    {
        //
    }
}
