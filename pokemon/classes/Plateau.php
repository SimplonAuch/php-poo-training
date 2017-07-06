<?php
require_once 'Pokemon.php';
require_once 'Joueur.php';


/**
 * class Plateau
 * 
 */
class Plateau
{

	 /*** Attributes: ***/

	/**
	 * 
	 * @access private
	 */
	private $joueurs;

	/**
	 * A quel joueur de jouer ?
	 * @access private
	 */
	private $tour;


	/**
	 * 
	 *
	 * @return void
	 * @access public
	 */
	public function demarrer() {
		$this->joueurs = Array(
			new Joueur(),
			new Joueur()
		);
		
		$this->tour =& $this->joueurs[0];
	} // end of member function demarrer

	/**
	 * 
	 *
	 * @return void
	 * @access public
	 */
	public function distribuerCartes() {
	} // end of member function distribuerCartes

	/**
	 * 
	 *
	 * @return Joueur
	 * @access public
	 */
	public function getJoueur1() {
		return $this->joueurs[0];
	} // end of member function getJoueur1

	/**
	 * 
	 *
	 * @return Joueur
	 * @access public
	 */
	public function getJoueur2() {
		return $this->joueurs[1];
	} // end of member function getJoueur2



	public function render(){
		print_r( $this );
	}

	public function render2(){
		print_r( $this );
	}


} // end of Plateau
?>
