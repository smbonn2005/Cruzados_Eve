<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Cruzados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Cruzados <span>/ Goonswarm Federation </span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Inicio</a></li>
					<!-- Aquí hay que mirar de poner unos if -->
					<?php
					if($_SESSION['auth_characterid']){
					?>
					<li><a href="users/whoami.php">Mis solicitudes</a></li>
					<li><a href="users/logout.php">Logout</a></li>
					<?php }else{ ?>
					<li><a href="users/devlogin.php">Unirse a Cruzados</a></li>
					<li><a href="http://seat.cruzados.space">SeAT de Corp</a></li>
					<br>
					<li><b>LINKS ÚTILES</b></li>
					<li><a href="http://www.eveonline.com">Eve Online - Web Oficial</a></li>
					<li><a href="http://www.goonfleet.com">Goonfleet - Foro</a></li>
					<li><a href="http://www.evepraisal.com">Evepraisal</a></li>
					<li><a href="http://www.evemarketer.com">Eve Marketer</a></li>
					<li><a href="http://www.adashboard.info">Adashboard</a></li>
					<?php } ?>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="bhaaltec2.png">
				<div class="inner">
					<header>
						<h1>Somos CRUZADOS!</h1>
					</header>
				</div>
				<a href="#one" class="more">Saber mas</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Quienes somos?</h2>
							<p>___________________________</p>
						</header>
						<div class="content">
							<p>Cruzados es una corporación Hispana y Inglesa. Pertenecemos a la alianza de Goonswarm Federation la cual vive en nullsec, lejos de los cuatro gran imperios y de la protección de CONCORD. Junto con nuestros aliados hemos formado nuestro propio Imperio el cual nadie hasta la fecha ha logrado superar.</p>
						</div>
						<footer>
						</footer>
					</article>
				</div>
				<a href="#two" class="more">Saber mas</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="banner5.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Porque unirse a CRUZADOS?</h2>
							<p>Hay mas corporaciones en Eve Online que Sistemas Solares en el espacio, porque nosotros?</p>
						</header>
						<div class="content">
							<ul>
								<li>Reembolso de naves en caso de muerte durante flotas de alianza.</li>
								<li>Extensa <b><a href="https://wiki.goonfleet.com/main_page.html"> Wiki</a></b> propia la cual cubre los aspectos del juego que no encontrarás en otra parte. </li>
								<li>Jabber de Alianza para mantenerte al día.</li>
								<li>Servidor de voz Mumble para flotas, corporación y amigos.</li>
								<li>Grupos de Interés Especial (SIGs) y Escuadrones para cada estilo de juego!</li>
								<li>Infraestructura logistica y industrial masiva.</li>
							</ul>
						</div>
						<footer>
						</footer>
					</article>
				</div>
				<a href="#three" class="more">Saber mas</a>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Como unirse a Cruzados?</h2>
							<p>___________________________</p>
						</header>
						<div class="content">
							<ul>
							  <li>Dirigete a <a href="apply.cruzados.space"> apply.cruzados.space </a> or haz click en el link del lateral. </li>
							  <li>Sigue las instrucciones de la pagina y llena el formulario lo mejor que puedas.</li>
							  <li>Una vez tu API esté registrada y tu formulario enviado, nuestro equipo de reclutamiento procederá con tu solicitud. Necesitarás registrar tu API para cada cuenta que tengas, no solo la principal.</li>
							  <li>Una vez revisado, recebirás una notificación dentro del juego haciendote saber si has sido aceptado!</li>
							  <li>Recibirás un email de bienvenida con todas las instrucciones necesarias para mudarte a nuestro hogar y configurar los principales programas de comunicación.</li>
							  <li>Listo! Ve a pilotar, hacer ISKs y matar a nuestros enemigos!</li>
							</ul>
						</div>

						<footer>
							<br />
							<a href="apply.php" class="button alt">UNETE AHORA!</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Saber mas</a>
			</section>

		<!-- Footer -->
		<section id="four">
			<footer id="footer">
				<div class="inner">

					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Cruzados Corp. 2018
					</div>

				</div>
			</footer>
    </section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
