<?php
/**
 * Fonctions utiles au plugin Équipes et leurs membres
 *
 * @plugin     Équipes et leurs membres
 * @copyright  2019
 * @author     Pierre Miquel
 * @licence    GNU/GPL
 * @package    SPIP\Equipes\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Virer les espaces blancs dans un numéro de téléphone
 *
 * @param string $text
 * @return string
 */
function remove_whitespace($text) {
	return str_replace(' ', '', $text);
}
