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
					<li><a href="index.html">Inicio</a></li>
					<!-- Aquí hay que mirar de poner unos if -->
					<?php 
					if($_SESSION['auth_characterid']){
					?>
					<li><a href="users/whoami.php">Quienes somos</a></li>
					<li><a href="users/logout.php">Logout</a></li>
					<?php }else{ ?>
					<li><a href="users/devlogin.php">Login</a></li>
					<?php } ?>
					
					
					<li><a href="elements.html">Elementos</a></li>
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
							<a href="generic.html" class="button alt">Saber mas</a>
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
							<a href="generic.html" class="button alt">Saber mas</a>
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
							<h2>Varius a cursus aliquet</h2>
							<p>11.11.2016</p>
						</header>
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						</div>
						<footer>
							<a href="generic.html" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Learn More</a>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper post bg-img" data-bg="banner3.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Luctus blandit mi lectus in nascetur</h2>
							<p>10.30.2016</p>
						</header>
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						</div>
						<footer>
							<a href="generic.html" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contacto</h2>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Nombre</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Mensaje</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Enviar Mensaje" class="button alt" type="submit"></li>
						</ul>
					</form>

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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
