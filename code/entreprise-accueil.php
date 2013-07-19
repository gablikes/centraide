<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Mon site</title>
	<link href='http://fonts.googleapis.com/css?family=Enriqueta:400,700|Asap:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


</head>
<body>


<div id="page" class="container">

	<aside id="sidebar">

		<section class="wrapper en-tete-aside">

			<header>

				<img width="90" alt="Logo de Centraide Québec et Chaudière-Appalache" src="/images/logo-centraide.png">
				<h1>Votre campagne en ligne</h1>

			</header>

			<a class="bt-rose" href="#" title="Faire un don">Faire un don</a>

		</section>

		<section class="wrapper">

			<h2>Connectez-vous</h2>

			<form method='get' accept-charset='UTF-8' name='oi_form' action='#'>
				<label for="email" class="visuallyhidden">Courriel</label> 
				<input type='email' name='email' placeholder="Votre courriel" />
				<input class="bt-rose fr" type='submit' value="Connexion" />
			</form>

			<a class="fbconnect" href="#" title="Me connecter via Facebook">Me connecter via Facebook</a>
			<a class="gmailconnect" href="#" title="Me connecter via Gmail">Me connecter via Gmail</a>

		</section>

		<section class="wrapper">

			<h2>Progression de la campagne</h2>

			<div id="thermo">

				

			</div>

		</section>

	</aside>

	<header>

		<img src="http://placehold.it/830x246">
		<div class="vignette">
			
			<img title="Evollia" src="http://placehold.it/180x180">
		</div>

	</header>

	<div id="content">

		<hr class="clear">

		<section class="c3">

			<h2>Classement</h2>

			<h3>Mes badges</h3>

			yeha

			<div id="tabs">

				<ul>
					<li><a href="#tabs-1">Meilleurs donateurs</a></li>
				</ul>

				<div id="tabs-1" class="table">

					<ol class="content">

						<li>
							<div class="c4 entreprise vignette">
								<span class="index"><strong>1</strong></span>
								<img src="http://placehold.it/50x50">
								<strong class="title">Frédéric Bolduc</strong>
							</div>
							<div class="c2 don-moyen">
								<strong>68 $</strong>
							</div>
							<hr class="clear">
						</li>

						<li>
							<div class="c4 entreprise vignette">
								<span class="index"><strong>1</strong></span>
								<img src="http://placehold.it/50x50">
								<strong class="title">Frédéric Bolduc</strong>
							</div>
							<div class="c2 don-moyen">
								<strong>68 $</strong>
							</div>
							<hr class="clear">
						</li>
						
							
					</ol>

				</div>

			</div>

		</section>

		<section class="c3">

			<h2>Dernière activité</h2>

			<ul class="news vignette">
				<li>
					<img src="http://placehold.it/50x50">
					<span class="title"><strong>Frédéric Bolduc</strong> a donné 10$</span>
					<span class="time">Il y a 1 jours</span>
				</li>
				<li>
					<img src="http://placehold.it/50x50">
					<span class="title"><strong>Frédéric Bolduc</strong> a donné 10$</span>
					<span class="time">Il y a 1 jours</span>
				</li>
				<li>
					<img src="http://placehold.it/50x50">
					<span class="title"><strong>Frédéric Bolduc</strong> a donné 10$</span>
					<span class="time">Il y a 1 jours</span>
				</li>
				<li>
					<img src="http://placehold.it/50x50">
					<span class="title"><strong>Frédéric Bolduc</strong> a donné 10$</span>
					<span class="time">Il y a 1 jours</span>
				</li>
			</ul>

		</section>

	</div>

</div>

<?php include('footer.php'); ?>

