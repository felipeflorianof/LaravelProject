@extends('layouts.main')
@section('title')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Create your event</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image"><b>Imagem do Evento</b></label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title"><b>Event</b></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="date"><b>Data do evento</b></label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="title"><b>Info</b></label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="title"><b>Location</b></label>
            <input type="text" class="form-control" id="city" name="city" placeholder="City">
        </div>

        <div class="form-group">
            <label for="title"><b>Is it Private?</b></label>
            <select name="private" id="private" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <div class="form-group">
            <label for=""><b>Add Infrastructure Items</b></label>
                <div class="from-group">
                    <input type="checkbox" name="items[]" id="items" value="Cadeiras"> Cadeiras<br>
                    <input type="checkbox" name="items[]" id="items" value="Palco"> Palco<br>
                    <input type="checkbox" name="items[]" id="items" value="Cerveja"> Cerveja<br>
                    <input type="checkbox" name="items[]" id="items" value="Open Food"> Open Food<br>
                    <input type="checkbox" name="items[]" id="items" value="Brindes"> Brindes<br>
                </div>
        </div>

        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>






@endsection