<?php
require_once 'Carte.php';
require_once 'Energie.php';


/**
 * class Pokemon
 * 
 */
class Pokemon extends Carte
{
	 /*** Attributes: ***/

	/**
	 * 
	 * @access private
	 */
	private $niveau = base;

	/**
	 * 
	 * @access private
	 */
	private $nom;

	/**
	 * 
	 * @access private
	 */
	private $PV;

	/**
	 * 
	 * @access private
	 */
	private $force;

	/**
	 * 
	 * @access private
	 */
	private $faiblesses;

	/**
	 * 
	 * @access private
	 */
	private $resistance;

	/**
	 * 
	 * @access private
	 */
	private $evolutionDe;

	/**
	 * 
	 * @access private
	 */
	private $sexe;

	/**
	 * états spéciaux : brûlé, confus, empoisonné, endormi, paralysé
	 * Un état spécial ne peut être appliqué qu'au pokémon actif !
	 * @access private
	 */
	private $etatSpecial;


	/**
	 * 
	 *
	 * @return void
	 * @access public
	 */
	public function evoluer() {
	} // end of member function evoluer

	/**
	 * 
	 *
	 * @return void
	 * @access public
	 */
	public function battreEnRetraite() {
	} // end of member function battreEnRetraite

	/**
	 * 
	 *
	 * @return void
	 * @access public
	 */
	public function utiliserTalent() {
	} // end of member function utiliserTalent





} // end of Pokemon
?>
