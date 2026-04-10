@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <div class="card shadow-lg p-4 border-0 rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-person-circle text-primary display-3 mb-4 d-block"></i>
                    <h2 class="card-title fw-bold mb-3">Neus<span class="text-secondary">Records</span></h2>
                    <p class="text-secondary mb-4">Accede a tu Panel de Artista o Manager</p>

                    <form>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com"
                                style="background-color: #2a2a2a; border-color: #444; color: #fff;">
                            <label for="floatingInput" class="text-secondary">Correo Electrónico</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña"
                                style="background-color: #2a2a2a; border-color: #444; color: #fff;">
                            <label for="floatingPassword" class="text-secondary">Contraseña</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                        </div>
                        <a href="#" class="text-primary text-decoration-none small">¿Olvidaste tu contraseña?</a>
                        
                        <div class="d-grid mb-3 mt-4">
                            <button class="btn btn-primary btn-lg" type="submit">Iniciar Sesión</button>
                        </div>
                    </form>

                    <p class="text-secondary mb-0 mt-4 small">¿Aún no eres parte del sello? <a href="#"
                            class="text-primary text-decoration-none">Regístrate como Artista</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection