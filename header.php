<!doctype html>
	<html lang="fr">
		<head>
			<meta charset="utf-8" />
			<meta name="robots" content="noindex,nofollow" />
			<title>Meteo37 - Header</title>
			<link rel="icon" type="image/ico" href="images/favicon.ico" />
			<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
			<!-- test activation Javascript -->
			<noscript>
				<meta http-equiv="refresh" content="0; url=no_js.php" />
			</noscript>
			<script type="text/javascript" src="js/fonctions.js"></script>
		</head>
		<body onmousemove="temps=0" onclick="temps=0" onload="go()">
			<a href="http://france.meteofrance.com/vigilance/Accueil" target="_blank"><img id="header_vigi" src="http://www.meteo.fr/meteonet/vigilance/cartes/derniers/mn.gif" alt="vigilance_france" title="Carte de Vigilance de Météo-France" /></a>
			<div id="header_titre">
				<h1>Meteo37</h1>
				<h2><?php echo $titre ;?></h2>
			</div>
			<div id="header_infos">
				Meteo37 - &copy; 2006-<?php echo date ("Y", getlastmod()); ?> - 
				<a href="mailto:%6D%74%6F%33%37%40%66%72%65%65%2E%66%72?subject=demande%20d'amélioration%20pour%20Meteo37."><img class="header_picto_style" src="images/email.ico" title="Contactez-nous" alt="email" /></a>
				<a href="https://twitter.com/Meteo37/lists/meteo37" target="_blank"><img class="header_picto_style" src="images/twitter.ico" title="Fil Twitter" alt="twitter" /></a>
				<a href="maj_site.php" target="_blank"><img class="header_picto_style" src="images/maj.ico" title="Mises à jour du site" alt="maj_site" /></a>
				<a href="infos_site.php" target="_blank"><img class="header_picto_style" src="images/infos.ico" title="Informations sur le site" alt="infos_site" /></a>
			</div>
			<div id="header_reload">
				rechargement automatique dans <span style="color:red;" id="aff_reload">180</span> secondes
			</div>
			<!-- test acceptation cookies -->
			<script>
				if (!navigator.cookieEnabled) {
					alert('ATTENTION !!! Votre navigateur n\'accepte les cookies.\nL\'application ne fonctionnera pas correctement.\nCliquez sur OK et suivez la procédure pour accepter les cookies.');
					window.open("http://www.accepterlescookies.com/", "_blank");
				}
			</script>
		</body>
	</html>
