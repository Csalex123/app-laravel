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

    {{-- Mensagens de validações --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name"  placeholder="nome" value="{{ old('name') }}">
        <input type="text" name="description"  placeholder="Descrição" value="{{ old('description') }}">
        <input type="file" name="foto">
        <button type="submit">Enviar</button>
    </form>
@endsection


