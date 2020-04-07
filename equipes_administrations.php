<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin Équipes et leurs membres
 *
 * @plugin     Équipes et leurs membres
 * @copyright  2019
 * @author     Pierre Miquel
 * @licence    GNU/GPL
 * @package    SPIP\Equipes\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Fonction d'installation et de mise à jour du plugin Équipes et leurs membres.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function equipes_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();

	$maj['create'] = array(array('maj_tables', array('spip_equipes', 'spip_membres')));

	$maj['1.0.1'] = array(
		array('sql_alter',"TABLE `spip_membres` ADD `leader` VARCHAR(3) NOT NULL DEFAULT 'non' AFTER `facebook`" )
	);

	$maj['1.0.2'] = array(
		array('sql_alter',"TABLE `spip_membres` ADD `id_auteur` bigint(21) NOT NULL DEFAULT 0 AFTER `id_equipe`" )
	);

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin Équipes et leurs membres.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function equipes_vider_tables($nom_meta_base_version) {

	sql_drop_table('spip_equipes');
	sql_drop_table('spip_membres');

	# Nettoyer les liens courants (le génie optimiser_base_disparus se chargera de nettoyer toutes les tables de liens)
	sql_delete('spip_documents_liens', sql_in('objet', array('equipe', 'membre')));
	sql_delete('spip_mots_liens', sql_in('objet', array('equipe', 'membre')));
	sql_delete('spip_auteurs_liens', sql_in('objet', array('equipe', 'membre')));
	# Nettoyer les versionnages et forums
	sql_delete('spip_versions', sql_in('objet', array('equipe', 'membre')));
	sql_delete('spip_versions_fragments', sql_in('objet', array('equipe', 'membre')));
	sql_delete('spip_forum', sql_in('objet', array('equipe', 'membre')));

	effacer_meta($nom_meta_base_version);
}
