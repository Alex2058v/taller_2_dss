<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar linea de venta.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">{{ __('Editar producto') }}</div>
                    <div class="card-body">
                        @if ($errors->all())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $err)
                                        <li>{{$err}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('lineas.update', $producto->id_venta) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="codigo">Codigo del producto:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="codigo" id="codigo"  placeholder="Ingresa el codigo del cliente" value="{{old('codigo',$producto->codigo_producto)}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id">Codigo de la venta:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="id" id="id"   placeholder="Ingresa el nombre del cliente" value="{{old('id',$producto->id_venta)}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cantidad">Cantidad:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{old('cantidad')}}"   placeholder="Ingresa el email del cliente" value="{{old('cantidad')}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio unitario:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="precio" name="precio" value="{{old('precio')}}"   placeholder="Ingresa el password del cliente" value="{{old('precio')}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $producto->id }}">
                            <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>