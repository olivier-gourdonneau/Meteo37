<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow" />
		<meta http-equiv="refresh" content="180" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
		<!-- Meteo37 CSS -->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="icon" href="images/favicon.ico" />
		<script type="text/javascript" src="js/fonctions.js"></script>
		<title>Meteo37</title>
		<base target="i2" />
	</head>
	<body>
		<!-- menu -->
		<div class="subnav container-fluid">
			<ul class="nav nav-pills nav-justified">
				<li class="nav-item">
					<a class="nav-link" href="https://tempsreel.infoclimat.net/temperature/france_now.png">Tempé</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://tempsreel.infoclimat.net/point_de_rosee/france_now.png">Td</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://tempsreel.infoclimat.net/pression/france_now.png">Pression</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://tempsreel.infoclimat.net/pression_variation_3h/france_now.png">Tendance</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://tempsreel.infoclimat.net/vent_moyen/france_now.png">Vent</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://tempsreel.infoclimat.net/vent_rafales/france_now.png">Rafales</a>
				</li>
			</ul>
		</div>
		<!-- affichage -->
		<div class="subsection container-fluid">
			<iframe name="i2" id="subsection_iframe" src="https://tempsreel.infoclimat.net/temperature/france_now.png"></iframe>
		</div>
		<!-- Meteo37 JS -->
		<script>ecran_util()</script>
		<!-- Popper and Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	</body>
</html>