
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
<style>
	.alinear{
		text-align: center;
	}
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				
			   @include ('layouts.header')
			

				@if(empty(session('session_id')))

				<form action="{{ route ('validar')}}" method="POST" name="nuevo">

					{{ csrf_field() }}

					<div>
						Email : <input type="text" name="correo_electronico"><br>
					</div>
					
					@if($errors->first('correo_electronico')) <i>{{$errors -> first ('correo_electronico')}}</i>@endif

					<div>
						Password : <input type="text" name="password"><br>
					</div>
					

					<input type="submit" value="Ingresar">
					
				</form>

				@else
                <div class="alinear">
				<h1>Hola {{session('session_name')}}</h1>
				<h1>Ya estas Logeado, Ve a comprar algunas joyas.</h1>
				</div>

				@endif

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>