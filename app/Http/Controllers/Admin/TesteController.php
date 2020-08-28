<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function metodoTeste(){
        return 'teste';
    }

    public function financeiro(){
        return 'Financeiro';
    }

    public function cadastroAdm(){
        return 'cadastro de administrador';
    }
}
