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

<form class="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    @include('admin.pages.products._partials.form')
</form>
@endsection