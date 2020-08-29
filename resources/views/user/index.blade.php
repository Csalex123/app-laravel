@extends('user.layouts.template')

@section('title', $title)

@section('content')


<div class="container">

    @if ($numero === 10)
        <h1>É igual a 10</h1>
    @elseif($numero !== 10)
        <h1>O número é diferente de 10 <h1>
    @endif

    <!-- Só entra aqui se for falso -->
    @unless ($numero === 10)
        <h1>O valor é diferente de 10</h1>
    @endunless

    <!-- Verificar se a variavel existe -->
    @isset($teste)
        <p>Variavel existe: {{ $teste }}</p>

    @endisset

    <!-- Verificar se a variavel estar vazia -->
    @empty($teste2)
            <p>Variavel vazia</p>
    @endempty

    <!-- Verifica se um usuário está autenticado ou não -->
    @auth
        <p>Você está autenticado</p>
    @else 
        <p>Você não está autenticado</p>
    @endauth

    @guest
        Só entra aqui se não estiver autenticado
    @endguest

   @switch($teste3)
        @case(1)
            <p>Caso 1</p>
            @break
        @case(2)
            <p>Caso 2</p>
            @break

        @default
            <p>Caso padrão</p>      
    @endswitch

<div>

@endsection