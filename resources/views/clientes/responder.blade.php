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
                            <form action="/respuesta/{{$id}}" class="form-horizontal" method="post">
                                @method('put')
                                    <legend class="text-center header">Responder pregunta</legend>
                                    <label >Producto</label>
                                    @csrf
                                    {{-- El foreach sirve para poder leer los datos enviados --}}
                                    
                                    @foreach ($preguntas as $pregunta)
                                    @endforeach
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></i></span>
                                        <div class="col-md-8">
                                            <input id="fname" name="producto" type="text" value={{$pregunta->pnombre}} class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Cliente</label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class=""></i></span>
                                        <div class="col-md-8">
                                            <input id="fname" name="cliente" type="text" value="{{$pregunta->nombre}} {{$pregunta->apellido_paterno}} {{$pregunta->apellido_materno}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Pregunta</label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class=""></i></span>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="pregunta" name="pregunta" rows="3" disabled>{{$pregunta->pregunta}}</textarea>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @if (empty($pregunta->respuesta))
                                        <label >Responder</label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class=""></i></span>
                                        <div class="col-md-8">
                                                <textarea class="form-control" id="respuesta" name="respuesta" rows="3"></textarea>  
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg">Responder</button>
                                        @endif
                                        @if (!empty($pregunta->respuesta))
                                        <label >Responder</label>
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class=""></i></span>
                                        <div class="col-md-8">
                                                <textarea class="form-control" id="respuesta" name="respuesta" rows="3" disabled></textarea>  
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg" disabled>Responder</button>
                                        @endif
                                    </div>
   
                                @if (!empty($mensaje))
                                    <label >{{$mensaje}}</label>
                                    @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </main>