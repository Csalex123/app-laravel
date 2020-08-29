@extends('estrutura.layouts.template')

@section('content')

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

<style>
    .fisrt{
        color: red;
    }
</style>

