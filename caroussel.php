<?php
// On démarre la session AVANT toute chose
session_start();

// On récupère la longitude et la latitude de la ville choisie pour afficher la bonne image satellite (IR la nuit et visible le jour)

$lat = 47.4;
$lon = 0.7;
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
		<!-- Meteo37 CSS -->
		<link rel="stylesheet" href="css/style.css" />
		<title>Meteo37 - Caroussel</title>
	</head>
	<body>
		<!-- caroussel -->
		<div class="carousel slide" id="carouselExampleControls" data-ride="carousel" data-interval="5000" data-wrap="false">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block slide_style" src="http://www.met.fu-berlin.de/de/wetter/maps/anabwkna.gif" alt="isofront" title="Analyse isofront - Europe">
				</div>
				<div class="carousel-item">
					<?php
					$sunrise = date_sunrise(time(), SUNFUNCS_RET_DOUBLE, $lat, $lon, 96)+1;
					$sunset = date_sunset(time(), SUNFUNCS_RET_DOUBLE, $lat, $lon, 96)-1;
					$heure = date("H");
					$minute = date("i");

					$heure_now = $heure + ($minute/60);

					if (($heure_now >= $sunset) || ($heure_now <= $sunrise)) {
					$sat = "http://neige.meteociel.fr/satellite/anim_ir.gif";
					}
					else {
					$sat = "http://neige.meteociel.fr/satellite/anim_vis.gif";
					}
					?>
					<a href="https://www.meteociel.fr/observations-meteo/satellite.php" target="_blank"><img class="d-block slide_style" src="<?php echo $sat; ?>" alt="sat-ir" title="Satellite intfra-rouge - Europe"></a>
				</div>
				<div class="carousel-item">
					<a href="http://www.meteociel.fr/observations-meteo/radarzoom.php?&snow=1" target="_blank"><img class="d-block slide_style" src="http://www.meteociel.fr/cartes_obs/radar/lastsnowradar.gif" alt="radar" title="Radar pluie-neige - France"></a>
				</div>
				<div class="carousel-item">
					<a href="https://www.infoclimat.fr/cartes/observations-meteo/temps-reel/temperature/france.html" target="_blank"><img class="d-block slide_style" src="https://tempsreel.infoclimat.net//temperature/france_now.png" alt="températures" title="Carte de températures - France"></a>
				</div>
				<div class="carousel-item">
					<a href="https://www.infoclimat.fr/" target="_blank"><img class="d-block slide_style" src="http://meteoalerte.com/france/france.gif" alt="meteoalert" title="Meteoalert Infoclimat" /></a>
				</div>
			</div>
		</div>
		<!-- Popper and Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	</body>
</html>
