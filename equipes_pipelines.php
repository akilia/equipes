<?php
/**
 * Utilisations de pipelines par Équipes et leurs membres
 *
 * @plugin     Équipes et leurs membres
 * @copyright  2019
 * @author     Pierre Miquel
 * @licence    GNU/GPL
 * @package    SPIP\Equipes\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Ajouter les objets sur les vues des parents directs
 *
 * @pipeline affiche_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function equipes_affiche_enfants($flux) {
	if ($e = trouver_objet_exec($flux['args']['exec']) and $e['edition'] == false) {
		$id_objet = $flux['args']['id_objet'];

		if ($e['type'] == 'rubrique') {

			$flux['data'] .= recuperer_fond(
				'prive/objets/liste/equipes',
				array(
					'titre' => _T('equipe:titre_equipes_rubrique'),
					'id_rubrique' => $id_objet
				)
			);

			if (autoriser('creerequipedans', 'rubrique', $id_objet)) {
				include_spip('inc/presentation');
				$flux['data'] .= icone_verticale(
					_T('equipe:icone_creer_equipe'),
					generer_url_ecrire('equipe_edit', "id_rubrique=$id_objet"),
					'equipe-24.png',
					'new',
					'right'
				) . "<br class='nettoyeur' />";
			}

		}

		if ($e['type'] == 'equipe') {
			$flux['data'] .= recuperer_fond(
				'prive/objets/liste/membres',
				array(
					'titre' => _T('membre:titre_membres'),
					'id_equipe' => $id_objet
				)
			);

			if (autoriser('creermembredans', 'equipes', $id_objet)) {
				include_spip('inc/presentation');
				$flux['data'] .= icone_verticale(
					_T('membre:icone_creer_membre'),
					generer_url_ecrire('membre_edit', "id_equipe=$id_objet"),
					'membre-24.png',
					'new',
					'right'
				) . "<br class='nettoyeur' />";
			}
		}
	}
	return $flux;
}

/**
 * Afficher le nombre d'éléments dans les parents
 *
 * @pipeline boite_infos
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function equipes_boite_infos($flux) {
	if (isset($flux['args']['type']) and isset($flux['args']['id']) and $id = intval($flux['args']['id'])) {
		$texte = '';
		if ($flux['args']['type'] == 'rubrique' and $nb = sql_countsel('spip_equipes', array("statut='publie'", 'id_rubrique=' . $id))) {
			$texte .= '<div>' . singulier_ou_pluriel($nb, 'equipe:info_1_equipe', 'equipe:info_nb_equipes') . "</div>\n";
		}
		if ($flux['args']['type'] == 'equipe' and $nb = sql_countsel('spip_membres', array("statut='publie'", 'id_equipe=' . $id))) {
			$texte .= '<div>' . singulier_ou_pluriel($nb, 'membre:info_1_membre', 'membre:info_nb_membres') . "</div>\n";
		}
		if ($texte and $p = strpos($flux['data'], '<!--nb_elements-->')) {
			$flux['data'] = substr_replace($flux['data'], $texte, $p, 0);
		}
	}
	return $flux;
}


/**
 * Compter les enfants d'un objet
 *
 * @pipeline objets_compte_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function equipes_objet_compte_enfants($flux) {
	if ($flux['args']['objet'] == 'rubrique' and $id_rubrique = intval($flux['args']['id_objet'])) {
		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['equipes'] = sql_countsel('spip_equipes', 'id_rubrique= ' . intval($id_rubrique) . " AND (statut = 'publie')");
		} else {
			$flux['data']['equipes'] = sql_countsel('spip_equipes', 'id_rubrique= ' . intval($id_rubrique) . " AND (statut <> 'poubelle')");
		}
	}
	if ($flux['args']['objet'] == 'equipe' and $id_equipe = intval($flux['args']['id_objet'])) {
		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['membres'] = sql_countsel('spip_membres', 'id_equipe= ' . intval($id_equipe) . " AND (statut = 'publie')");
		} else {
			$flux['data']['membres'] = sql_countsel('spip_membres', 'id_equipe= ' . intval($id_equipe) . " AND (statut <> 'poubelle')");
		}
	}

	return $flux;
}


/**
 * Optimiser la base de données
 *
 * Supprime les objets à la poubelle.
 * Supprime les objets à la poubelle.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function equipes_optimiser_base_disparus($flux) {

	sql_delete('spip_equipes', "statut='poubelle' AND maj < " . $flux['args']['date']);

	sql_delete('spip_membres', "statut='poubelle' AND maj < " . $flux['args']['date']);

	return $flux;
}

/**
 * Synchroniser la valeur de id secteur
 *
 * @pipeline trig_propager_les_secteurs
 * @param  string $flux Données du pipeline
 * @return string       Données du pipeline
**/
function equipes_trig_propager_les_secteurs($flux) {

	// synchroniser spip_equipes
	$r = sql_select(
		'A.id_equipe AS id, R.id_secteur AS secteur',
		'spip_equipes AS A, spip_rubriques AS R',
		'A.id_rubrique = R.id_rubrique AND A.id_secteur <> R.id_secteur'
	);
	while ($row = sql_fetch($r)) {
		sql_update('spip_equipes', array('id_secteur' => $row['secteur']), 'id_equipe=' . $row['id']);
	}

	return $flux;
}
