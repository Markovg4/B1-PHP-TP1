<?php
	 define("CONV_ND_KMH",1.852) ;
	 echo "Saisir la vitesse en km/h: " ;
	 $vitesse = fgets (STDIN);
	 $vitesseNoeuds = $vitesse / CONV_ND_KMH ;
	 echo "Résultat de la conversion:", $vitesseNoeuds , "noeuds\n" ;
?>
