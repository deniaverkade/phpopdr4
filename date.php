<?php
echo "Het is vandaag: " .  date("l d F Y") . ".<br>"; 
echo "Vandaag is het de " . date("z") . "e van het jaar.<br>";
echo date("l") . " is de " . date("N") . "e dag van de week.<br>";
echo "De maand " . date("F") . " heeft in totaal " . date("t") . " dagen.<br>";
$schikkel = date("L");

if ($schikkel == 0) {
    echo "Het jaar " . date("Y") . " is geen schikkeljaar.";
} else {
    echo "Het jaar " . date("Y") . " is een schikkeljaar.";
}

?>