<?php
	 echo "Saisir la température en °C: " ;
	 $temperatureC = fgets (STDIN) ;
	 $temperatureF = 1.8 * $temperatureC + 32 ;
	 echo "Température en °F: ", $temperatureF ,"\n" ;
?>
