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

			<h2>Nesecito Ayuda</h2>


				<form action= "{{route('email2')}}" method="POST" enctype="multipart/form-data">

					{{ csrf_field() }}
                    <div style="padding: 1%;">
						Tu nombre* : <input type="text" name="nombre" placeholder='alguien@mail.com' required>
					</div>
					<div style="padding: 1%;">
						Correo electronico* : <input type="text" name="correo" placeholder='alguien@mail.com' required>
					</div>

					<div style="padding: 1%;">
						Mensaje : <input type="text" name="comentarios" required>
					</div>

					<div style="padding: 1%;">
                    <label>Adjunta un documento</label>
                    <input type="file" name="file" required>
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