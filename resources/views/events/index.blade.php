@extends('layout.main')

@section('title')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="#">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="search-container" class="col-md-12">
    <h2>Proximos eventos</h2>
    <p>veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $events)
            <div class="card col-md-3">
                <img src="/IMG/events/{{ $events->image }}" alt="{{ $events->title }}">
                <div class="card-body">
                    <p class="card-date">19/12/22</p>
                    <h5 class="card-title">{{ $events->title }}</h5>
                    <p class="card-participantes">X Participantes</p>
                    <p class="card-description">{{ $events->description }}</p>
                    <p class="card-city"><b>City:</b> {{ $events->city }}</p>
                    <a href="events/{{ $events->id }}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection