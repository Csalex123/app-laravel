@extends('admin.layouts.template')


@section('content')

<h1>Produto {{ $product->name }}</h1>
<a href="{{ route('products.index') }}">Voltar </a>

<ul>
    <li><b>Nome:</b> {{ $product->name }}</li>
    <li><b>Preço:</b> {{ $product->price }}</li>
    <li><b>Descrição:</b> {{ $product->description }}</li>
</ul>

<form action="{{ route('products.destroy', $product->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Deletar o produto {{ $product->name }}</button>
</form>
    
@endsection

