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
		<script>

		</script>
	</head>

<!-- Sidebar -->
<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{ route('home')}}">Pagina de Inicio</a></li>
										<li><a href="{{ route('catalogo')}}">Catalogo de productos</a></li>
										<li>
											<span class="opener">Sesion/Cliente</span>
											<ul>
												<li><a href="{{ route('registrarse')}}">Registrarse</a></li>
												<li><a href="{{ route('detalleUsuario')}}">Ver perfil</a></li>
												<li><a href="{{ route('iniciar_sesion')}}">Iniciar sesion</a></li>
												

											</ul>
										</li>
										@if(session('session_tipo') == 1)
										
										<li>
											<span class="opener">Productos</span>
											<ul>
												<li><a href="{{ route('registrarProductos')}}">Registrar Productos</a></li>
												<li><a href="{{ route('productos')}}">Ver lista de productos</a></li>
												
											</ul>
										</li>
										<li>
											<span class="opener">Ventas</span>
											<ul>
												<!-- <li><a href="{{ route('registrarVentas')}}">Registrar Nueva Venta</a></li> -->
												<li><a href="{{ route('ventas')}}">Ver Registro de Ventas</a></li>
												<li><a href="{{ route('reporte')}}">Reporte de Ventas</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Direcciones</span>
											<ul>
												<li><a href="{{ route('registrarDireccion')}}">Registrar Nueva Direccion</a></li>
												<li><a href="{{ route('direcciones')}}">Ver Registro de direcciones</a></li>
												
											</ul>
										</li>
										<li>
											<span class="opener">Materiales</span>
											<ul>
												<li><a href="{{ route('registrarMateriales')}}">Registrar Material</a></li>
												<li><a href="{{ route('materiales')}}">Ver Registro de Materiales</a></li>
											</ul>
										</li>
										@endif
										
										
									</ul>
								</nav>

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section> -->

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contactanos</h2>
									</header>
									<p>Si tienes alguna duda, contactanos nosotros la resolveremos</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>