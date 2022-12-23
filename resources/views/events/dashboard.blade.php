@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

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
      <td><a href="#">Editar</a></td>
      <td><a href="#">Deletar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    @else
    <p class="not-available">Não há eventos disponíveis</p>

    @endif
</div>
@endsection