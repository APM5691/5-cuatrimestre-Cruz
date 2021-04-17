<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Inicio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

			@include ('layouts.header')


				<form action="{{ route ('guardar')}}" method="POST" name="nuevo" enctype="multipart/form-data">

					@csrf

					Fecha de nacimiento* : <input type="date" name="fecha_nacimiento" required>
					@if($errors->first('fecha_nacimiento')) <i>{{$errors -> first ('fecha_nacimiento')}}</i>@endif

					<div>
						Matricula* : <input type="text" name="matricula" value="{{ old('matricula')}}" required>
					</div>
					@if($errors->first('matricula')) <i>{{$errors -> first ('matricula')}}</i>@endif
					<div>
						Nombre* : <input type="text" name="nombre_cliente" value="{{ old('nombre_cliente')}}" required>
					</div>
					@if($errors->first('nombre_cliente')) <i>{{$errors -> first ('nombre_cliente')}}</i>@endif

					<div>
						Email* : <input type="text" name="correo_electronico" value="{{ old('correo_electronico')}}" required><br>
					</div>
					@if($errors->first('correo_electronico')) <i>{{$errors -> first ('correo_electronico')}}</i>@endif

					<div>
						Apellido Paterno* : <input type="text" name="primer_apellido" value="{{ old('primer_apellido')}}" required><br>
					</div>
					@if($errors->first('primer_apellido')) <i>{{$errors -> first ('primer_apellido')}}</i>@endif

					<div>
						Apellido Materno* : <input type="text" name="segundo_apellido" value="{{ old('segundo_apellido')}}" required><br>
					</div>
					@if($errors->first('segundo_apellido')) <i>{{$errors -> first ('segundo_apellido')}}</i>@endif
					<div>
						Password* : <input type="text" name="password" value="{{ old('password')}}" required><br>
					</div>
					@if($errors->first('password')) <i>{{$errors -> first ('password')}}</i>@endif
					<div>
						Telefono* : <input type="text" name="telefono" value="{{ old('telefono')}}" required><br>
						@if($errors->first('telefono')) <i>{{$errors -> first ('telefono')}}</i>@endif
					</div>
					
					
					<div class="form-group"> 
						<input type="hidden" name="tipo_sesion" value="0">
					</div>
					

					<div class="form-group"> 
						
						<label for="sexo">Sexo* :</label>
						<select class="form-control" name="sexo" required>
						  <option value="Desconocido">Selecciona una opcion</option>
						  <option value="Hombre">Hombre</option>
						  <option value="Mujer">Mujer</option>
						  <option value="Desconocido">Desconocido</option>
						</select>
					  </div>

					  <div class="form-group"> 
					  Imagen* : <input type="file" name="imagen" required>
					</div>
<hr>
					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>