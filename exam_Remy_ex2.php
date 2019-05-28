<?php


class ArrayManager {
	
	private $propriete;
	
	public function __construct($array) {
		$this->setPropriete($array);
	}
	
	public function setPropriete($array) {
		$this->$propriete = $array;
	}
	
	public function getPropriete() {
		return $this->$propriete;
	}
	
	public function plusPetitTrouver() {
		
		$nbPlusPetit = $this->$propriete[0];
	
		for($cpt = 0 ; $cpt < sizeof($this->$propriete) ; $cpt++) {
			if ($this->$propriete[$cpt] < $nbPlusPetit) {
				$nbPlusPetit = $this->$propriete[$cpt];
			}
		}
		return $nbPlusPetit;
	}
	
	
	
}