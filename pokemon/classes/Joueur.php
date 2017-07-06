<?php
require_once 'Pokemon.php';
require_once 'Recompense.php';
require_once 'Plateau.php';
require_once 'Carte.php';


/**
 * class Joueur
 * 
 */
class Joueur
{


	 /*** Attributes: ***/

	/**
	 * 
	 * @access private
	 */
	private $deck;

	/**
	 * 
	 * @access private
	 */
	private $defausse;

	/**
	 * une liste de 6 cartes récompense
	 * @access private
	 */
	private $recompense;


	/**
	 * 
	 *
	 * @param Carte carte 

	 * @param string emplacement 

	 * @return void
	 * @access public
	 */
	public function poserCarte( $carte,  $emplacement) {
	} // end of member function poserCarte

	/**
	 * 
	 *
	 * @param Carte pokemon 

	 * @return void
	 * @access public
	 */
	public function faireEvoluer( $pokemon) {
	} // end of member function faireEvoluer

	/**
	 * 
	 *
	 * @param Carte pokemon 

	 * @param Carte energie 

	 * @return void
	 * @access public
	 */
	public function attacherCarteEnergie( $pokemon,  $energie) {
	} // end of member function attacherCarteEnergie

	/**
	 * 
	 *
	 * @param Carte carte 

	 * @return void
	 * @access public
	 */
	public function jouerCarteDresseur( $carte) {
	} // end of member function jouerCarteDresseur

	/**
	 * 
	 *
	 * @param Carte pokemon 

	 * @return void
	 * @access public
	 */
	public function faireBattreEnRetraite( $pokemon) {
	} // end of member function faireBattreEnRetraite

	/**
	 * 
	 *
	 * @param Carte talent 

	 * @return void
	 * @access public
	 */
	public function utiliserTalent( $talent) {
	} // end of member function utiliserTalent

	/**
	 * 
	 *
	 * @return void
	 * @access public
	 */
	public function attaquer() {
	} // end of member function attaquer





} // end of Joueur
?>
