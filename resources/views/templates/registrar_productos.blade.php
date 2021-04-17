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


				<form action="{{ route ('guardarProductos')}}" method="POST" name="nuevo" enctype="multipart/form-data">

					{{ csrf_field() }}

					<div class="form-group"> 
						<input type="hidden" name="tipo_de_joya_id" value="0">
					</div>

					<div style="padding: 1%;">
						Clave Del Producto* : <input type="text" name="clave" value="{{ old('clave')}}" required>
					</div>
					@if($errors->first('clave')) <i>{{$errors -> first ('clave')}}</i>@endif

					<div style="padding: 1%;">
						Nombre Del Producto* : <input type="text" name="nombre_producto" value="{{ old('nombre_producto')}}" required>
					</div>
					@if($errors->first('nombre_producto')) <i>{{$errors -> first ('nombre_producto')}}</i>@endif

					<div style="padding: 1%;">
						Numero de existencias* : <input type="number" name="numero_existencias" value="{{ old('numero_existencias')}}" required>
					</div>
					@if($errors->first('numero_existencias')) <i>{{$errors -> first ('numero_existencias')}}</i>@endif

					<div style="padding: 1%;">
						Precio* : <input type="number" name="precio" required><br>
					</div>
					@if($errors->first('precio')) <i>{{$errors -> first ('precio')}}</i>@endif

					<div style="padding: 1%;">
						Descripcion* : <input type="textarea" name="descripcion" value="{{ old('descripcion')}}" required><br>
					</div>
					@if($errors->first('descripcion')) <i>{{$errors -> first ('descripcion')}}</i>@endif

					<div style="padding: 1%;">
						Medida* : <input type="number" name="medida" required><br>
					</div>
					@if($errors->first('medida')) <i>{{$errors -> first ('medida')}}</i>@endif


					<div style="padding: 1%;">
						Precio oferta* : <input type="number" name="precio_oferta" required><br>
					</div>
					@if($errors->first('precio_oferta')) <i>{{$errors -> first ('precio_oferta')}}</i>@endif
					
					Imagen* : <input type="file" name="fotografia" required><br>
					<hr>
					<!--*Genero : <input type="text" name="gen"><br>

Grupo : <input type="text" name="grupo"><br>
*Activo : <input type="text" name="activo"><br> -->

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>

nombre_producto--
no_existencias--
precio--
descripcion--
medida--
precio_oferta--
img--

tipo_de_joya_id
clave
nombre_producto
numero_existencias
precio
descripcion
medida
precio_oferta
fotografia

