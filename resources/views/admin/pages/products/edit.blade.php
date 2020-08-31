@extends('admin.layouts.template')

@section('title', "Editando o produto  $product->name ")

@section('content')

<h1>Editando o produto {{ $product->name }}</h1>

<form action={{route('products.update', $product->id)}} method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="name" value="{{ $product->name }}">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <input class="form-control" type="text" name="price" placeholder="Preço" value="{{ $product->price }}">
            </div>
        </div>
    </div>

    <div class="form-group">
        <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Descrição">
            {{ $product->description }}
        </textarea>
    </div>

    <div class="form-group">
        <input type="file" name="foto">
    </div>

    <div class="form-group">
        <button class="btn btn-info" type="submit">Atualizar o produto</button>
    </div>

</form>

@endsection