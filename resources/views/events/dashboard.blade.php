@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Participantes</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  @foreach($events as $event)
    <tr>
      <td script="row">{{ $loop->index + 1 }}</td>
      <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
      <td>uhjdfh</td>
    <td>
        <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>

        <form action="/events/{{ $event->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
      </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
    @else
    <p>Você ainda não tem eventos, <a href="/event/create">Criar Evento</a></p>
    @endif
</div>
@endsection