<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        background-color: #121212;
        color: #e0e0e0;
    }
    .card {
        background-color: #1e1e1e;
        border: 1px solid #333;
        color: #e0e0e0;
    }
    .text-secondary {
        color: #b0b0b0 !important;
    }
    .bg-light {
        background-color: #1e1e1e !important;
        color: #e0e0e0 !important;
    }
</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #000;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
    <span class="text-primary">Neus</span>Records</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('servicios') ? 'active' : '' }}" href="{{ route('servicios') }}">Servicios</a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('nosotros') ? 'active' : '' }}" href="{{ route('nosotros') }}">Nosotros</a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container content-wrapper">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 fw-bold text-secondary">LOGIN</h1>
                <p class="text-muted mt-3 italic">Próximamente disponible...</p>
            </div>
        </div>
    </div>
{{--
<div class="container mt-5 py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <div class="card shadow-lg p-4 border-0 rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-person-circle text-primary display-3 mb-4 d-block"></i>
                    <h2 class="card-title fw-bold mb-3">Neus<span class="text-secondary">Records</span></h2>
                    <p class="text-secondary mb-4">Accede a tu Panel de Artista o Manager</p>

                    <form>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com" style="background-color: #2a2a2a; border-color: #444; color: #fff;">
                            <label for="floatingInput" class="text-secondary">Correo Electrónico</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" style="background-color: #2a2a2a; border-color: #444; color: #fff;">
                            <label for="floatingPassword" class="text-secondary">Contraseña</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            </div>
                            <a href="#" class="text-primary text-decoration-none small">¿Olvidaste tu contraseña?</a>
                        </div>

                        <div class="d-grid mb-3">
                            <button class="btn btn-primary btn-lg" type="submit">Iniciar Sesión</button>
                        </div>
                    </form>

                    <p class="text-secondary mb-0 mt-4 small">¿Aún no eres parte del sello? <a href="#" class="text-primary text-decoration-none">Regístrate como Artista</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
--}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>