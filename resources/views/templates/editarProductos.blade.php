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

			<h2>Editar Productos</h2>


				<form action="{{ route('salvarProductos', ['id' => $usu->id_producto]) }}" method="POST" name="nuevo3" enctype="multipart/form-data">

					{{ csrf_field() }}
					{{ method_field('PUT') }} 

					<div style="padding: 1%;">
						Nombre Del Producto : <input type="text" name="nombre_producto" value="{{ $usu->nombre_producto }}">
					</div>
					@if($errors->first('nombre_producto')) <i>{{$errors -> first ('nombre_producto')}}</i>@endif

					<div style="padding: 1%;">
						Numero de existencias : <input type="number" name="no_existencias" value="{{ $usu->no_existencias}}">
					</div>
					@if($errors->first('no_existencias')) <i>{{$errors -> first ('no_existencias')}}</i>@endif
					

					<div style="padding: 1%;">
						Precio : <input type="number" name="precio" value="{{ $usu->precio}}"><br>
					</div>
					@if($errors->first('precio')) <i>{{$errors -> first ('precio')}}</i>@endif

					<div style="padding: 1%;">
					<!-- como cambiar el tamaño -->
						Descripcion : <input type="textarea" name="descripcion" value="{{ $usu->descripcion }}"><br>
					</div>
					@if($errors->first('descripcion')) <i>{{$errors -> first ('descripcion')}}</i>@endif

					<div style="padding: 1%;">
						Medida : <input type="number" name="medida" value="{{ $usu->medida }}"><br>
					</div>
					@if($errors->first('medida')) <i>{{$errors -> first ('medida')}}</i>@endif

					<div style="padding: 1%;">
						Precio oferta : <input type="number" name="precio_oferta" value="{{ $usu->precio_oferta }}"><br>
					</div>
					@if($errors->first('precio_oferta')) <i>{{$errors -> first ('precio_oferta')}}</i>@endif
					
					
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