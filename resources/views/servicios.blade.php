<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>