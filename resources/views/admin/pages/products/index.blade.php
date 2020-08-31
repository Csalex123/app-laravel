<!-- Importando o arquivo template(contem menu, footer etc) dentro do arquivo index -->
@extends('admin.layouts.template')


<!-- Informando quais são os htmls que vão carregar dentro do template -->
@section('content')

<h1>Produtos</h1>
<a href={{ route('products.create')}}>
    <button class="btn btn-primary mb-5">Cadastrar novo produto</button>
</a>


<table class="table">
    <thead class="thead-dark">
        <tr>
            <th></th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<div class="d-flex mt-5" style="justify-content: center">
    {!! $products->onEachSide(1)->links() !!}
</div>


@endsection