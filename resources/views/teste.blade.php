@extends('layouts.main')

@section('title', 'TESTE')

@section ('content')
    <h1>Olá Mundo</h1>

    <h2>Diretivas</h2>
    @if (10 > 5 )
        <p>A condição é verdadeira</p>
    @endif

    <p>Olá, {{ $nome }}</p>

    @if ($nome == 'João Pedro')
        <p>Olá, programador!</p>
    @else
        <p>Olá, estranho!</p>
    @endif

    <h2>Loops</h2>
    <ul>
        @for ($i=0; $i < count($arr); $i++)
            <li>{{ $arr[$i] }}</li>
        @endfor
    </ul>

    <ul>
        @foreach ($names as $name)
            <li>{{ $loop->index }} - {{ $name }}</li>
        @endforeach
    </ul>

    <h2>Código PHP</h2>
    @php
        $nome = "Teste";
        echo $nome;
    @endphp

    {{-- COMENTÁRIO DO BLADE --}}
@endsection
