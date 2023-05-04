<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1614713548551-5a0e83e7734c?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=sarah-brown-YhPKF-2YfTU-unsplash.jpg&w=1920&fit=max');
            background-size: cover;
        }
        .card:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="row g-4">
        <div class="col-md-2">
            <a href="{{ route('clientes.index') }}" style="text-decoration: none;">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Clientes</h5>
                        <i class="fas fa-users fa-5x"></i>
                        <p class="card-text">Administre los clientes registrados.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="{{ route('productos.index') }}" style="text-decoration: none;">
                <div class="card text-white bg-secondary">
                    <div class="card-body">
                        <h5 class="card-title">Productos</h5>
                        <i class="fas fa-shopping-bag fa-5x"></i>
                        <p class="card-text">Productos registrados.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
        <a href="{{ route('ventas.index') }}" style="text-decoration: none;">
            <div class="card text-white bg-info">
                <div class="container">
                    <i class="fas fa-solid fa-chart-bar fa-5x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ventas</h5>
                    <p class="card-text">Visualice y analice la cantidad de ventas.</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-2">
        <a href="{{ route('lineas.index') }}" style="text-decoration: none;">
            <div class="card text-white bg-secondary">
                <div class="container">
                    <i class="fas fa-solid fa-chart-line fa-5x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Líneas de venta</h5>
                    <p class="card-text">Administrador de lineas de ventas.</p>
                </div>
            </div>
        </a>
    </div>
</div>
</html>
