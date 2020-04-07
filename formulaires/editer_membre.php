<?php
/**
 * Gestion du formulaire de d'édition de membre
 *
 * @plugin     Équipes et leurs membres
 * @copyright  2019
 * @author     Pierre Miquel
 * @licence    GNU/GPL
 * @package    SPIP\Equipes\Formulaires
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

include_spip('inc/actions');
include_spip('inc/editer');


/**
 * Identifier le formulaire en faisant abstraction des paramètres qui ne représentent pas l'objet edité
 *
 * @param int|string $id_membre
 *     Identifiant du membre. 'new' pour un nouveau membre.
 * @param int $id_equipe
 *     Identifiant de l'objet parent (si connu)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un membre source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du membre, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return string
 *     Hash du formulaire
 */
function formulaires_editer_membre_identifier_dist($id_membre = 'new', $id_equipe = 0, $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	return serialize(array(intval($id_membre)));
}

/**
 * Chargement du formulaire d'édition de membre
 *
 * Déclarer les champs postés et y intégrer les valeurs par défaut
 *
 * @uses formulaires_editer_objet_charger()
 *
 * @param int|string $id_membre
 *     Identifiant du membre. 'new' pour un nouveau membre.
 * @param int $id_equipe
 *     Identifiant de l'objet parent (si connu)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un membre source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du membre, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Environnement du formulaire
 */
function formulaires_editer_membre_charger_dist($id_membre = 'new', $id_equipe = 0, $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$valeurs = formulaires_editer_objet_charger('membre', $id_membre, $id_equipe, $lier_trad, $retour, $config_fonc, $row, $hidden);
	if (!$valeurs['id_equipe']) {
		$valeurs['id_equipe'] = $id_equipe;
	}

	if ($id_rubrique = sql_getfetsel('id_rubrique', 'spip_equipes', 'id_equipe='.intval($id_equipe))) {
		$valeurs['id_rubrique'] = $id_rubrique;
	}

	return $valeurs;
}

/**
 * Vérifications du formulaire d'édition de membre
 *
 * Vérifier les champs postés et signaler d'éventuelles erreurs
 *
 * @uses formulaires_editer_objet_verifier()
 *
 * @param int|string $id_membre
 *     Identifiant du membre. 'new' pour un nouveau membre.
 * @param int $id_equipe
 *     Identifiant de l'objet parent (si connu)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un membre source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du membre, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Tableau des erreurs
 */
function formulaires_editer_membre_verifier_dist($id_membre = 'new', $id_equipe = 0, $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$erreurs = array();

	$erreurs = formulaires_editer_objet_verifier('membre', $id_membre, array('nom', 'id_equipe'));

	return $erreurs;
}

/**
 * Traitement du formulaire d'édition de membre
 *
 * Traiter les champs postés
 *
 * @uses formulaires_editer_objet_traiter()
 *
 * @param int|string $id_membre
 *     Identifiant du membre. 'new' pour un nouveau membre.
 * @param int $id_equipe
 *     Identifiant de l'objet parent (si connu)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un membre source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du membre, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Retours des traitements
 */
function formulaires_editer_membre_traiter_dist($id_membre = 'new', $id_equipe = 0, $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$retours = formulaires_editer_objet_traiter('membre', $id_membre, $id_equipe, $lier_trad, $retour, $config_fonc, $row, $hidden);
	return $retours;
}
