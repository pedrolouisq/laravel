@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-5">Nuestros Servicios Musicales</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 bg-dark text-white">
                    <div class="card-body text-center">
                        <h3>🎙️</h3>
                        <h5 class="card-title">Producción Musical</h5>
                        <p>Creamos espacios donde cada artista se desarrolla con libertad artística y calidad profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 bg-dark text-white">
                    <div class="card-body text-center">
                        <h3>🌍</h3>
                        <h5 class="card-title">Distribución Global</h5>
                        <p>Llevamos tu talento local a los escenarios y plataformas digitales más importantes del mundo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 bg-dark text-white">
                    <div class="card-body text-center">
                        <h3>📈</h3>
                        <h5 class="card-title">Management</h5>
                        <p>Compromiso total en el impulso de carreras artísticas emergentes y consolidadas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection