@extends('layouts.main')

@section('title', 'Eventos')

@section ('aditional-nav-items')

<form class="d-flex" method="GET" action="/">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

@endsection

@section('content')
    <div class="menu">
        <div class="menu-title">
            @if ($search)
                <h1 class="card-title">Buscando por {{ $search }}</h1>
            @else
                <h1 class="card-title">EVENTOS</h1>
            @endif
        </div>
        <a href="/events/create" class="create-link">CRIAR EVENTO</a>
    </div>
    @if (!count($events) == 0)
        <ul class="events-list">
            @foreach ($events as $e)
                <li class="event">
                    @if ($e->image)
                        <img src="/images/events/{{ $e->image }}" alt="Imagem evento">
                    @endif
                    <div class="event-text-container">
                        <h2><a href="/events/{{ $e->id }}">{{ $e->title }}</a></h2>
                        <p>{{ $e->description }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        @if ($search)
            <div class="error">
                NENHUM EVENTO ENCONTRADO COM {{ $search }}. <a href="/events">Voltar</a>
            </div>
        @else
            <div class="error">
                NENHUM EVENTO REGISTRADO
            </div>
        @endif
    @endif
@endsection
