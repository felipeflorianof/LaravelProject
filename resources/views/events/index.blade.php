@extends('layouts.main')

@section('title')

@section('content')

@if(count($events) == 0 && $search)
            
    <p class="not-available">Não foi possível encontrar nenhum evento com '{{ $search }}'</p>

@elseif(count($events) == 0)

    <p class="not-available">Não há eventos disponíveis</p>

@endif

<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
<link rel="stylesheet" href="{{ asset('JS/script.js') }}">

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="/" method="GET">
    <div class='box-div'>
            <div class='box-search'>
                <form action="/" method="get"><input type='search' class='form-control text-center' placeholder='Pesquisar Evento' id='pesquisar' name="search"></form>   
                <button class='btn btn-primary'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                    <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/></svg>
                </button>
            </div>
    </form>
</div>

<div id="search-container" class="col-md-12">
    @if($search)
    <h2>Buscando por {{ $search }}</h2>
    @else
    <h2>Proximos eventos</h2>
    <p>veja os eventos dos proximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/IMG/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participantes">Participantes: {{ count($event->users) }}</p>
                    <a href="events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection