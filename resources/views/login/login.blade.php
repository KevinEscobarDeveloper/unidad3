<!DOCTYPE html>
<html>
    
<head>
	<title>Login</title>
  <link href="{{ asset('css/login.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://i.pinimg.com/736x/28/f1/a9/28f1a972e13e4281b5273891ead173eb.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
			<form action="validar" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
              @if (session('error'))
              <div>
                  {{ session('error') }}
              </div>
              <br>
              @endif
				@csrf
				<input type="text" name="usuario" class="form-control input_user" value="" placeholder="correo">
				</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="contraseña" class="form-control input_pass" value="" placeholder="contraseña">
					</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="login" class="btn login_btn">Login</button>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
						<a href="/principal-categoria" class="btn btn-success">Entrar como anonimo</a>
						</div>
					</div>
					@if (!empty($mensaje))
                                    <label >{{$mensaje}}</label>
                        @endif
					@if (!empty($mensajeerror))
								<label >{{$mensajeerror}}</label>
					@endif
			</form>
		</div>
	</div>
</body>
</html>