@extends('layouts.barra')


@section('content')
<!DOCTYPE html>
<html>
    
<head>
    <link href="{{ asset('css/contenido.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
</head>

<body>
    <main style="margin-top: 58px;">
        <div class="container pt-4">
    <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Precio</th>
      <th>Imagen</th>
      <th>Existencia</th>
      <th>Pendiente</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($productos as $producto)
    <tr>
      <td>{{$producto->nombre}}</td>
      <td>{{$producto->descripción}}</td>
      <td>{{$producto->precio}}</td>
      @php
      $contador=0;
      @endphp
      <td>
        @if (!empty($imagenes))
      @foreach ($imagenes as $imagen)
            @if ($imagen->productos_id==$producto->id)
            <a href={{$imagen->nombre}}> Ver imagen {{$contador+=1}}</a><br>
            @endif
      @endforeach
      @endif
    </td> 
      @php
      $contador=0;
      @endphp
      <td>{{$producto->existencia}}</td>
      <td>{{$producto->pendientes}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

    
</body>

</body>
</html>
@endsection