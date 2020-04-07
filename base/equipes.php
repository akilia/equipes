<?php
/**
 * Déclarations relatives à la base de données
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
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function equipes_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['equipes'] = 'equipes';
	$interfaces['table_des_tables']['membres'] = 'membres';

	$interfaces['table_des_traitements']['FONCTION'][] = _TRAITEMENT_RACCOURCIS;

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function equipes_declarer_tables_objets_sql($tables) {

	$tables['spip_equipes'] = array(
		'type' => 'equipe',
		'principale' => 'oui',
		'field'=> array(
			'id_equipe'          => 'bigint(21) NOT NULL',
			'id_rubrique'        => 'bigint(21) NOT NULL DEFAULT 0',
			'id_secteur'         => 'bigint(21) NOT NULL DEFAULT 0',
			'nom'                => 'text NOT NULL DEFAULT ""',
			'descriptif'         => 'text NOT NULL DEFAULT ""',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_equipe',
			'KEY id_rubrique'    => 'id_rubrique',
			'KEY id_secteur'     => 'id_secteur',
			'KEY statut'         => 'statut',
		),
		'titre' => 'nom AS titre, "" AS lang',
		 #'date' => '',
		'champs_editables'  => array('nom', 'descriptif'),
		'champs_versionnes' => array(),
		'rechercher_champs' => array(),
		'tables_jointures'  => array(),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'equipe:texte_changer_statut_equipe',
	);

	$tables['spip_membres'] = array(
		'type' => 'membre',
		'principale' => 'oui',
		'field'=> array(
			'id_membre'          => 'bigint(21) NOT NULL',
			'id_equipe'          => 'bigint(21) NOT NULL DEFAULT 0',
			'id_auteur'          => 'bigint(21) NOT NULL DEFAULT 0',
			'prenom'             => 'text',
			'nom'                => 'text NOT NULL DEFAULT ""',
			'fonction'           => 'text NOT NULL DEFAULT ""',
			'bio'                => 'text NOT NULL DEFAULT ""',
			'email'              => 'tinytext NOT NULL DEFAULT ""',
			'telephone'          => 'varchar(50) NOT NULL DEFAULT ""',
			'linkedin'           => 'text NOT NULL DEFAULT ""',
			'facebook'           => 'text NOT NULL DEFAULT ""',
			'leader'             => 'varchar(3)  DEFAULT "non" NOT NULL',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_membre',
			'KEY id_equipe'      => 'id_equipe',
			'KEY statut'         => 'statut',
		),
		'titre' => "CONCAT(prenom,' ',nom) AS titre, '' AS lang",
		 #'date' => '',
		'champs_editables'  => array('id_equipe', 'id_auteur', 'prenom', 'nom', 'fonction', 'bio', 'email', 'telephone', 'linkedin', 'facebook', 'leader'),
		'champs_versionnes' => array(),
		'rechercher_champs' => array("prenom" => 3, "nom" => 8, "fonction" => 5),
		'tables_jointures'  => array(),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'membre:texte_changer_statut_membre',
	);

	return $tables;
}
