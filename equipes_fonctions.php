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
 *  [(#SAISIE{checkbox, id_equipe, Choisir une case à cocher, datas=[(#REM|equipes_liste_equipes)]})]
 *  [(#SAISIE{radio, categorie, datas=[(#REM|equipes_liste_equipes)]})]
 *  [(#SAISIE{selection, categorie, datas=[(#REM|equipes_liste_equipes)]})]
 * 
 * @param int id_rubrique
 *		possibilité de forunir l'id de la rubrique : liste des équipes de cette rubrique uniquement
 *  	[(#SAISIE{selection, categorie, datas=[(#ID_RUBRIQUE|equipes_liste_equipes)]})]
 * @param string defaut
 *		Valeur par defaut du tableau d'equipe : permetter d'initialiser
 *  	[(#SAISIE{selection, categorie, datas=[(#REM|equipes_liste_equipes{Veuillez choisir une équipe})]})]
 *
 * @return array
 *		array(id_equipe -> nom, etc.)
 */
function equipes_liste_equipes($id_rubrique = 0, $defaut = null) {
	$liste_equipes = array();

	if ($defaut) {
		$liste_equipes = array('' => $defaut);
	}

	if ($id_rubrique > 0) {
		$res = sql_allfetsel('id_equipe, nom', 'spip_equipes', 'id_rubrique='.intval($id_rubrique));
	} else {
		$res = sql_allfetsel('id_equipe, nom', 'spip_equipes');
	}
	
	foreach ($res as $value) {
		$add_equipes[$value['id_equipe']] = $value['nom'];
	}

	if (isset($add_equipes)){
		$liste_equipes += $add_equipes;
	}

	return $liste_equipes;
}
