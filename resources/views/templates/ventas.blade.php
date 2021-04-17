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


				<h2>Productos registrados</h2>

				<div>
					<table>
						<thead>
							<tr>

								<th><h3>Monto Total</h3></th>
								<th><h3>Direcciones id</h3></th>
								<th><h3>Clientes id</h3></th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						<tbody>
							<tr>
								<td>{{ $usu->monto_total}}</td>
								<td>{{ $usu->direcciones_id}}</td>
								<td>{{ $usu->clientes_id }}</td>
								<td><h3><a href="{{ route('modificarVentas', ['id' => $usu->id]) }}"><i class="fas fa-pen-square"></i> Editar</a></h3></td>
								<td><h3><a href="{{ route('borrarVenta', ['id' => $usu->id]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
							

							</tr>
						</tbody>
						
						@endforeach
						

						<!-- <tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot> -->
					</table>
				</div>


			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>