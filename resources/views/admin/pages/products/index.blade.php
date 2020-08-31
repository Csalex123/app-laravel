<!-- Importando o arquivo template(contem menu, footer etc) dentro do arquivo index -->
@extends('admin.layouts.template')


<!-- Informando quais são os htmls que vão carregar dentro do template -->
@section('content')

<h1>Produtos</h1>
<a href={{ route('products.create')}}>
    <button>Cadastrar novo produto</button>
</a>

<table border="2">
    <thead>
        <tr>Nome</tr>
        <tr>Preço</tr>
        <tr>Ações</tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="">Detalhes</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $products->links() !!}


@endsection