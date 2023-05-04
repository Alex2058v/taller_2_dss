<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <style>
        .card {
  border: none;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  transition: all 0.3s ease;
  overflow: hidden;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.24);
}

.card-img-top {
  height: 200px;
  background-size: cover;
  background-position: center;
}

.card-body {
  text-align: center;
}

.btn-dark {
  background-color: #333;
  border-color: #333;
}

.btn-dark:hover {
  background-color: #222;
  border-color: #222;
}

    </style>
</head>
<body>
<div class="container">
  <h1 class="text-center my-5">TextilExport</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($productos as $producto)
    <div class="col">
      <div class="card">
        <div class="card-img-top" style="background-image: url('data:image/png;base64,{{ base64_encode($producto->imagen) }}');"></div>
        <div class="card-body">
          <h5 class="card-title">{{$producto->nombre}}</h5>
          <p class="card-text">{{$producto->categoria}}</p>
          <p class="card-text fw-bold">$ {{$producto->precio}}</p>
          <a href="{{route('publico.show', $producto->codigo)}}" class="btn btn-dark">Ver Producto</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

</body>
</html>