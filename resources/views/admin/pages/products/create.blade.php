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

@include('admin.includes.alerts')

<form class="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="nome" value="{{ old('name') }}">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Preço" value="{{ old('price') }}">
            </div>
        </div>
    </div>

    <div class="form-group">
        <textarea class="form-control" name="description" cols="30" rows="10"
            placeholder="Descrição">{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
</form>
@endsection