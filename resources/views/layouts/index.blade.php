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

				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>

						
							<h1>El lujo no debe <br />
								salir caro</h1>
							<p>ANTECEDENTES DE LA ORGANIZACIÓN</p>
						</header>
						<p>Joyería Luminosité es una empresa orgullosamente mexicana , establecida en el año 2020
							ubicada en Toluca con presencia en el centro de toluca, a un lado de la plaza de los mártires. Esta empresa fue creada por 3 estudiantes apasionados por el mundo de digital
							para facilitar la búsqueda de joyas al mejor precio, pero manteniendo la mejor calidad posible, a su disposición.
							Nos enfocamos en la venta de joyeria de segunda mano, no incluyendo los aspectos de distribución y entrega de los productos, directamente la empresa no proporciona estos servicios pero contando con terceros para la distribución.</p>
						<ul class="actions">
							<li><a href="{{route('catalogo')}}" class="button big">Compra ahora</a></li>
						</ul>
					</div>
					<span class="image object">
						<img src="{{asset('images/bg.jpg')}}" alt="" />
					</span>
				</section>

				<!-- Section -->
				<section>
					<header class="major">
						<h2>Nuestra empresa</h2>
					</header>
					<div class="features">
						<article>
							<span class="icon fa-gem"></span>
							<div class="content">
								<h3>MISIÓN DE LA ORGANIZACIÓN</h3>
								<p>Ofrecer una amplia variedad de joyas con la mejor, calidad y
									valor, y brindar los mejores precios en el mercado.</p>
							</div>
						</article>
						<article>
							<span class="icon solid fa-paper-plane"></span>
							<div class="content">
								<h3>VISIÓN DE LA ORGANIZACIÓN</h3>
								<p>Crecer como empresa líder en el mercado de de venta de joyas de segunda mano en línea,buscando la innovación en el sector, motivados por la pasión y compromiso para nuestra empresa y sus nuevos intereses.</p>
							
							</div>
						</article>
						
					</div>
				</section>

				<!-- Section -->
				<!-- s -->

				<section id="banner">
					<div class="content">
						<header>
							<h1>Encuentranos en:</h1>
						</header>
						<p><h4>Si desea acudir a nuestro establecimiento para comprar o recibir tus productos, puede consultar la dirección en el siguiente enlace, por el bien de todos mantengamos las medidas de prevención de contagio, esperamos su visita.</h4> </p>
						<ul class="actions">
							<li><a href="https://goo.gl/maps/MP9HsaTvYaiyjYYh7" class="button big"><i class="fas fa-map-marked"></i>  Aquí</a></li>
						</ul>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.660611151841!2d-99.47962168561929!3d19.340528048631196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20a14878a64eb%3A0x65bdb503fdce37bc!2sUniversidad%20Tecnol%C3%B3gica%20del%20Valle%20de%20Toluca!5e0!3m2!1ses-419!2smx!4v1618356328293!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
					
				</section>


			</div>
			
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>
