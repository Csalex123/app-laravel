@extends('admin.layouts.template')

@push('styles')
    <style></style>
@endpush

@push('scripts')
    <script src="/"></script>
@endpush

@section('title', 'Cadastro de Novos Produtos')

@section('content')
    <h1>Cadastro de novos produtos</h1>

    <form action="" method="post">
        <input type="text" name="name"  placeholder="nome">
        <input type="text" name="Descrição"  placeholder="Descrição">
        <button type="submit">Enviar</button>
    </form>
@endsection


