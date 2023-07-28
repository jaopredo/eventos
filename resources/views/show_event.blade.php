@extends('layouts.main')

@section('title', 'Criar Evento')

@section ('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/images/events/{{ $event->image }}" class="img-fluid" alt="Imagem">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p>{{ $event->description }}</p>
            <p>{{ $event->city }}</p>
            <p>{{ date('d/m/y', strtotime($event->eventday)) }}</p>

            <h2>Items</h2>
            <ul>
                @foreach ($event->items as $i)
                    <li>{{ $i }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
