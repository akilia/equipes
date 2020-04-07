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


/**
 * Retourner le tableau id_equipe/nom des equipes existantes
 * Utile pour les #SAISIE -> datas
 *
 * @example
 *  [(#SAISIE{checkbox, id_equipe, Choisir une case à cocher, datas=[(#VAL{4}|equipes_liste_equipes)]})]
 *  [(#SAISIE{radio, categorie, datas=[(#VAL{1}|equipes_liste_equipes{valeur_par_defaut})]})]
 *  [(#SAISIE{selection, categorie, datas=[(#VAL{1}|equipes_liste_equipes{valeur_par_defaut})]})]
 * 
 * @param int id_rubrique
 *		ID de la rubrique de la liste des équipes à récupérer
 * @param string defaut
 *		Valeur par defaut du tableau d'equipe
 *
 * @return array
 *		array(id_equipe -> nom, etc.)
 */
function equipes_liste_equipes($id_rubrique = 0, $defaut = null) {
	$liste_equipes = array();

	if ($defaut) {
		$liste_equipes = array('' => $defaut);
	}

	$res = sql_allfetsel('id_equipe, nom', 'spip_equipes');
	foreach ($res as $value) {
		$add_equipes[$value['id_equipe']] = $value['nom'];
	}

	if (isset($add_equipes)){
		$liste_equipes += $add_equipes;
	}

	return $liste_equipes;
}
