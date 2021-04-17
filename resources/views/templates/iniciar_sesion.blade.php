
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
				<h1 data-name="{{session('session_name')}}" class="name">Hola {{session('session_name')}}</h1>
				<h1>Ya estas Logeado, Ve a comprar algunas joyas.</h1>
				
				</div>

				@endif

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	 @if(!empty(session('session_id')))
	 <style type="text/css">
	 	.swal-button{
	 		background-color: #e04e32 !important;
	 		padding: 0 20px !important;
	 	}
	 	 button{
	 		color:white !important;
	 	}
	 </style>

	 <script type="text/javascript">
          name=$('.name').data('name');
          
				swal("Bienvenido "+name+" !","","success",{button:"OK",});
                </script>

				
                @endif

</body>

</html>
