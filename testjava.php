<?php
class Personnage
{
	private $_forme;
	public $_force = 0;
	private $_vitesse;
	private $_pouvoir;
	private $_intelligence;
	public $_localisation;
	public $_experience = 0;
	public $_dégats = 0;

	public function frapper() {

	}

	public function déplacer() {

	}

	public function afficherExperience() {
		echo $this->_experience;
		echo ('Le personnage a gagné 1 point(s) en expérience</br>');
	}
	public function gagnerExperience() {
		$this->_experience = $this->_experience + 1;
	}

	public function parler() {

		echo('Je suis un personnage créé pour vous guider dans la POO');
		
	}
}






//programme principal
$perso = new Personnage;
$perso -> parler();
$perso-> gagnerExperience();
$perso->_experience = $perso->_experience + 1;
$perso-> afficherExperience();

