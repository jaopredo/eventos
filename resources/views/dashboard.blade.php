@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>

<div class="col-md10 offset-md-1 dashboard-events-container">
    @if (count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $e)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td><a href="/events/{{ $e->id }}">{{ $e->title }}</a></td>
                        <td>0</td>
                        <td>
                            <form action="/events/{{ $e->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger delete-btn">
                                    DELETAR
                                </button>
                            </form>
                            <a style="color: white;" class="btn btn-info edit-btn" href="/events/edit/{{ $e->id }}">
                                EDITAR
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="error">
            VOCÊ AINDA NÃO TEM EVENTOS. <a href="/events/create">CRIE UM AGORA!!!</a>
        </div>
    @endif
</div>

@endsection
