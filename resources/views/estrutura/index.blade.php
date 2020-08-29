@extends('estrutura.layouts.template')

@section('content')

<h1>Stacks</h1>

@push('scripts')
    <script src="../../../js/teste.js"></script>
@endpush

@push('styles')
    {{-- Podemos colocar cdns, arquivos externos e também tags styles --}}
    <style>
        body{
            background: #efefef;
        }
        .fisrt{
            color: red;
        }
    </style>
@endpush


{{-- ------------------------------------------------------------ --}}

<h1>Components e Slot</h1>

@component('admin.components.card')
    @slot('title')
        <h1>Esse agora vai ser o título</h1>
    @endslot

    Esse conteúdo está indo para a variavel slot
@endcomponent

{{-- ------------------------------------------------------------ --}}
<hr>

<h1>Include blade</h1>

@include('admin.includes.sucesso')

{{-- ------------------------------------------------------------ --}}
<hr>

<h1>Estrutura de repetição Blade</h1>

{{-- Verificar se a fariavel existe --}}
@isset($dados)
    {{-- Listando o array dados --}}

    @foreach ($dados as  $item)
        {{$item}}
    @endforeach
    
@endisset

<ul>
    @forelse ($dados as $item)
        {{-- Exibe o valor nesse container --}}
        <li class=" @if($loop->last) fisrt  @endif">{{$item}}</li>
    @empty
        {{-- Se não tiver nada no array exibe alguma coisa desse container --}}
        <p>Nenhum item cadastrado</p>
    @endforelse
</ul>

@endsection


