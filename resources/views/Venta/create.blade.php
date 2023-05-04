<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de una nueva venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>
    

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="card">
        <div class="card-body">
          @if ($errors->all())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $err)
                  <li>{{ $err }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form method="POST" action="{{ route('ventas.update', $venta->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="codigo" class="form-label">Código de venta:</label>
              <input type="text" class="form-control" name="codigo" value="{{ old('codigo', $venta->id) }}">
            </div>
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha:</label>
              <input type="text" class="form-control" name="fecha" value="{{ old('fecha', $venta->fecha) }}">
            </div>
            <div class="mb-3">
              <label for="total" class="form-label">Total:</label>
              <input type="text" class="form-control" name="total" value="{{ old('total', $venta->total) }}">
            </div>
            <div class="mb-3">
              <label for="cliente" class="form-label">Cliente:</label>
              <input type="text" class="form-control" name="cliente" value="{{ old('cliente', $venta->cliente) }}">
            </div>
            <input type="hidden" name="id" value="{{ $venta->codigo }}">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

</html>