<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Lista de Lineas</div>
        <div class="card-body">
          <a href="{{route('lineas.create')}}" class="btn btn-success mb-2"><i class="fas fa-plus-circle"></i> Agregar</a>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Id venta</th>
                  <th>Cod. Producto</th>
                  <th>Cantidad</th>
                  <th>Precio Unit.</th>
                  <th>Operaciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($lineas as  $linea)
                  <tr>
                    <td>{{$linea->id_venta}}</td>
                    <td>{{$linea->codigo_producto}}</td>
                    <td>{{$linea->cantidad}}</td>
                    <td>{{$linea->precio_unitario}}</td>
                    <td>
                      <a href="{{route('lineas.edit', $linea->id_venta)}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Modificar</a>
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


</html>