<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    protected $request;

    public function __construction(Request $request){
        $this->$request = $request;
    }

    public function index()
    {

        $title = "Página de usuário";
        $numero = 10;
        $teste = 'Texto teste';
        $teste2 = '';
        $teste3 = 5;

        return view('user.index', compact('numero', 'title', 'teste', 'teste2', 'teste3'));
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


    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
