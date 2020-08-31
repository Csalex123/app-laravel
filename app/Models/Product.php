<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products';  Referenciando a tabela que iremos trabalhar
    //Mas como ele foi criado juntamento com o migrations, então não é necessário passar esse atributo

    //Especfiicando quais campos o Model Product deve aceitar para enviar pro banco de dados
    protected $fillable  = ['name', 'price', 'description', 'image'];
}
