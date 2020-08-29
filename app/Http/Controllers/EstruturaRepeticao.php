<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstruturaRepeticao extends Controller
{

    protected $request;

    public function __constructor(Request $request){

        $this->$request = $request;

    }

    public function index()
    {
        $dados = ['Tv','Carro','Geladeira','Moto','Avião'];
        return view('estrutura.index', compact('dados'));
    }


    public function create()
    {
        //
    }

 
    public function store()
    {
        //
    }


    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

    public function update( $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
