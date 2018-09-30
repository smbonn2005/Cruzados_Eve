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
					<li><a href="index.php">Home</a></li>
					<!-- Aquí hay que mirar de poner unos if -->
					<?php
					if($_SESSION['auth_characterid']){
					?>
					<li><a href="users/whoami.php">My Applications</a></li>
					<li><a href="users/logout.php">Logout</a></li>
					<?php }else{ ?>
					<li><a href="users/devlogin.php">Apply to Cruzados</a></li>
					<li><a href="http://seat.cruzados.space">Corp SeAT</a></li>
					<br>
					<li><b>USEFUL LINKS</b></li>
					<li><a href="http://www.eveonline.com">Eve Online Official Site</a></li>
					<li><a href="http://www.goonfleet.com">Goonfleet Forums</a></li>
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
						<h1>We are CRUZADOS!</h1>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Who are We?</h2>
							<p>___________________________</p>
						</header>
						<div class="content">
							<p>Cruzados is an English & Spanish speaking Corp, proud member of the Goonswarm Federation, who dwell deep in null security space, beyond the reach of the four great Empires, and far from the protection of CONCORD. Together with our allies, we have forged our own Empire which knows no equal.</p>
						</div>
						<footer>
						</footer>
					</article>
				</div>
				<a href="#two" class="more">Learn More</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="banner5.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Why Join Cruzados?</h2>
							<p>There are more Corporations in Eve Online than there are Star Systems, so why join us?</p>
						</header>
						<div class="content">
							<ul>
								<li>Ship Reimbursement for alliance fleet losses</li>
								<li>Most Extensive <b><a href="https://wiki.goonfleet.com/main_page.html"> Wiki</a></b> covering every part of the game</li>
								<li>Alliance Jabber service to keep you up to date</li>
								<li>Mumble voice communication server for fleets and to talk to friends</li>
								<li>Special Interest Groups (SIGs) and Squads for any playstyle, including Deafswarm for those of us hard of hearing to still be able to receive fleet orders!</li>
								<li>Massive player run industrial and logistical infrastructure</li>
							</ul>
						</div>
						<footer>
						</footer>
					</article>
				</div>
				<a href="#three" class="more">Learn More</a>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>How to Join Cruzados?</h2>
							<p>___________________________</p>
						</header>
						<div class="content">
							<ul>
							  <li>Visit <a href="apply.cruzados.space"> apply.cruzados.space </a> or click on the link in the sidebar. </li>
							  <li>Follow the instructions on the Application page, and fill out the form to the best of your ability.</li>
							  <li>Once your API keys are registered and your application is submitted, our recruitment team will process your membership request. You will need to register API keys for every character you have, not just the applying characters. This process can sometimes take up to a week to complete</li>
							  <li>Once processed, you will get an in game notification letting you know that you have been accepted!</li>
							  <li>You will receive a welcome mail with all instructions needed to make sure you get safely to our home station, and get all the communication tools setup properly.</li>
							  <li>You're In! Go fly some spaceships, make ISK, and kill our enemies!</li>
							</ul>
						</div>

						<footer>
							<br />
							<a href="apply.php" class="button alt">APPLY NOW!</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Learn More</a>
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
