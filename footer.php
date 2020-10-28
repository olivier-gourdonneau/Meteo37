<?php
	$annee_creation = date ("Y", getlastmod());
	$date_creation = date ("d/m/Y", getlastmod());
	
	echo '&copy; Meteo37 - 2006- ' . $annee_creation . ' - <img class="picto_style" src="images/w3c_html5.png" alt="w3c_validator" title="html5 et css validés par W3C validator" /><a href="mailto:mto37@free.fr"><img class="picto_style" src="images/email.ico" title="Contactez-nous" alt="email" /></a> <img class="picto_style" src="images/maj.ico" title="Dernière mise à jour le ' . $date_creation . ' " alt="maj" /><a href="infos_site.php" target="_blank"><img class="picto_style" src="images/infos.ico" title="Informations sur le site" alt="infos" /></a>';
?>