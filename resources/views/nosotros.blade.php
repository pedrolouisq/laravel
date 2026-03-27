<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background-color: #121212; 
            color: #e0e0e0; 
            font-family: 'Segoe UI', sans-serif;
        }
        /* Barra de navegación idéntica a las demás */
        .navbar { 
            background-color: #000 !important; 
            border-bottom: 1px solid #333; 
        }
        .text-primary { color: #0d6efd !important; }
        
        /* Contenedor de contenido centrado sin afectar al nav */
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
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container content-wrapper">
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
                    <a href="/servicios" class="btn btn-primary btn-lg px-5 rounded-pill">CONOCE NUESTRO TRABAJO</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>