@extends('layouts.main')

@section('title', 'Criar Evento')

@section ('content')
    <form action="/events/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input class="form-control" type="file" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="eventdate">Data do Evento:</label>
            <input class="form-control" type="date" id="eventdate" name="eventdate">
        </div>
        <div class="form-group">
            <label for="title">Título:</label>
            <input class="form-control" type="text" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" rows="3" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input class="form-control" type="text" id="city" name="city">
        </div>
        <div class="form-group">
            <label for="private">Privádo?:</label>
            <input class="form-check-input" type="checkbox" id="private" name="private">
        </div>
        <div class="form-group">
            <p>Infraestrutura:</p>
            <ul class="form-infra-list">
                <li><label for="palco">Palco:</label> <input class="form-check-input" id="palco" name="items[]" value="Palco" type="checkbox"></li>
                <li><label for="banda">Banda:</label> <input class="form-check-input" id="banda" name="items[]" value="Banda" type="checkbox"></li>
                <li><label for="cerveja">Cerveja:</label> <input class="form-check-input" id="cerveja" name="items[]" value="Cerveja" type="checkbox"></li>
                <li><label for="brinde">Brinde:</label> <input class="form-check-input" id="brinde" name="items[]" value="Brinde" type="checkbox"></li>
            </ul>
        </div>
        <button class="btn btn-primary">ENVIAR</button>
    </form>

@endsection
