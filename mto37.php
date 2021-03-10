<?php
session_start ();

if (isset($_SESSION['reseau']) and isset($_SESSION['ville']))
{
?>
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
			<style>
			<?php
				// afficher ou non les menus en fonction du type de connexion
				if ($_SESSION['reseau'] == "invité") {
					?>
					.menu_visible_ext { display:none; }
					.menu_visible_int { display:none; }
					<?php
				}
				else if ($_SESSION['reseau'] == "externe") {
					?>
					.menu_visible_int { display:none; }
					<?php
				}
				?>
			</style>
			<link rel="icon" href="images/favicon.ico" />
			<script type="text/javascript" src="js/fonctions.js"></script>
			<title>Meteo37 - accès <?php echo $_SESSION['reseau']; ?></title>
			<base target="i1" />
		</head>
		<body>
			<!-- header -->
			<div class="header container-fluid">
				<nav class="navbar navbar-expand-lg">
					<?php include('header_titre.php') ; ?>
					<div id="navbarContent" class="collapse navbar-collapse header_page_style">
						<ul class="navbar-nav">
							<li class="nav-item active dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Météo pour <?php echo $_SESSION['ville']; ?></a>
								<!-- bloc menu déroulant -->
								<ul class="dropdown-menu dropdown-menu-right dropdown_style" aria-labelledby="navbarDropdownMenuLink">
									<li class="menu_visible_ext"><a class="dropdown-item" href="https://pro.meteofrance.com/page/index/affiche/id/246578/insee/37179001?mode=fenetre"><img class="menu_picto_style" src="images/meteofrance.ico" alt="meteofrance" />Observation</a></li>
									<li class="menu_visible_int"><a class="dropdown-item" href="http://www.meteo.fr/test/meteotel/pics/test_clim.htm?a=371790&b="><img class="menu_picto_style" src="images/meteofrance.ico" alt="meteofrance" />Normales</a></li>
									<li class="menu_visible_ext"><a class="dropdown-item" href="https://pro.meteofrance.com/page/index/affiche/id/246583/insee/371790?mode=fenetre"><img class="menu_picto_style" src="images/meteofrance.ico" alt="meteofrance" />Prévisions (atmogramme)</a></li>
									<li class="menu_visible_ext"><a class="dropdown-item" href="https://pro.meteofrance.com/page/index/affiche/id/246582/insee/371790?mode=fenetre"><img class="menu_picto_style" src="images/meteofrance.ico" alt="meteofrance" />Prévisions (données quot)</a></li>
									<li><a class="dropdown-item" href="https://vigilance.meteofrance.fr/fr/widget-vigilance/vigilance-departement/37"><img class="menu_picto_style" src="images/meteofrance.ico" alt="meteofrance" />Vigilance</a></li>
									<li class="menu_visible_ext"><a class="dropdown-item" href="https://pro.meteofrance.com/page/index/affiche/id/246648/insee/37179001?mode=fenetre"><img class="menu_picto_style" src="images/meteofrance.ico" alt="meteofrance" />Proba</a></li>
									<div class="dropdown-divider"></div>
									<li><a class="dropdown-item" href="infos_station.php"><img class="menu_picto_style" src="images/infos.ico" alt="infos" />Infos station</a></li>
									<div class="dropdown-divider"></div>
									<li><a class="dropdown-item" href="index.php" target="_self"><img class="menu_picto_style" src="images/param.ico" alt="param" />Changer de station</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Observations</a>
								<!-- bloc menu déroulant -->
								<ul class="dropdown-menu dropdown-menu-right dropdown_style" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="obs_monde.php">Monde</a></li>
									<li><a class="dropdown-item" href="obs_europe.php">Europe</a></li>
									<li><a class="dropdown-item" href="obs_france.php">France</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Imagerie</a>
								<!-- bloc menu déroulant -->
								<ul class="dropdown-menu dropdown-menu-right dropdown_style" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="img_sat.php">Satellites</a></li>
									<li><a class="dropdown-item" href="img_radar.php">Radars</a></li>
									<li><a class="dropdown-item" href="img_foudre.php">Foudre</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modèles</a>
								<!-- bloc menu déroulant -->
								<ul class="dropdown-menu dropdown-menu-right dropdown_style" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="http://www.meteociel.fr/modeles/arome.php?ech=3&mode=101&map=0" target="_blank"><img class="menu_picto_style" src="images/meteociel.ico" alt="meteociel" />Météociel</a></li>
									<li><a class="dropdown-item" href="https://www.windy.com/47.357/0.738/meteogram?rain,46.766,0.736,8,i:pressure,m:eX4agco" target="_blank"><img class="menu_picto_style" src="images/windy.ico" alt="windy" />Windy</a></li>
									<li><a class="dropdown-item" href="https://www.wxcharts.com/?panel=default&model=arpege,arpege,arpege,arpege&region=france&chart=overview,convective_overview,wind10mkph,snowdepth&run=12&step=003&plottype=arpege_4&lat=47.358&lon=0.740&skewtstep=0" target="_blank"><img class="menu_picto_style" src="images/wxcharts.ico" alt="wxcharts" />WXcharts</a></li>
									<li><a class="dropdown-item" href="https://www.wetterzentrale.de/en/panels.php?model=gfs&map=1&var=1&lid=OP" target="_blank"><img class="menu_picto_style" src="images/wetterzentrale.ico" alt="wetterzentrale" />Wetterzentrale</a></li>
									<li><a class="dropdown-item" href="https://ready.arl.noaa.gov/READYcmet.php?" target="_blank"><img class="menu_picto_style" src="images/noaa.ico" alt="noaa" />ARL-NOAA</a></li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Prévisions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Liens</a>
							</li>
						</ul>
						<!-- bouton déconnexion -->
						<ul class="navbar-nav">
							<li class="nav-item">
									<a class="nav-link" href="logout.php" target="_self"><img src="images/disconnect.png" alt="disconnect" title="Déconnexion" /></a>
							</li>
						</ul>
					</div>
					<!-- bloc infos site -->
					<div id="navbarContent" class="collapse navbar-collapse justify-content-end">
						<?php include('header_infos.php') ; ?>
					</div>
				</nav>
			</div>
			<!-- section -->
			<div class="section container-fluid">
				<iframe name="i1" id="section_iframe" src="caroussel.php"></iframe>
			</div>
			<!-- Meteo37 JS -->
			<script>ecran_util()</script>
			<!-- Popper and Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
		</body>
	</html>
<?php
}
else
{
	// sinon, retour à la page de sisie des paramètres
	header ('location: index.php');
}
?>