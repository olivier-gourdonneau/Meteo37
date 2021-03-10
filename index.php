<?php
// On démarre la session AVANT toute chose
session_start();

if (empty($_POST['reseau']) and empty($_POST['ville']))
{
	// Pas de saisie, on affiche le formulaire
	?>
	<!doctype html>
	<html lang="fr">
		<head>
			<meta charset="utf-8" />
			<meta name="robots" content="noindex,nofollow" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
			<!-- Meteo37 CSS -->
			<link rel="stylesheet" href="css/style.css" />
			<link rel="icon" href="images/connect.ico" />
			<title>Meteo37 - Connexion</title>
		</head>
		<body>
			<!-- header -->
			<div class="header container-fluid">
				<nav class="navbar navbar-expand-lg">
					<?php include('header_titre.php') ; ?>
					<div id="navbarContent" class="collapse navbar-collapse header_page_style">
					Connexion
					</div>
					<div id="navbarContent" class="collapse navbar-collapse justify-content-end">
						<?php include('header_infos.php') ; ?>
					</div>
				</nav>
			</div>
			<!-- section -->
			<div class="section container-fluid">
				<form action="index.php" method="post">
					<!-- saisie du type de connexion -->
					<div class="form-row">
						<div class="col">
						</div>
						<div class="form-group col-lg-6 col-md-8 col-sm-12">
							<legend>1 - Choisissez votre type de connexion :</legend>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="reseau" id="choix_interne" value="interne" checked />
								<label class="form-check-label" for="choix_interne">
									Accès interne : depuis le réseau Météo-France (sur site ou en télétravail) et avec une adresse mail professionnelle.
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="reseau" id="choix_externe" value="externe" />
								<label class="form-check-label" for="choix_externe">
									Accès externe : hors réseau Météo-France mais avec une adresse mail professionnelle.
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="reseau" id="choix_invité" value="invité" />
								<label class="form-check-label" for="choix_invité">
									Accès invité.
								</label>
							</div>
							<small class="form-text">Info : cette option permet d'optimiser les choix de menus.</small>
						</div>
						<div class="col">
						</div>
					</div>
					<!-- choix de la ville -->
					<div class="form-row">
						<div class="col">
						</div>
						<div class="form-group col-lg-6 col-md-8 col-sm-12">
							<legend>2 - Choisissez une ville :</legend>
							<input list="liste_ville" id="choix_ville" name="ville" required autocomplete="off" placeholder="Saisissez au moins un caractère"/>
							<datalist id="liste_ville">
								<option value="Tours">
								<option value="Toulon">
								<option value="Bourges">
								<option value="Orléans">
								<option value="Tarbes">
							</datalist>
						</div>
						<div class="col">
						</div>
					</div>
					<!-- validation -->
					<div class="form-row">
						<div class="col">
						</div>
						<div class="form-group col-lg-6 col-md-8 col-sm-12">
							<legend>3 - Validez vos choix :</legend>
							<button type="submit" class="btn">Valider</button>
						</div>
						<div class="col">
						</div>
					</div>
				</form>
			</div>
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
	// récupération des variables pour la session
	$_SESSION['reseau'] = $_POST['reseau'];
	$_SESSION['ville'] = $_POST['ville'];
	
	// sinon, affichage de la page principale
	header ('location: mto37.php');
}
?>