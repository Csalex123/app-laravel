@extends('admin.layouts.template')

@section('title', 'Editando produto')

@section('content')

<h1>Editando o produto {{ $id}}</h1>

<form action={{route('products.update', $id)}} method="post" enctype="multipart/form-data">
    @method('PUT') 
    @csrf 
    <input type="text" name="name" placeholder="name">
    <input type="text" name="description" placeholder="Descrição">
    <input type="file" name="foto">
    <button type="submit">Enviar</button>
</form>

@endsection