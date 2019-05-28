<?php

include 'exam_remy_ex2.php';

function tableauEntierGenerer($nbIndex, $minimum, $maximum){
	
	$listeNombre = [];

	for ($cpt = 0; $cpt < $nbIndex; $cpt++) {
		array_push($listeNombre, rand($minimum, $maximum));
	}
	return $listeNombre;
}


$listeNombre = tableauEntierGenerer(20,0, 100);


echo '<pre>';
print_r($listeNombre); 
echo '</pre>';



function plusPetitTrouver($tableau) {
	
	$nbPlusPetit = $tableau[0];
	
	for($cpt = 0 ; $cpt < sizeof($tableau) ; $cpt++) {
		if ($tableau[$cpt] < $nbPlusPetit) {
			$nbPlusPetit = $tableau[$cpt];
		}
	}
	return $nbPlusPetit;
}


echo '<pre>';
print_r("le plus petit nombre du tableau est: " . plusPetitTrouver($listeNombre)); 
echo '</pre>';


/*-------------------- exercice 2 -------------------*/

$listeNombre2 = tableauEntierGenerer(30, 100, 200);

$arrayManager = new ArrayManager($listeNombre2);


//var_dump($arrayManager);

$nbPlusPetit = $arrayManager->plusPetitTrouver();

//var_dump($nbPlusPetit);