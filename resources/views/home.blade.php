@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <h1 class="display-3 fw-bold">Impulsando Artistas hacia el Éxito</h1>
        <p class="lead">NeusRecords: Donde la pasión por la música se encuentra con el profesionalismo global.</p>
        <a href="{{ route('servicios') }}" class="btn btn-primary btn-lg px-4 mt-3">Descubre nuestro sonido</a>
    </div>
@endsection