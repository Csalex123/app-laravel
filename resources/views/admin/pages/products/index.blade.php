<!-- Importando o arquivo template(contem menu, footer etc) dentro do arquivo index -->
@extends('admin.layouts.template')


<!-- Informando quais são os htmls que vão carregar dentro do template -->
@section('content')

<h1>Produtos</h1>
<a href="/products/create">
    <button>Cadastrar novo produto</button>
</a>


@endsection