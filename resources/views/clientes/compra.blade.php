@extends('layouts.cliente')


@section('content')
<!DOCTYPE html>
<html>
    
<head>
    <link href="{{ asset('css/registro.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
</head>

<body>
    <main style="margin-top: 10px;">
        <div class="container pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <form action="/tipocompra/{{$id}}" class="form-horizontal" method="post">
                                    <legend class="text-center header">Compra</legend>
                                    <label >Nombre del producto</label>
                                    @csrf
                                    {{-- El foreach sirve para poder leer los datos enviados --}}
                                    @foreach ($usuarios as $usuario)
                                    @endforeach
                                    @foreach ($productos as $producto)
                                    @endforeach
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></i></span>
                                        <div class="col-md-8">
                                            <input id="fname" name="producto" type="text" value={{$producto->nombre}} class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Precio</label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class=""></i></span>
                                        <div class="col-md-8">
                                            <input id="fname" name="precio" type="text" value="{{$producto->precio}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Vendedor</label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class=""></i></span>
                                        <div class="col-md-8">
                                            <input id="fname" name="vendedor" type="text" value="{{$usuario->usernombre}} {{$usuario->apellido_paterno}} {{$usuario->apellido_materno}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Tipo de compra</label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class=""></i></span>
                                        <div class="col-md-8">
                                            <select class="form-select" name="tipocompra" style="width:auto">
                                                <option>Compra en linea</option>
                                                <option>Por banco</option>
                                              </select>  
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </main>
</body>
</html>