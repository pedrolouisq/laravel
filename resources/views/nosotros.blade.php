@extends('layouts.app')

@section('title', 'Nosotros')

@section('styles')
    <style>
        .content-wrapper {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .brand-circle {
            background-color: #1e1e1e;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="brand-circle">
                <h1 class="display-1 fw-bold text-primary mb-0">NR</h1>
            </div>
            <h1 class="display-4 fw-bold mb-4">Nuestra Esencia</h1>
            <p class="lead text-secondary mb-4">
                <strong>NeusRecords</strong> es más que un sello discográfico; somos una incubadora de talento y un motor de innovación musical.
            </p>
            <p class="text-secondary">
                Descubrimos voces auténticas y llevamos su arte a los escenarios globales.
            </p>
            <div class="mt-5">
                <a href="{{ route('servicios') }}" class="btn btn-primary btn-lg px-5 rounded-pill">CONOCE NUESTRO TRABAJO</a>
            </div>
        </div>
    </div>
@endsection