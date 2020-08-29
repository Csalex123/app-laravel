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
        $tag = "<p>Alex</p>";

        return view('user.index', compact('tag', 'title'));
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
