@extends('layouts.cliente')


@section('content')
<!DOCTYPE html>
<html>
    
<head>
    <link href="{{ asset('css/contenido.css')}}" rel="stylesheet">
    <link href="{{ asset('css/imagenes.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
</head>

<body>
            @if(!empty($categorias))
            <main style="margin-top: 58px;">
              <div class="container pt-4">
            @foreach ($categorias as $categoria)
    <div class="recuadro" id="uno">
        <div class="card" style="width: 14rem;">
            <img class="card-img-top" width ="50px" src={{$categoria->imagen}}>
            <div class="card-body">
            <h5 class="card-title">{{ $categoria->nombre }}</h5>
            <p class="card-text">{{ $categoria->descripción }}</p>
            <a href="/categoria/{{ $categoria->id }}" class="btn btn-primary">Ir a la categoria</a>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    @if(!empty($productos))
    <main style="margin-top: 58px;">
        <div class="container pt-4">
    <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
  <thead>
    <tr>
      <th>Categoria</th> 
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Precio</th>
      <th>Imagen</th>
      <th>Existencia</th>
      <th>Pendiente</th>
      <th>Preguntar</th>
      <th>Comprar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($productos as $producto)
    <tr>
      @php
        $valor=$producto->consignar; 
        $contador=0;
        $contador2=0;
        $contador3=0;
      @endphp
      @if ($valor=='1')
      <td>{{$producto->catnombre}}</td>
      <td>{{$producto->nombre}}</td>
      <td>{{$producto->descripción}}</td>
      <td>{{$producto->precio}}</td>
     
        <td>
          @foreach ($imagenes as $imagen)
          @if ($producto->id == $imagen->productos_id) 
          <a href={{$imagen->nombre}}> Ver imagen {{$contador+=1}}</a>  <br> 
    @endif
    @endforeach 

  </td>  
        
      <td>{{$producto->existencia}}</td>
      <td>{{$producto->pendientes}}</td>
      <td><a href="/pregunta/{{ $producto->id }}" class="btn btn-primary">Realizar pregunta</a></td>
      <td><a href="/comprar/{{$producto->id}}" class="btn btn-success">Comprar</a></td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    @endif
    @if(!empty($cproductos))
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
      <th>Preguntar</th>
      <th>Comprar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cproductos as $cproducto)
    @php
        $valor=$cproducto->consignar  
      @endphp
      @if ($valor=='1')
    <tr>
      <td>{{$cproducto->nombre}}</td>
      <td>{{$cproducto->descripción}}</td>
      <td>{{$cproducto->precio}}</td>
      @php
      $contador=0;
      @endphp
      <td>
        @if (!empty($imagenes))
      @foreach ($imagenes as $imagen)
            @if ($imagen->cproductos_id==$cproducto->id)
            <a href={{$imagen->nombre}}> Ver imagen {{$contador+=1}}</a><br>
            @endif
      @endforeach
      @endif
    </td> 
      @php
      $contador=0;
      @endphp
      <td>{{$cproducto->existencia}}</td>
      <td>{{$cproducto->pendientes}}</td>
      <td><a href="/pregunta/{{ $cproducto->id }}" class="btn btn-primary">Realizar pregunta</a></td>
      <td><a href="/comprar/{{$cproducto->id}}" class="btn btn-success">Comprar</a></td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
</div>
    @endif
      
    
</body>

</body>
</html>
@endsection
