@extends('layout.main')

@section('title')

@section('content')


    @if($id !== null)
        <p>Product Number {{ $id }}</p>
    @endif

@endsection