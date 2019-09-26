<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2019-09-26 11:06:56
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'equipes',
    'nom' => 'Équipes et leurs membres',
    'slogan' => 'Gestion d\'équipes et de ses membres (ou joueurs, consultants, etc.)',
    'description' => '',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'Pierre Miquel',
    'auteur_lien' => 'https://www.akilia.net',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.2.5;3.2.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => '',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Equipes',
      'nom_singulier' => 'Equipe',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => 'on',
      'table' => 'spip_equipes',
      'cle_primaire' => 'id_equipe',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'equipe',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Descriptif',
          'champ' => 'descriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=8',
        ),
      ),
      'champ_titre' => 'nom',
      'champ_date' => '',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Equipes',
        'titre_objet' => 'Equipe',
        'info_aucun_objet' => 'Aucune équipe',
        'info_1_objet' => 'Une équipe',
        'info_nb_objets' => '@nb@ équipes',
        'icone_creer_objet' => 'Créer une équipe',
        'icone_modifier_objet' => 'Modifier cette équipe',
        'titre_logo_objet' => 'Logo de cette équipe',
        'titre_langue_objet' => 'Langue de cette équipe',
        'texte_definir_comme_traduction_objet' => 'Cette equipe est une traduction de l\'équipe numéro :',
        'titre_\\objets_lies_objet' => 'Liés à cette équipe',
        'titre_objets_rubrique' => 'Equipes de la rubrique',
        'info_objets_auteur' => 'Les équipes de cet auteur',
        'retirer_lien_objet' => 'Retirer cette équipe',
        'retirer_tous_liens_objets' => 'Retirer toutes les équipes',
        'ajouter_lien_objet' => 'Ajouter cette équipe',
        'texte_ajouter_objet' => 'Ajouter une équipe',
        'texte_creer_associer_objet' => 'Créer et associer une équipe',
        'texte_changer_statut_objet' => 'Cette équipe est :',
        'supprimer_objet' => 'Supprimer cette équipe',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cette équipe ?',
      ),
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'id_secteur',
        2 => 'vue_rubrique',
        3 => 'statut_rubrique',
        4 => 'plan',
      ),
      'liaison_directe' => '',
      'table_liens' => '',
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
      ),
      'autorisations' => 
      array (
        'objet_creer' => 'administrateur_restreint',
        'objet_voir' => '',
        'objet_modifier' => 'administrateur_restreint',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
    1 => 
    array (
      'nom' => 'Membres',
      'nom_singulier' => 'Membre',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => 'on',
      'table' => 'spip_membres',
      'cle_primaire' => 'id_membre',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'membre',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Prénom',
          'champ' => 'prenom',
          'sql' => 'text',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '3',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'obligatoire',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Fonction',
          'champ' => 'fonction',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'rows=2',
        ),
        3 => 
        array (
          'nom' => 'Biographie',
          'champ' => 'bio',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=10',
        ),
        4 => 
        array (
          'nom' => 'Email',
          'champ' => 'email',
          'sql' => 'tinytext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Téléphone',
          'champ' => 'telephone',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'Linkedin',
          'champ' => 'linkedin',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Facebook',
          'champ' => 'facebook',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nom',
      'champ_date' => '',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Membres',
        'titre_objet' => 'Membre',
        'info_aucun_objet' => 'Aucun membre',
        'info_1_objet' => 'Un membre',
        'info_nb_objets' => '@nb@ membres',
        'icone_creer_objet' => 'Créer un membre',
        'icone_modifier_objet' => 'Modifier ce membre',
        'titre_logo_objet' => 'Logo de ce membre',
        'titre_langue_objet' => 'Langue de ce membre',
        'texte_definir_comme_traduction_objet' => 'Ce membre est une traduction du membre numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce membre',
        'titre_objets_rubrique' => 'Membres de la rubrique',
        'info_objets_auteur' => 'Les membres de cet auteur',
        'retirer_lien_objet' => 'Retirer ce membre',
        'retirer_tous_liens_objets' => 'Retirer tous les membres',
        'ajouter_lien_objet' => 'Ajouter ce membre',
        'texte_ajouter_objet' => 'Ajouter un membre',
        'texte_creer_associer_objet' => 'Créer et associer un membre',
        'texte_changer_statut_objet' => 'Ce membre est :',
        'supprimer_objet' => 'Supprimer cet membre',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet membre ?',
      ),
      'liaison_directe' => 'spip_equipes',
      'table_liens' => '',
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
      ),
      'autorisations' => 
      array (
        'objet_creer' => 'administrateur_restreint',
        'objet_voir' => '',
        'objet_modifier' => 'administrateur_restreint',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAACAWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICB4bWxuczpleGlmRVg9Imh0dHA6Ly9jaXBhLmpwL2V4aWYvMS4wLyIKICAgIHhtbG5zOmF1eD0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC9hdXgvIgogICB0aWZmOkltYWdlTGVuZ3RoPSI3MDAiCiAgIHRpZmY6SW1hZ2VXaWR0aD0iNzAwIgogICBleGlmRVg6TGVuc01vZGVsPSIiCiAgIGF1eDpMZW5zPSIiLz4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz4n8Du9AAABgGlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9myO9GsaAsJg2rIT9KbJSZNNSkaYwy2Mw880PNG6/3RpKtslWU2Pi14C9gq6yVIlKysbEmNug511MjmXs753zu995zuvdccMVymm6Vd4OeL5jRUMA7FZ/2Vj5STQseseqEZhnDkUiYkuPthjIVrzpVrdLn/h21cylLg7Iq4SHNMAvCo8LhpYKheFO4Scsm5oSPhf2mXFD4WulJh58UZxz+UGzGokFwNQh7M784+Yu1rKkLy8vx6blF7ec+6iV1qfzkhMQ2sVYsooQI4GWMEYL008Og+H466aVLVpTI7/7OH2dBcjXxBsuYzJMhSwG/qItSPSUxLXpKZo5l1f+/fbXSfb1O9boAVDzY9ks7VG7A57ptv+/b9ucBuO/hLF/MX9iDgVfR14uabxc8q3ByXtSSW3C6Bs13RsJMfEtuMVc6Dc9HUB+HxkuomXF69rPP4S3EVuSrLmB7BzrkvGf2CygkZ8nECufOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAgAElEQVR4nO2dd7hcVbnGfzOnn1SSkAQSSOid0KU3ERTkKiiCXBUL6kUUrBcLYqEoekXELiiKXkFpiigWmoAiAQRCSUgIkJCEkH6Sk5w+5/7xzr5ncjJ7rbX3rD2zZ868z7OeQDKzZ++11/rWV97v+yB9aAFOB/4FdAILgIuAsZW8qTrqKAEZoBmt7WyF7yXVmAB8AegFBoeNW4AdKndrddQRC1sDJ6BD7AvAW4Dp1AXBFpgCXIpO/eGbPxg3A3shiVpHHWnHDOB/gJUMreH1wC+AfYGGyt1aujAFuBxYTfjmHwS6gd8Ce1MXAq7IAq3U56vc2Ab4AbCOLddxF3A7sFvF7i5F2Ar4KrAG8+YvnLybgV0qcbNVgj2BbwB/BP4JPAb8FXgv0O54jWbg9cDPgLuBO/L//Wnqc29DG3AdsIHwddwD/AWZCCMWTcgu6sZt8wdjALiNET55ITgCWAX0AzmG5iyHFuTXgVEO13kvUlcH8t/N5f+7D3gOOIm6HVsMDcCv0fzb1nEO+DcwsSJ3WmGMBj6HFlSUzV84bgUml/vGE8Y4YBowC3gr8CZkS7Y6fHcSsAzznL0IvBmzSTANu0Z2N26aQAPS8rbPP8dUFNFpdPhutWEi8HM2F7wu4z5gJ0aQmbY18BVK2/zBuA3Ytby3nwgagKOAHwJzgE1svmn/CwkHE87CfvIMAJ9B2lcYPpb/nM0UexNmLaAp/0zX559hOfAg8D3gPcCO1I4jbHvgx2heoq7hXmRi7UPtzEcopiKH33pK3/zBgr4FTV41S9ATgRcIf84lwNmYN9z5uKmeF2PWKL6MXQAMAu/EvGD3AR4JudYG5MvZ0/JM1YAZyOHXQfx13IUOs32o/vkIxWTcvP1xJu9mqjc6MAo5hEyq4wAKH00wXOdY7FrVanT6mhbZydgFQAeKb5uucwVmgdSDu08irdga+BGlbf7CdfwHZA7UHMYib7+PiSo2upFPoBrJQnsDC7E/458wP18L8vyHCZIB4HfoxDKhFdn4JoF0m8N1HrBcYxB4hur14zQgm38j/tZxL3A/NeYYzCJvvw+b3zZuR06nSiCD7N5dgdOAY9CmtGkl+yAb2fZsv8W+WdrQ5uxBp28/mvduorEppwN35r8XXCeIAjwEHOTwXDYhMoicllMd7ieLHIeNaONVWtNrRu8jqsPPdTyB+DFVj3HAFynP5i88naaX4+EKsB1wDlr0hQ6854FTkSAIQztwL+bFtAo551wWfjNwAHIKno7i+XHUylZgf+BM5F/4LPA2zGZIIT6BPcR7r+V6WfQuPwLcBcxGfISTkePNNK9JYWr+Hlz8JHFHDq2l3alin8AU4DLKu/kLhcAelOek2AvZ8GEL4jngaMu9nIwSn4othMWI2FNtqvI0ZJaF0btXAB9AAisMW6PNNlyQdAH3AO/GHh3xiZnI5jdR1n2NHuD3KCRcddGBbYCvUZwKWY7Ri1TefUlWCLQCN2I+vbuRs8sUesuisNpPgL8jO/AXSHs6jcqZNaUgi8yhi9C7eBpt3G5EgPkU4i6Y8E4216iGj0VIQzHNrS9sj8K0SfmxwtbO7chPVDWawNbIA+zb2x91dKETaE+SEwJ742a/Xw+McbjeJKT27Yo0KNPpWC1oQybS/sDxyCTZB5HBbPgZdjv7TtzNkrjYCrgWf+HrqELgLuxO11SgHZF8yqEiuYxeJEGT8gkcBbxiuYcB4BrKc0rVGm7CLgCWAtsmeA+NwK+ITln3OfqBh0k5/b0FeftdyCjlHr8jGTV6O2Cu5bcXAW+n8p7rasRHsfuQXkAmZxIYi5sQKtd4BJkiqVtLExGDLI2bPxi/JxmewCUU13j6UHz/i0gNriM6tkXOvrDTtx855XxXjMogrfGnFC9QU6nRD/wZmZ6pcQxug2z+ODzoco/AoeJTgo5FxUweR57tpYgEczVwCpUJVdUKssh38EPkROxh6F32IIfp6/DvINsBCRZTSm+lRg/SaPcjBUJgG+ThXkvlJ8Z18m7Ff3SgGTgExd1PRUKmvvH9YQLyt3wS+CXwvyin4QD8O0qnocSecnr7o45upNEm6eC2YiI6+atl8wcjSLyoV2SpPrSg6MgU3IubRMEoFLFJixPbdpjdTXL+DyOakbe/kp7RUsYAkqA1QbeswwsaEb23EsS1uCMHPEmZSWKjkeMrzQ4/1/F7Uh5aqaMsmIjMirR4+6OOh4CdKQNZKEjprYXNH4w/UDcHRioyiGBzHdXhxA4bfShbNFHa8LbAlVSHfRRlDKDowCxSGF+tIzFkkLf/x1SG4ed7BI5B5+hAFEkxFfg48EFqr0tPsBB2QCpgM5rQ4ESoozYxFfgSyiWohTXdiJKVdkBZk6ttX3A97cajhI6PUBsTFYY+lLzUhcgfm1BMf1GRsRxpDnVUJ5pQnsHbqD2SVkAbfjvipZSELPL215LN72NsBJ5FhIwvkjJmVh2hyKBQ4u+oXoef63iWEkOE46lvfteRQ8033kRta0nVggw62bdGKvF+KK36EtQspdY3f7Am70dkoaKHk8kEmApciEpI1082dywFvo+8yisrfC8jDVnE69gO8fh3RcVa9sj/t0s6dq2hDx1MX0Tl5p3M1mmoAk2aqZBpHitRJaS6JpA8GtAJ/1Z0ut+Eio2sY2Sc8i6jG/UdmIUDT2AKCvW59uqrj+JjLfBN6jUAksJ45MD7ESLBLGLzRKH62HwEvQiNtSFHozJePsscj+TRBXyX2qjqkxbshVpuz0enfJpSddM++lF4sCj9vQHFREeqw68bFd9cjkyfDSgM2I3sqLgVYHuBb+FW/qqOLdGATvs3obJY1Zp7kqbxBGI/ZgqdgMcAf2NkqqybUOGHLyOWY6EjqXBMQdlibfkxClUZss1ZB2oddTUe4rIjBG1okR4OvA+lWtc1KT/IoYakHy/8y+sYmU6T9cjh6VJauhnFVWehtljnoNoCpqq1wViFiobYquCOdLQCByLi2SMko5FuQr0Wk6zrn/bRA9xQ2KJ5JC7M9Ug9/zZS+W3oBV7NjwD/RAvqPzGHVScC5yG65mXIz1LHELKo3fhZSN2fhVtLdBesB+Yhv8ECVMR1NXAS6iswEsODzcBxhX9xMSNLInbkn9lHodBpqEqNiwbVgUyBujo7hDbgAhS+81GCqw91ZPop8H5UMiwos97GkKCejDSN1zz8ZjWOvsKXMAGFUip9U+UYnSileTz+0A7cgJsQ6ENkoboQgCOQZ9qHc+8lVJ7uUGTStWAnsbWitmfLPfx+tY2O4ZNxCFKTalkT2IBU/iTaSU1BQsBlMXehcJZPIVQtaEBO1kuJ3zxmAC3gBahg6JHEL4aRBT6EWJyVXp/lGjlUuHYzNAAnIlWsmsoiuY5NqEFHkptuJ9TSy6VmwlqkiVRbz79S0IZs/L8QL4bfgw6p21BfwWn4q+HwLtRjoNLrtByb/wXk/9gCzcCbUYnrWuIEdCJvfzlO3F2REHDRBFYhIVBT/eBDMB35XV4m+vvbhKICXwfeQHKOu/9AB2AtR8QWAe/FULW6GXgjSieshYnYiH+b34YdcfcJrEHCqVZ9Ahlkl9+MW8i0cPQBj6Fy4AeSfO5+A4oO/IvaWPvDx1JUJ8Basr4ROWiWpeCmSxmb0KlRCTV7MtIEXBZSJ3IM1lovgUaUqPMY0VX+V4FPoGQfXyFBFzShJqaPUltCYAkyvwrD/1bsQvU6R3oQAy/pzrEmtOMeIsyh+60VTaAJ8SOihtmCHIpKZ1Megfo+1oIQWIa6VMVK7T8CeIbq8gl0Az8nHXX/pyFNwEX97URZhNVOzBqNwmtRUsrXo9z1E0gPJf1IqtsUHkD9Kf+TEg6WRuQTeIzqiA70Ifs7yZbRUbELEkgu0YE16AQ8HQnfGURU2yqMySivIoq9/xxyEE4r/+1a8TpUY68aw+MvoFyKkk3LZuBk0h8d6EMMsDRt/gC7IE3ARYjm0On5HKpfdzFwGOkvYLkN4je4Enu6UBGPNJ36xXAISparJiGwBIU2vfmVmtGLej4FD1ds9APXIpJJWjEDd8dg4dgEPIWKtcwo+127YWuiVZJaBnyedL+vAA1IE/gL6T4ACzf/qSTgT2pA4Zi0OQYHkLNtB9Lf3GM8Mgfi2JVdKE59EOl6ztFoM7s2in0eOINkGnwmhWDtP0C6NYElyGRPtJbnXoh7nQbnSD+qeWYsd5QiNANfpbSTpBOZZGnwDTQC70QVemz3nUOazGGkS4BFwT5ICKdNCORQUZu3UoZ1kQWORtVFKukYHECe472pjgU1DvESfCyeFcA7qPwpeihu7L5eVIhid6rjXZmwD+IJpMUcGEB5Ee+mjGHkJqRqzKZyQuA+YH+qY0G1Ap/CXxPKHOLFn42qE1UCU4B/YNcEu1D33emVuc1EsDvyCaQhMrYQFagpO5EsoA0/QflVonuBfamOzQ9KtJqP3znIoWIXZ1NetlyAj2F/712o4tTMCtxf0tgXNZatpBBYivobVoxA1oTMgYUhN5jEeBA4gOrZ/AEt2EaH7UVOpm+jakMu9Nkc8CLieJd7Pn6P+fTvRSf/zhW4tygYje4xaoGYBiQEfkdlhMBidABXPISaRY7BJST/0P9GTqSo+d/tiNl1MOUvA/Vm5DS1PdtdiAzTghblGcjWd5mXtSiRpZwbbQ7hAiBoTbVbme8pCsagakQLUPhyJcrJiMIjyaAM0L9RXp/AK+h9p6pz1/5IJU3CHMghYszJRFtQ7eglByGqQG12yorygFGoDqBpTvqAWyhePnwX4GncFlc38gKXQx3MYBb4K1B6reu7akZ5G1ujUGmSnuxGhtiZwxuK9AO/ITorcUekmSYtBAo1voqf/MPRgDKpkqANv4DCTVFO/ibgoyjvfvj1lqHsqKRPpx2Rs8ikKt9FuCMvSKd9GDeTYAnlcQw2oYy9sPtYihh0LvM7FfkT7kbc+z8hCusu+F3kzflrvh/lt4S9k1XIox71dJ2J3mVSXYoCx+97SHHSWBAdeAR/QuA1VMQg6qkwE72QsBf9OCIPJYkDka0W9mzLgWMxb5RGVMX1QexzWrhIkmxI0oA5XXwZcBR2AdCKsiCH04eDxpYfR2ZbKQKtHb2HC/PXdFmXXyZeiHV75PfwFe0pHC8hwZT6tPFmVLnlKUonC61BIY44Eu91SBsx3cMvScaDPgV4C/A9zCf3LbhlLTYhQfEIdhMrh9h2XrngRbDAcA8rUUtumwB4I+bNsgG9w58B/4WEgUuq8FjEmPwQyg+ZjTIOXdfdJcQTABlESruO6AVQTOMVlCDm7eRP0sYKSB8fRpVg4sZ/NwJfAG7MXzMqupA6ZsLpSOW8CU10qZiGVMzTUHLMWMxqbBNuZk0faoR5PjphdjV8NoNU3a+j578FP882HMvQYi+2yZvRaWjD6zEv6tHo9J6FBGpHfryCCEgrGeqzMAr5EGaiHINxBSOKOv8aEqDdEb4TIDipL0Xz4iNE+wpwLgp995d4rbJjJ8wqcNjoRVK4FI99G0oQsql8syk9Bz+L1PQniOYIGkBJNFF8GzNxiyoMokV8Isn4On5KuHbVizzqtue6ynAN28jlx0B+5Eq4VjCCjFIfdRrHA7+iNFO4LNz+pPE6FDJynYhu/KX17oe90ONq5ISKO8lNSNKXUkLtx0QrXbYX8mG4zOkSpI34xkcxmyN/xl6RyWYClGvkkD/mW/gtyDIamS9Ru24PIMf3WaTQ2x8VjUjVc3EM9gP34Jfl927MXWdywB9xU1mHI4NCMisN13cdN+AeN8+i5pkPYI8O9CDTwbcWcDZmATAnf482B+d1RLPPfY/1SL1+B8mYxq3IHHPldFSFtz8qmhBxYTZmFXk98EH8LtYW7FV6A0plVILRAfjrqtSFYtD7Ot5HI+rs/ABmwTqA2Go+F9NhiOhjmtNVuL3LycBn8dclyHX0oKSez6JwbZIYhXJBXna4r0VIuNbM5g/QhIqKmFTlDuzNNuNgB8vvDgDfIVoR0RbkPPSZFr0JnYiujtNGdMrOttzHU/grJnIEcvLatLkBFAVxodi2obVRrpLcT6PegPtTvozKMcDXMGtsryDmaNWr/WFoQLZh2EvuAr5C/FZPJtgYeY+iVE9X4XMcemG+F+dqtBlc7yOLQl6mDbkAUaFLFawHopPftcz3w8gP40oIup3kBEA3ouy+E0Vryp1A1YQKp5g04MsoU52HJDaYCwaQp3ww5N+bgT1Ixmv9S8QrCMMs5Adw+e0McmCZHEaDyO67DnEZPow2jy2UM4FoxUBzKFb+quEzLZTeDXlX5LU/GvcTalb+ey5z2oM9bNufH4HXv3AdDTIUFejLX2s98HfUXGR3FBG5EZl8ccJ8paAdrRfT3nsW3X/iSELKjEdez06GasMVw5OGa2SRdJ6KXpJPrETMwHdRfEE2Idv2PqSKmzABeeJNRJu5yAZ+mKG5uB5l+72L8CalfWgOc5Z7GI61yHQo9mwZSgsl7YoiFS7svkK0oU13N2bhC9qwNr7H/6D3OBMRqMbnf2MAzdkaZOq9hGL5c9C8pAHtiKcQhkFk/1cdAi//t4E7gU9jbsW1M2YVch52emwcNKENaXI0/QW3k3IWimqEqasDhCfDjEVlwcK49E8QvdBJK+YmHC8Rnw9wEHI0xlXNF+MW1WnCzC0YRBmSac0utGEnzNT0DZgJXl7h0wQ4FTl7LkQdSE5DEjrsRb2M+XSfhMJhvtGHToVlhs/sgxt9diJmrv0ryN4spgWtRw7HbzFEkiL/54uIQDM/5LvFkEHCxkRe6UHmSFQciU7dUvwH05Fjy/b9QL03oZo9422YNYDlmDWgdhTOPRoP/gtfJsB2iERTaOdth5nU0o8KXsyg+KIYn79eK3IK+sRyRLCYGfLbU/IjOE3D0IIWY9iiXoT5Za5GLMV/o5N5e3RK/xVpABvDv7oZ2tGp+N+YhXoHQyEoVxyOnFK2WL4NGdTO+xqkpochsOEHDb+XhkKocTEKHW5hz+YiAC5CBVgvRw7TOBR5wN9EnsqWcettkB2fJdyhcTdiORWbjAYkALZBJ6JPrEXMuDBkkYkyx3KdgH4aBpdwYgdyCv4TPXM/Q6aRCQ1IYByKfAlHohBT2MIaQIJmg8M9BdgPkVcOw75WXkPztR/hJ9wOKLz7E8zPZ3v2alX/we4DWIZ5Q49Fe2I6EgRPIo02FnyYAFOR7T98sTciB5lJRb4XqeRh2BV3j3wUrGeIkRWGGQ7X6WAo26sY9sTN+51DPomNDOWRh2EsIpMsRYLx16hAyljL7/QwVL7LBbshE+VI7Jt/DYptfwwtyLD7z6BFa8vtqOYNbkIWnf4m1f1VzHtiJpqfDPIRvYESHLs+BMA0wiunzML8sleiUyNswcxEG8i3yheEhkyn99bYF+IypMaHIQt8idJDbwFGI+fql4je9PRhpGm4qP974u7tfw1xNr6LeAYPYFbxt8dO8spa/r0sIbIE0Ii9ypDNBNiRzefmg5RQJ8GHAOgjXGLtgzSDsJfZj3lRNqOKMqZoQlx0YZa0LoU0XkWL3nSdtwAfwU9m2b7I3Ipa5OMFdPLa4usZpO5fi5xMts2/CAmj7zGUhfcHhohRxZBFAiBsIzRiF/i250grGjEntw1i1wCGF6/ZB7Oz3QgfAmAxCtkV89xujUyEMPQxVOEmDEejzeNbLRxOIBkOF5JLPzJj1hk+04rqEX6a0mviTyc8xh+GRaiewr+xn/6HIlX+UIffeAnlu/+czc2KZ1EiV5ipkUEaxmkUX39t2L3b6y3/nlY0IMEXNrebkDll0nCGawAZSqAx+xAAHejEeJrNX/ogovsGFWOKYRCdTs8bPrMDyZT/bsJsO5mEUiH+igqVmjbX1ih083nMAtEGm9NxOOajyMAd2Df/DOATyNtvWxevAFcgNt3w07gf+BFmEtV4pMnsXOTfJmI3mUxsxyya7wPQ4XEoOiHTEDloxJxtugaz+QRbagCvYd5jZUEGSbar0GZ4Ap0622LfuJOQV9hE/LgVvy8wgwqNmPjYV+IuIE/ErQpyL6o+FNdpsx9uXXiCWnoHOD5DFlGUXbr6rkRluUzvI4P9nW5AQnH4XByNudR4P8Vt3u1RDb85yKHaWzB6kNP0euTXqBSP4H2Yi4U+icqdmfZMYTrxANIs0yDcYiOL4sOdhE/MRvy2kB6NPNymBfpJomkdV+NWCfYHxCdwNKKYvK2wxDkRf2M6bhmNq5E54yJUts9/3nS9+9k8fDwKuBhzcZCnGRIaLcgG/j7m9VM4BvK/ezzl6w3Rhsp52dbHHymuFRVe50UkzJ5Ffp0wKnlVwaVw5+X4Yy5ORzn3pt+L2mVndP6atlz26ymNwXUc5kKcg0SnUB+ANDfTfCxBJ3aUd/A1zFpWH6qUcyIyPS7EXubsmvw9jEd1F+cQrwdFNzJjZkR4njgYh8KjNu2qF/gmZqEUNCA5BGnXlUrm846tEP/blMr6Cv5KWs3CnnP+QVRo43iUlhuM4/N//zrkzNqaoRexC7KLwyrBDqAS16WobFuhwqCme7+AaALgGMytvRej+Yi64PbELlhy6N3OxV5Btwv1cRiN8iiWWz5vGxuRvyKpsvBbIb/KUod7WYgbVbomkUHS3PZCP0bpE5RBi6hYo5DCMR8t3rkoyvF8/s+5SP16EgmRv6Gef59ECTNBDL1YeasHEDmqVErtrzGfrFcRbbOegFk9vZF4NfLaUKUdXxV+7kMq8ndw81e4jA4kTKIUgXHBGKTRuNSK6EJmTBLh7qrBTFSMw3RaPEbpL6oNOSh9tm/qRxt+ETID3oTYesHL70Kc7dfhp8rLVZgzKa8nmgA4HrNf4TfEL5K5Lwr1llrgoxNpIVfgt9b+ICJ0nYQ/lboBOA/3GpEPkrwp4h0BHdEnvon5JFqDnCml/O42qDhEkiWn1iIBMBa9WN+nyzcwC4BfEG0xH45ZTX2B+GpyFkUNbBqXaeSQFnI+5lZkpYwb8cPYzKIOVi4O4RxqT1ZKaLjsaGeoqsobkcrrq/3UfpirpgaVe0vxBZxEeYpODiB6rCnxIy5s/pLvEk0A7Imowiah+Dnidxgah9KJ46jtAVv0WOymT/D5FWhjPYpMtUXYN+R65Bsq5XAZjU5+l83fm3+uJEq1J4YJqA78XIbKLi1Ai8NHHfUM6nhjWoivonhqHEdaMyLFlKPgZCCwrsGvbTcWsQ9Nnu+LiCYAJqOSZba+Cf+FHJ1x5n4SiuRE6ZvQg6jFR6Kw4t2We+xDxVzem/98AxI+JyCtyOToHAQ+Q3wzYCvk4LWFPgfRAXQnpfuDAgTEpwORNpFIdKAB1Sgv1g56Deq/5oOQsD/m+vA5VN46Tgnn/8C//WgbnehU8PVSTsPeZSmqN7kRbe41lut2InbnFeh9vxs5b0/G7QAYheoW3IrZJOhFDU8+x1BcfBLaNGECIIdCinuGPHvQsNOkOT2M0tMPxK33YIDxyAlsapU+XKgdQOmdfhrQ3P8KVaZ6BD3jm0mg2Ok0ZCeFnTx/x48pkEXS2iTpOxB5KAqjK0P5yk0PX5j/xE+Zp93Q4jEt4h7i2ZR74+6s60EbeDlSt18EfouiIDbBk0GkrhMRG/M29F4eQxGVHyDBsi+bL+IG5LwNOxxuwZxok0WVgE2btBf5Qp5G83wB9rlsR95+l1BfP2JozsJPm68TUY5H4Z4cQBEsl2SuSDgShb/CFsir+FN198Gurj1BtOSaSbizxfoYKhryAgr/PZf/cwF62a7XGkSb5TxKeyFTkXffhU0WZ3E1oLwB27ybFvdvcfdmZ5BPYQxaN1shdb3dcP8TkcAYvgYfRFEkGw5D68ZFyA2gyMjziFkZ9u4+jPuczUbOVB8bcwxaD2E+kdvwaApk0SSYFt8coqlNJoxGjiwbw+ty3M2O0ZidUEtQJ5ZxuE1cA1rs70eql2lucogbHzVrK4vU5n0ZyrCzCa7jiL/AxqOClXGYdYGgi8qgjIpGZOPfik7pT+HeT/EYhpLWoj7bLciMCNZGM9JCXXoj9CMNJ2oNBxN2R7yIsGfZhEffUwtKOjAtjKvxZ3dkUGjKRnndQLQS1TeEPMMASmuNe/+jsVeyvRO3UyrAOBRluR43bSOHKv6UqlrugbzncYXABaSzo80oREqy+TlMm/h+xOWYgEhpLt7+HqT2z/D8PLtgd4p6667VgKRuGFlkI3Kw+WxfPA430kegVrkgmLTCF9eX/7u9KW2ypmEOL/49wm+MQiZDlI5DC9EJ5+OF74dO1zgO0y9TQoWahNCCNNgXiLf5h6+Va3Br8tmNok774N8zH3QcNvmDgrwJL5hFOAf9LpLhUx+I3XHXj8wFV/NjL2Tr/jI/Pk245zgKJmIXAK4txw7E3uevcKxGqrDPjbcL2swLItzHIOLW+2yt7QNvZ6jEeqmjDze1vxcJ0f3xezAW4gLMYccr8CgAmlF44SmG1MN+lJ9+HMmofU0ovGJT25YTLVmlFdljk4lPbilEBtUPMKnNf8I9dHkG7r3kO1FvAVc72BUZ5Gg6GPlaFjrez71EM3WSxonYw6a+Rw75bPYiuc0P0ijDkq16cYvKREIW2T9nohjtach7m6TTZxxaVLZT6An8NL6Mir0Qz9/WJfdnuIdJz3a43iDSOK4h2ZzwDHK8taIF9SXMSVvrsBe1KBem4G5GPU98s2f4eBK3YjilIoP4GMN9ETlUqDVJ4VNWHIab8+ZW1Hop6YlvRxv/StwSPtaiWLHrfZ2EOV49kP/3Cyl/NZjtMBNyBlFORxq695yLfUP3IRN2d/R+JqP2dquIHi3oQxqxb23MhtcjX8M8dFi+m/K1Oy8bPo3by7ya5GzQccgLfAnuNmXQtTdKy/GDERMubAF24Fa4MwmMQSaBiZO/Ei3KShes+Dxmv0wfCqUdxuZzOQqZlC8ZvltMG/sT5oo+SSMNWldiaENOO1t4ahNaoD4dYhMQ5TKoebbCUZ4AACAASURBVBjlZOhC3PwoJ/XemDMWO/DXayAqMqiuoS0r7zlkKvrihsTBWZgPjdkoyaiYoBqDnGwuuQvdiJ7ui+FXRwj2xl4NZxDxAy6jdDVoIgp//gaFkFzs8uHjJqKrhHthJnlsxH+KcRTsiOxl23tYjLjpH0Z8jd1RdOFA4K1Iq/sC8iV5566jJJmwLMcFiC5r2rDjsaeo9yKTaD/LterwgEbUaONl7BtvHapbH1UIZBAZ5lKUUrqG+MVD/kA89teBmNuOr6RyGgAMFbxwiYUHtOql6L29hBxzKxCvvzP/37eRjO28K1tmTz6C+4Y9B3NE5rn8b1Ta3BkxaEZpmy655etRuSdTocUsWggTkPPkPsxVaW0j6PP3PcvvmvAGlMMe9htPU/lqsOPQyeerslIfKqWWxCnahAppvgdFily1jQzqeWHS/H5LjW/+DHKqzUQe4NFU3tmwFfBD3EI2G5C3Pug0PA2RlvZAjqr/Rgk0ax2uZRtrUPz3rchnEQctiNRjWnS3kA623QEM1YbwIQSeIz0hxICOPg/zPdtaslc1AvLP9ciWuhc52KJ4tJPC9si+duGs9yDfwe3IU/sIcu7EsenDNv7fUA/AUss77Yud/fhZ/BCYfOAUojtGTcL6MspXrz8MGeSr+A1m+7+PBMg2ntCMB7/K2WyZ5zyABIGpxVG5sBPa1OXO8Q/GOmTnfwg/VOjdkEppUqtXoyKeaTp13oRScn2YA3PRoVPJhKIdUXLYBsz3+jDJOC9LwbaoYta3kRl6PvGK5zCV8JMoh99GHaVgJ0QAKqcQCKr8nok2fql263Yo5DQbO8/8j6SLagt6/gNQHkDcbLtg9KN5OAa39TUNhfs+hSjUpUZHJqKT30bFHkAO6TSd/jOQafwaQ5rxGvQ8kbX212Nmo80hPWGPnSleKML36EZmxxEoRBTn+SchR9Q7UAjs98g77sL934hqMqYx3TaD/EPHAjfjljBj2lxL0bOGMQqnImfwU8ghvBFpZPcTXy0fg2oKutz7XaTr9G9Bp30xv1gv6tIUiZPxAcx1254hPQIApAncjFuOdtTRhzb+bsSX+BMQjz7uCZlDqah7lHAP5cQ0pNXciQTcWrRB16EN6yogXkZcgitRdtu1SDM1vec7iJZ/n0GcgT/jdogsZ0v2YKWxNeaCtw8Sce2Y6q8NIrUiDSZAIbZHlXfilrUyjUdwV0uHYzSaT5tNaRqLURgrbXPugiZ0Yu+KhOi+qDhLKVqCbYO+DbfFnkGHh83hF4xVqPpv2rj2U1HnqTABsBDR2J0FwEWYY+1fIJ2LcQLKVLRVExp+urp8LqCORpX8e+Fei67YWIc8/2lbdHGRQWZUKZWHTKMfmQ82DTVotnkDbibYKkQQK3eyjwsmYfaFbUBmvfPaPY7wVMqNiK2WJhWoEE0oo+4aROyZh8J+r6GT9FkkLX+DVMsLUTqoy+Kag0p1RXn2w4l/+q9CDSYryalPAi3IeedaZyDquBo7W3IGKqntUnKtE5HK0trFZwzy/IcJgD60J5zXbRt64OESug9ViklDuqcJGbQAdkQn8H6oOsssVAFoR0QMGoMoxqdgJ30E45n8510nM64AeAqVWotLKko72pEQeA3/AuBpzI03xiDHsQuZLAd8kcrSr21oQhmMYdyWl4iRQdqEvNWPICfObFRosFZU0UI0AKfidiLlkBZxAm4TegTRCk10oBjuDqTTzPKJBuS1960JDCDtrhhhagzSDF14CzlkDqf9wAOF+ooly+XQeppYuVurDmTRieRaB+/fyFQypfo2IKFpsnU3oYSYF5DqOova3/jDMRGZbEvxF8npQ5GIachG3hqFjF3bw60HLiZd4T4TMogk9gAyHTtQ2vYNyNFZhwOywLtwryA7G3Mt/nZUx8C04H6Rv0Ya+P2VRDMKr12NFvECtJC7GZq/XrSwF+X/3cV5txCFUO9Dfi0Xx+NKZOpWMu06LiYjbfYDKOU5VGNPqxOv0siiSrKXIU64Df9GauI9aPEU4kQUxw6rUrQJla76LVqYdUhr2h7N/Qw0d+1ovfYwlF6cQQ7cKL0hXLAGqcw/QP6JOkYgssjR55rt9hybN+XcCnUNmmP5/jPISVgXxtERZE66dOR1Hd2IsJVEW/c6qgyNKNHFNTqwAJ0c16EYt8vC/AXpjCtXC6YiOrWPRKQcqiNYayHXOkpABoXikohXL0clx+qnf2nYCXchHTYGENlqpDlf63BA0Fp6Pv4SjvoRc6t++vvBLshxGKVrczDWIrXfR3v7mkHQx/1YVKJqFiPbS51F9RFK7S8XjHnEoxXXEY7JyHH7BG7RgQ2oZPtnSF87s7IgbPE1It7w+1CedysKn9yJqgMtL8vdpQ9ZZA58HSW1xMViFDW4mbrn3zdaEevzSLR2d0abuwnxAtaj2PiLyAH7GCJ1barEzSaMFkR62oCiJ844FKUPDqcVrkHSslapqS7IIMdg3DJYs1FoMI05/bWEZlQdZx+0no/I/7kf8hmMp3a1r1GoStWdiPvwGxTWdtLgW1Dnm7COKvMRh34kI9CQomT4rUdx5XoJ6TqSRBuiQK9maG32I2LTuThQmiejRpamhV0tRSmSxk6o/sBKVCasF2lNfUjl2oRexK/R6ZOmAip11CZM+SyLgemFHy7GYc+G/H0h6uqrsBCpWt9ENufOyJPci7j9z6NEqjqbrI5yIIMyIKeH/Pt2KCM2KPQbutEHLT+Ui3N3NYwF+VFHHZVEIzqATAf4ZgzHYh/sQvZqGDYwFGKpo46kEeQF7Iay+gKWXgcKyT6N4vh1SAOwmeab7dtiAmAD8CTKwirGh74HTX4ddSSJRlTB5kzkyd8KebED87MXHVQLULrrbUQMddUobAKgz+UiExCffXgkYB7KvKp7setIErNQ/4MN2Dn+OaS1Xkd1FO1IEhnUcdnU2/JIHB34bSif+K+oA8p3kIOhVjd/FqWcboU0n8n5Pydgt6vq8IM2VDwlbt7FrdSz+I4EHmfLmgcDiCq9WVWgeihPauXODPWt3x3Zmu1IzVyFbM0nEPlnPgr71eEXLejAuZj4PJN+RHq5BNXAG4l+qkZUPv6jyG/ShkylZ9C8/J06+/T/sQNKAnmMcOJToQRdiKjQJ1M9ZaKqBW9FlZtLzbHoRO9oF0buAdeAakxchDoCfQz5Uerh+wLshOxGl6SRYmzITyE6aR2lY3v8dRgeRL6DXxCtO1CtYqQKQSO2I/7mDxxPK1EDknoKaem4Gv8NQjYBN1L5VuN1pAzjURdbHwtuDSqbXncQxscOKDvPReguQLUT/4S7tnAn9ehAHXlMQCW7fJ42j1K8cGhd9XLDhZibpvQjOvXpDFW3zaKEF1PvysJxM8oMrL+TYRhJySnbA18BPozfUOa2iPe/EnUc2helnAYdiHYCpiBvbA+ORIwRgkYkAEx9EF5AHW/uYWjuBlGoqxklptka1eyM3lOdNRgDu6HY7IeR97sau4sEDj+XwpE9aNH9C4X+XAp7LkYLdD5q5Bn8zkD+/xeguvTfRz0HRnoZsCyagxMQ69Skzl9GuHCYirzcLu+oE/g5Izs6EBnvRBvhVWTvLkS0y7BsozRiB+CnuDn81gHfQmzHfVDm1GnI5vRRdXYAhbr+hjoQjTTbNIvm9ptIIM7FzFobBPbGvGGnAFfg9n47UZOWaX4fqzZxBMVr4veiOGs1MAK3Aa7FvsgG0QK6ii01nAY0F7PxF6bKIbPhe6S326xvzEK2+GvYORfBWI+bkByDyrS5+HZ6gFso3jOwFtCCKlZdgw6+9wLj4lzoKsJf1ACyqdOM8agCj8ui6AV+jNmW/CxKgvIhAILRj7zaO1K7aukoZD4uIfr8rCCan+rruPcV/BPKLAzqX7QgP037sNGW/7dqOPAmAP/D5o1o+9Gz7hrlQk2IUmk68U4jvYt2CrK3XTZ/J/bNDzIHSq09HyZMf0ltklYmA5fi7q0fPtYSTQC0IHNgjeP1b0O18i5B7dseQlrvy4hK/CxwPyIVvQeZvmkVBI3Auyl+SPUhweBMXMuismAmu/dzpHMyZiLVx2XzBza/S7vzduCf+DMDir2gWlJLRwPfIFpb9OHjXqJHqiYhx+HKEn632AhMhyNJ53vaCjk5w9bnv7D7UzbDZZgdK9eQPgEwBfghbjbmWuRBjpI99r/4cQYWG+tRtGUaEmLbIdstrVqWCRngC8RnWg6iU/wU4j3/VOBy3DUB19GLfEFnkL7K2NugTR4mAOYBBzFsPk0MtoVIeoedjktKu1/vaEYq0DuwS+j1SO2/GmX7ueJXyPQJe/kdKOtqEVr8LchXsh929WsMIre8ik69HEPZiM+gVM5/Ia0l7Tga+DhumtVwDKIw7Dcp3m3ZBWsQeegMdDL6QhPKGL0S+Q+uJz3l8VqQGRkmMDvQweiM6Yg4UUyirCd9ocDDcSvT3YVqG8RJ5GlEDq3hUYU5KJV1W7SRA+dRW/7/90Ue8F7LvRUbOaR+bkCC4JP4XdS+0YyadbqyLVcCdwBfBs4BjkGnWRx6dQMq134nEgJJaWuDSMCfR3o0tJ0wm1u3E8PP9HrUEWgTslO7UEXRt5OeBwdtssuxv/AeFBaMczIVYhfgv5HD6TTH641HJoePSMK8/O+msVXbiciJZnsPj1FCiKoAjUggvgU1s/GdVGQTzheSjtTw6eiAKHYADiBfV6y53gnZc9cCX0V2RNqSX/YiXFsJRgeKDJS6+UvBOOSjGN5xKc7oRy91u7I+gRmNyPFn4l30ISftTA+/tRPyzt9LPO3Kx1iNim9UOuuwHTnm17GlkJqLuAFpOrS9IYvotaYFsBEtzDSk7s7ELqxcRzcSzDuW8wEM2A7V8jM9293IWVvq73wIxbd9cTN6kF/rKVQC7x/5/3fRKF5C2kwlDxfQvFyBNIENyAy6DwnJSt9bYmhCPH/ToruVdMXZz8OfqtqBhFsaauEdhTZQ2LvoQ76auCfReNSw9i7c+P+2sRwJrMuR/+GNwGEMJXOdibI9be8qhwqanEzlteMJiLl6BqqytDc1Tjlvxez8W4Xaeru+mK1RO/TTUR5BEhiLX1LRChRCrHTJpzMwl/WaQ/zFuA8q8LHCcH2XsQ45xN6LNse2SDMsFtJuQsLgcewa2wDwbyIy7uooHTsiNl/Yi3kIvUTbqdOIWn8/j+zr/vx1LyUZ9ekw4tFjw8Y/Kd2uLhUfxJzbfwPxuCP7o/h7XK0ph9qBfw6pyQ1E00Imos3tYrbdR+W1gBGBBqSmvYj5hTyDTnTTS2lATRVfKfL9DpQH4Jv9lUHC6yKGHKxvBw5BTs2DEafhuyid2JbQlEMbsJKOno9i5uJfRXQBsCNy8kX1mfQgTsXdSJUvNWIyE0UZXBy436aGbe40oBHFi2255MHG+COKxRdbfFnUgcZUi/4eVNyjUptrJkpsstm9j1DZkNT5mFmY3yaaAGhEGZNRNn83Evo/RiFJX2ZRFgllFyHQhXwKNakJNCK66nQq84CN6ER/GPdw2gCy+3Ybdq0M8GZ0wpq+/ywSOJU8XSejzWALsR1AZe6zDfi85f6imgCHEy2RaA7ygh9DMhGfRuQofBKzOZLL30spDs/UIYM4AN9HKtl9KKZ9MOXLCWgAjkWbP2rctw/5A97BkHp2EmavdTAeA15HZV9mJn8PtroEl1D+HI2xwBeRIDVtjEeIltxzE26n/4L87x9M8qHeVkQ5txUy7UHJOdsmfD9lQ6D+FKp4vWhTHUZ5Nsf+aMOWQqRZlX+OXyCHn82xNIAyIyeU4flsaEE0ZpPwewqxBMtV9WYc8DvMzr9gbMRda5yA3pXpemtRUto+lDc5pxU1lLExT1cD51Ke6MwuaB7G2j4YB2NRckbYZrmKZJtkZFBILm7PuLgjh0KMB5IeVe49uJXR3gT8Gamso0jm/iegJCVXG70LdwFwFGZu+yr8OT2DoiCNEa7XgEq72Z79YeTUTWL+M+hgLoxQLAbej2eBuD3qKRb2sLNRT70kHrIRecZdNn8OPzTbYMwFjkvoueLiMKJxCIKKMEfjVz2ehLSoKKbYHbibJ2/H7E94gtJPu0ZUVfg8FG25DPkPXDnzUwnn3xeuya+SjIYSthY6ETvW27qdgaiRYQ/aiTyuvm3PJpSQ5ELECDjPv8JPHvhc5CNI0+YHRQRcY9KFYwVqHe2jInEb8Anci24ETLkowvQdmAXAo5Qu0I5C67pQle9A/gTXjMvTEaPQ9PzL0Entcy21IaEVFnadg0fTYxJDuc9hD/lxnz9ING9/sPnPRjzzT2K3H20v7FTSt/lBp97DxMslWI2chKX6Mw7GrUhqDqmkP0OmSJQQ5XGYTYBXKa2ychsK7xZ7hiWIO+Dy/sehak62WoS3l3CvxbAnKlcW9g768ei3agI+glnd+wR+Y65HoUXmomK+jF5Y4N1vQyrks8TbKLfhrgbugYhC16Gc9oNItuFKFtVrjJvrvhTFqOMuxlGohbdLpeWbkOkxhehzMhVzok8/6sNwJVorruZAE2L2XUD4pu1HIVcX8lcGhV4fwrzWuvFbR/NtmJmkXXhOFz+GcNuzEzgefybAXkhldC3q+Ra2FD4NyC/xc6KXproWe3pnBpWsegpNdh96yS+gMFGSnt834eZ1LzZySH2O65jaGXPpqeA3LkFzGHfBZ4C/OvxOD+L3r0DhwMeRhvQQivb8Ex0kz6CsvdeQdmirVXgD7iZGA2rBbTM9H8Pfpjwfs9ZxH54PolGIFz9cKnchaekjGy2LTtSXME9kMFZjz3NuQIUcb0Qvfz3aqKaFdR/mDkgZFBkIk/pPsXnkIINOk6noFPgOymh7EFWv+SZSkSfifjL/F7I9N6J30IUWhKvG83mi05szSNCbtLJ+FBXyIQBPwb3Mt8/RjYq3RDnQtkHv1HRobUBJSD60gPcRriHlkEnu3YSdAHwGhX7mIAfKpfgpStGINqqLhzuHTtrTifaQ26AN+G3MWWtd+WsXk6AZlFx0O+GbbYAhKmgWMRA/m3820wJ5Hvkvdgr57eHYA/HvL0aJLt8C/oLyI2x+k3n5+YiChvxzmJ7hofz9+0AGzXM5q/wMIn/SEUTfQGdhdowOoNCsj8PyIKTdFJubF0ku9AiI3bQfQ5lVpaIJOfyi5F6fRfwEnZ2xF65YgKT1zsh51YISU85GzhfbfX4m/70T0Ut3Pcm68/f2+pjP14pOztsw2+k5lP0YZZE0IdXYlO//KfzmI+yH1kUS5djDnuEq4vlIRqN6iKZ7XYJa7pW6OVuQFvAsQ2txAB2M51FFyUiNqEmkq7f/eTSBpdhS7UjFs23KlchT/Kv8+Btu+eg9+Xt8C/EckX2INnss8QRsoKXcZ/ntHxFNzW3BnJm3kuhamQ1NSKA9Rnk0gdWIURf3GY7Enq9xHX60gHa0Ri5BtPyvIFOy1DqLZUMGkRkex43AswR5932QKk7BngQUd/wdaSillP4aQOp0XC55E9JCTJ70x4neeecxwzO9hBagTwEwBdGaj0FOwaRr//0vpSW5NWLvqjUXv8ll7cg8T4rxmRhmoE3oskl6UMklX57NNsRk88kcHETx6XPRIij12jmU3RY3unISCpWFXX8V0QWAiZT1Ev7IU8flf6sLOc/+iOzyCym9KpBpnODh/vfErF3mUB2INFQTrhjG4EZoySGHne+TBaTquWQDuo61SA07C3uhEtfRyZZpzK44CrMWspHoAuB+w/V8mABZVMtucZHrv4jMqrGIKXgDckYvRoJ3JRJqqwvGqvxYiT0c/Cp+ohctqA+ELdI008NvVS0+hZvD73lEekgqxfWU/G+UulFXouKS26Aog01V7USkHFM5s2DcRHSnziTEQTcVEXmNaAKgCTUyNTkBz6e0TTQV9eALWxurUROWYD7aUR2+Y5BT8wxECntnfpyJzMZ3YN+Uv8bPOguEmKmWwUakLaWtvV5sTEQnzkmIgGNaWJOwd/HJIQfaWSSf6vlGJJHjqOwDyEv9QWSD7UU4xTQY81C470wUwptn+fx6otV1H4ccQzaO+gNEEwAuYcCfUpqD6xDsXv91iAcRxVM/ETk9Tde9AH9a5g7Y18F3qXwh15KRQXTPG5G6OR+VrzKFsN6A3Y6bz+b03iSRQebAFYhW7GIS5JDN+3XEjQ820kkUV18LT/5TCj7fhuxa00k9gDs9OYvMEJdEnagdnseiOTIJgJcorSrRQSgCYnsHC4gWxtwOuwbw+hLuezjakLA0+QIWkVD+fjmxHyq8GKi8A0hlNZ0sH8XsnV6JVKhytmHOoDju3qjt18MUf3ldyMv/CXTaj2Zzxt85Id8Lxh/YMoS5FWIFmhbnK8gUMi3QLOoR4EITfo1oDUVORBtzeOeZYsLqcuKfbJPQ+nEp1HJnhGfYBfExTObLLjHvOQwnYDYvc7gnnU1Eps+3UFbnHqTAfGhEG6HQ3u3BXvzxa5hjpddbvl8utKPKwyei02FPzAu7FbuK/N8h1zgdc4JPDjm9wgqvNKHEGJckoQF0+rsI2Jb8PUfpwDOH0sw2W5HWYGxAPgdX1uT9hAuANajuhU9si13r+A32tX4wW/IgAkJRRU2ICciOKXzAThR/DnuoDErQMdnbFxu+n2aMRZvQJADeRvEF24CduDMf+SuGz81WSO132aRdKNbtstjHopyBqKnVL1K63+Z4FAa0CbQ7cGvgsidmLWsZ/vssZpCgNTkDN2CupjUa+S6Kral5uPW8CEWpm6yfoZO88O+WDfu7QrQgNc8ktV8yfD/NaEBag+mFrKN4T/kBJPg6Dd/dEW2MQrtxEnJenYfdnuxCG+YKZFKY0Ixs7PMwJ0YVwxyKP2MU3Ito10ElqjAcgubFtpYDLSoMSRw4gyhzcrnhM6ORDy1szXQhk7i3yL/thoh0se+91IfeiNIs1xT8XR8SAGGYiD3N8uXSbqtiyGBWyQITKQwPo/JdYcKvAZGhZjDkszgf1Wqwed4Dm/lSlEthE7DTka8manHRZQwRrErF80gDCRLEimEyUu9t7L1+zHM/imSEwFNI2JqEj4k8NYCYg6tD/n06FRQAA2jR/puhF2TTAALKogkBiabakME8p4EaF4Yc8BOkyodhN8T/bkbq5QW4lfm6I//5Zyz3EOCNRPPm96N6+Z9nqFimDzzFEPegGDJIANj8GX3owApDO6XVLwjDWmS/9xs+czjmaNdzDEWJhuNlSphrHxJvIfKursv/fy9mDWASZgGwAak81QrTAgpsNxOeRZz3sM81ooKP30VcApeyT7cjD/JCh88GOBP7qdqDPPbvQCXbT0BkGpMZExXdiBewyvCZbbDf6ya0GcOQJZlmsIOIb9Ft+MwkJMTC1s4Cij//fIaKs8SCDwGQQ9lNt6KTazma7DBMxJy08DLVefoHMN17BvsJsxKd1qbT6iBEPLJxyfsRf+BDmBf/cGwFHIpZLX0U8TnehTzdz6BTyqT6tyKn1ZdROOsMpL3Y5mQjZq2o1eEanQxxT8JQkkPNgIcx74nRSICGYSMygwq1iAE074soYb/4au0VhGPuQieSSSJNwuwDCMI/1YggxBaGLPYFlkMm1SPI4Rd3QXYhzsHFmE/PYjgM89p4ClWceRj3dzUOhYwLG63mUAGTixEztNi1Mkg1N5GggvJeJmxCmmk34er2UZZrxMUa9Hxh+SztiFOSJXz9zEEaV1P+M7ORT2dDKTfm0+nRi06b6zC/jAmY7Z0XPd5TueEiAFziti+hVGDTqWFCN9IivooKRESFiRAzgGzaQr+PC05HTsVCWz2LKM7fR9l/xdZjK4qDTzJc+1XMNnaAVzCbl4dYfqcU3Ev4fDWhSIYpivMPZB6+iN7tZUR/B1ug3M09W5AJYHLYpEkDyKAFsSPytk5B6nE7Qxu5B6mXa5CqNtVyzUBdNT1jN7IbzyJeJuAfEC/A5D03wVQTv5fwsFQY2hCZKizefShwNbrn37G5ED0JsStNYeN5mD38AV5EwmJ7ip/E4xBN++f4X4N/N1wzg0yh7RhiWg7Hc8jnMwr5BBbjwdFabgEwBrvTqtIaQCMijRyPqrvshEyWdrSQm9FiDE6roBtRL1qEhdTgYnAt2vAoWtg7Ey1h5zZEFV0c4TvDYdNiopbLakWnm0nj3BsxRPdHz96K2JcnYSborGBL+zgMLyCb+RDC38GHEFEqioBzwRzMpJ8J6JB5OuTfc6gGoFekUQBUSgMYi9JGz0WJQS2494qLUtjBNfljA1Ibj8deojzAbagkeVzTIYBJTW5Beezj2Zz/YcJ65IfIES7MMkjYXcTQyRYUVTVhNjKZXE7DjfnPm8pm7YvCrH/D7zrsQb6TMNLPRCQAahbtKIXTlKXmokL7RBtazF/AnMHnc3wFd2bd7shutV2zG/gt/lpRH46ZgrsB+ReidJ45Bfdy765jParHH+Ug2x9pAmHXHEARLa9NNfL4NuZK0tei9V9VZb1c0IxUK1t++kD+c0nnATSjuOtFmBdDEqMDveijsJNXMtg70G5Eqdi7xp2MImjHnk7cgVpku/bQy6IDIAhblTr6kK8j6nM3Yk/QCVqD+e7wdCn2vgFXIl9TzaAVsdVew+3FLsVPXbYwjEUttu/B3h0myfE8ioPbhN2FmBfNc0iY+J6vm7Dn5K9Hqb+uVWiziDRk66jrMp6leGKUC07CnIzWj2oQxi3FVgx7IEqv7bk3II6Eq2BNNYKiCKZiF8XGo0hV872ot0Xlk5dQvjrzYWMAne62fPY9MKvjzyCV3fdcnYpbubJO5ME3ZbQVIovyGVyai4aNF/P3V0pjUJtmtR6d2D424hSkrbg+70akJXpr7lkJtCIV2/XkHy6Bf4/f/OzpiDbZHeN+khoLgTdj3ryNmP0TvhpNDMcE1PLNpb5AJ6ImuwqBRuRoi9rlOIdo0ntTugP7IOwNTpcTzk9wRTuax6jrrht1VU5UCCTVxbYF+DByrsUhpG5bHQAAD5NJREFUVmTRydjC0KYtFVeiUyNqAYVcfqxDXty/I+/8ffl7m4s83M1sznB02ZCBp3+u5fePQg7BsGs+ipiDPtGFknsmM8RSC0Mzipy0opPdFpPPIcr3SsQ6NAmOYOMvRIlGn0dmYqkx8GUoq9KU8DQaHWAP4hZmHI5GRH46H/dGo4Xf3RM5jP+Bnz1QFrSjzR/n5B8+OlA1mqiTNxwTEWvKtdbfeuQc/AN6efviFuqbhkKJP0bUz5WG3wy69Lrwz03Oo17ErU/KcToTxcVd2oEH0QHXKMfRmO3iPuB/UATBVbuIgj0tvz+IqlPFqUvZjByJpZaH34jmoCqiAy2ogITN2x9lvAq8n9K0lWkMFakwbfw1yDn4ObTpS9lU05Cz8Sa0CIZv4DW4d+j9cJHvF973lSSnzYGy5H6FmzmwHgkB24ZtRTkApipG80j2uVrReg0rUJvL32PU2pRZ5Mi2Vb52HZ2o1qNL2nfF0IZq/btUo406Xqa0hhMtyKdg2kQPo5jyLvhddONQgdNrkUr9AhIyF+B+Up5tuPdBdEIkuVFA/pjrcCudvgG1PA8TAlnkuLSV//4ByYeEt0UaW7GI0FziVdzZH7H2fDqaO4FrSKljsA2dZkls/kIhcCLxhcAbUErs8Ot2ocW6N/G9yjZkkfTeD9FQd434W5/GLLy+TnlqKG6DHFou/fk2oQVbTAjsijLZbO2zSsmGdEUmfz8/Yahz0ADy95xFdPV/F3SYJNHItAs5BqOWaEsUgbc/yX5twXgWZYbFWRSNqHtMUF01h0JobyUZ1pcvHIB5brtRE5ByFVHdFp3MLppAMZLStujktwmRxylfzfwg5XgftOlPzN9nVIfxNOQkTrKLcRfyS6RCCLQhJ1nUqrFxRw6Vdi6lJnoDCgnOILkT3weCUle2tmVrkae5nA6ibVHGnGtoazkygT6Om1OsHzFCkzZrfCGDYv0347/ZbJgQ+B5+WozHRhv+vP1RRh8qO7UTVeAVjYkGZEfeh93xtoBobcN8YXtUq883r2IAlZibWbYnKQ0ZZBp9F3vzUZ8jiA5sk/wjbolWdOqUQ+0Pk4A/oMY403k0Aq9D1YFtanIvUgeTKmJhw/b53/d56s1H5cjLnakaFxNQmXVbx6QkRieiDZf1/Qf03nKp/baHL2f7sHLgKHTyuzjaHkediyqpCUXxCdjGchSJcU1/rjQaEAdjDZXbBxtR45Cy+ATK4e2PKgQup3pOCxtORck9Lk6klahgSRo6KAUqsMmr77KQL8A9sajSyCDna7HIUrlHN/LJJKoJtKKWX5U++YePTShMloaNEBcNqNyTqw3ZicKaaXrmCeg0jKsKb0TFWKrFr/Mp3NiR5RQC15OQJjAKdZ9J2+YPxquoEk6avfrF0ICiET/AffOvBt5HOrWeRuAtKC+hg+hEmCXoPabZrGtBEYpK+b9MowtxL7zShgN6bxofuHA8g5xHaV48hWhH+ex34aY651ASzMdJv408CRX/uAO9lxW4+TQGkRPw3cTj3yeNdkTvLncRmSjDa3SgDS24tNj8tg3yMHKipT1+vCPwRbTYXZ/vFVQcpJoKRYxGVNr3IvPANSHreSQE0qTlNKNiJs9S+VoSLkLgO5RIGw4cfpX0cEYdA4iJ5bM8lk+MQrz+vxEtZvwq2kTlYsYlgSwSBq5C4EV02qbFJ3AqbhV90jIC2nAsslAbyuWvhpN/+OhH+dupoErmkUV5AL9Eoa4oi+hFRGGOUnk4rcigugaP4TYHK1EmaKWFwBsoX9FYn6MHuIGIQqAFeaTTEN4oZfyVdNiRo1Al4Dia1L+wlwyrRuyBuyawFjUGqZQQOJbq0oKLCYGf4mgOBN7+ajz5iz34D1wf3CMyaB53Rr3wolbBzaFF/zOqhw4bFRngCJQy6+IcfBmZA21lvMdmdPJXk9ofNjahuo3bYhCkrSixJ+3e/ihjNXK2lctxNgGp619CHV5cCmgMH/MQ3yLVxR88IIs6//wDNxbhfMonBJpR5eDZJJvZV86xEbiKkL4bzaST5ONjLEZJS0mZA1mUA/5epGrNJR4tths1pDiJ6gllloosUrEfwe2UDYRAkuZAUM3nX9TO5g/GJtSIdQvG4KnU1sk/fCxEdeV8MufGoSy8a9AptoL4quICRIP1WQW5WpABDsTdMbgICdukhMBRqHJTrW3+YHQjx+BmGub/Ek9drZYRVJXdmdLQjFT8qxDBZTWl8d+7gN+gDTBSTv1iyKAmHLYSYcFYC3wA/0LgSNLRMyLp0Y3KoP2/OXX/CHjoQUQwsaUQZxCRqAU586ajKjE34K/YaS869c+m+ujLSWJfZHe7HEYrUHQgatWeYmhAav8yh9+tlbEQVT4C5HGuZQ2gcNzGlo6QduRxn4UcU+chCTkbv+3DNqDqxJdQuRz+NCODVPCHcIsOBGShUvw7bcBp1Ia3P8pYjZz+gBb9SJF+naiAwwREVT0W0VT/jLrXlqLSm37zH/nfsTXZGOnIomKgD+Fmh89HNQSOQoVdt0O5Ei5zHHD7ffQqrLaxAjg3sKGa8hNxBbUffgLZeT9EKv5pmLvulIJuxEq8E3gAhfiqpsNLBRGUDb8KtfCyvZvV6ABblx8dyE+wEi304M/gvzvQmr8AJS3VItnKhqeBcwonthl1q/0WtVlqqxCDaIEEdr5vrEYaxY2owMdSpNLW4Y4M0pZ+hpsQGI4cErZdBSP4/6AZyUGktM5+wtiI6hlcP/wfmlEWVi2HBJMcLyHi0a7Itqw0h70WsCuldRIuNnKer1dNYwDVMwh1Pgf5/8tG8CS5jB6kbr4I/AJ5VH14pOvYHAFP4J+Up+R2LY8ORIqzHkxtKPd8SQpuOi1jACWFzEMdfb+LTKYpLhNaR0nIIP7Fg7gXFqmPzcdS5CzdLKvUtHDbENniS4zckNUaRCVejNT7+Shc9Cwyk+ooHzKom/DnKK1F3EjEEuTbux5pAf8P2yS2oioo32RkRAfWI0rqU4iosxQ1Plme/7Puwa8sMqil91nAf6KuxXWYsRJVzr4BOb4jowkx1srdAajcoyM/UTNQ5Z00laOqY3OMRjH/D6JT7R9IWNcqfz/u6EX+vNHxpnkIAU+gFuoEFBsDKOZcp+VWFzL5kc2PNiQY3oqyW3+CmqwsYeQwXYPRj5KmvJHOgnoBtZYssQFt/roHv7bRjhKOTgIuQ1yNSq+9pMZKHL39UdGK2FNLU/CQPsYqpPbXN//IQgbVGnyJyq9B32Mx8vYn1vK+FdEnq50s9BqKcFRLK6o6/CKDzNoopdnTPoLS8eM9zlNRtCAvrK/02HKPVYzs8GYdQitivtaCEFiNOnYnvvkDNAPvpPqEQNBQtH7y1wE6zM6hOst+B6MfRUTKWTQVkBB4P9UjBPpQ2yTfNn8mf81mFD6sk1SqDx+gOqNcXZRQNr3UFloDiBnXiaq5jIl7I2VAByqI+HkkCHxhPCpxfT7iS+yV//tehoqJ1FEaglLr0/JjPDr1ejz+xhMot+NgPMTNy4TlwGdRa/BcJW+kFdkfr1J5iVhsrEDNOXzX3RsHXMSWJ8cKVOH3nQn85kjDeBS6+xJwN2Jozka1K5IornIO6W7+GYxFaM+lRli1kk5z4DVUgiuJvO+T0YI0/XYi8dgRgimoucsLbJkJ2A38Cv/FPBqBd6Gkr0qv3bARJPaUzeHniibE006LJrAGnRxJ9AlsBC7GXkJsIVJb64iGDOqzYJrf1cD78C9g25AQMAn3So31iN6b2kaxaYkOdAFfIzlCREv++jb++QbUP6CuBUTDHsgmN81tDpkCSTR9CejvaSK9BfTe1FPWm4FzqRxtuAtlMCbN8DsP+yLdgGxYkwDIIFtuKrATUn3HIbOq2gVHBmlLo9CpNQo3u/0U9B5tAuBSkg1/pSU6sI5ktJ3EEDgGyx1fXU356L27A3dgLlIxH9jGcI0sKkd+HXrJA0h7+jMyXw6jejMTt0GFPD4IfA+4HfgR6kRlM8sOROqu6V0vBc4k+U3xfirLE3gFsW+rzqHcik7JcqUSB/TecnlGM6h67c9RB9vh97MEe4x2F+D3hAuR+cDbLddII/ZApdKKtUxbicKxJidWG/CnIt8NRgcqcmESrj5RKcbgyyjEnFqb34YW5FBJuu/AClSQMwmHnw1TUZWaLwN3odJVP0NpqSZ7LYNMJVtm2lxU794FeyI+wjmo5PlRxIuAtOWvdThqk30U7uzJMWgeTP6R+cAbMQu2vYA/snkEoAOVWf8Q6tpULjQj+ns5owOvAh+hBlirjaiyUFJCYB3afOVqAx6GoJXYDJRnYLN1m4GvYs9V34Tmz7RZmoBPo/Znr6FTdhk6QWaj+oWuWsTJKI9+PsqYeyV/nYeBNztc52TsHZX6UM6+zbzZHngb0uw+gUyibalMBmcrOswWkvzm70KmU2ri/KWiCUUHfJsD/cDXqQLPaBE0AF/ALgC60Iln2njnYs7Q7ATeYrkGwH9gdr4tRJ17TNe5ELfinV/Eza4tLPpRaQRZhEmatf1Ii0vD83pFMyLGLMZPdGAD8A2q10kG8nbb4s1rgUMJ33STgN9hntMccA/msOg4VH7bdJ1+VGnH5Hk/AxF1TM+0CtnV1ebbCPB+kokOrKTKvP1R0YKcGq9Q+kR9here/CB7+WLC56MHuBazyrsn8jvYhOqzmNugHYQbDfZPyMwJw2TgScP9dAO/pvpbcp2D+kL42vyLkLe/7Fl95UYLsm/iMgaXo01TtZ7RYRiPGJTfA/6KbO+lqELx17C3apuR/55NAMxBXZDDcABu7LffsWWH5eF4PeqHWGgKrEeC4TvAftTGKefLMbgIHYxV7/BzRTOK4UZlWq1Em78S3v6kMRa1wjocOA7YHzcnUDPiPnQSPm/9KFzZWvwS///792AWJJ1I83LxueyNTsmL0eI+hdrrx9eK7PVShMBKdPKPmM0foAnZi67RgQ1o8Y24iXLAtpj9APOQcLHhWIaaZw4fOeAvyDPvikak0jZRGyd+MQQVsl4m+ubvRzZ/zav9YQiyr2xCoB+4kuq3+ZNEA1qIN6Ja+QtQG+hvEC1zbHcUf+9A4bwVwOOoK09ixSZrAO8hWq3MLmT61apgdEYzUoEWUfwEW4eSPuqbv3zIoPdSjeHVSuJ9uGm0y1CeQc2F+uKiBQmBeQwJgRxSqy6mXrq7juqBKZU4h8hV55ECbarUkmA+MYC81HPRpl+AKsBch1TarordWR11REPQPHZPxNEoVPGXIFP218inVUcRtKGJG01dRaqjOtGKch1uR4VpOlGE5XTE/UgFRrzzoY46EkQDKlYShF57gI1I200F/g91uRizrj/j0QAAAABJRU5ErkJggg==',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAACAWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICB4bWxuczpleGlmRVg9Imh0dHA6Ly9jaXBhLmpwL2V4aWYvMS4wLyIKICAgIHhtbG5zOmF1eD0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC9hdXgvIgogICB0aWZmOkltYWdlTGVuZ3RoPSI3MDAiCiAgIHRpZmY6SW1hZ2VXaWR0aD0iNzAwIgogICBleGlmRVg6TGVuc01vZGVsPSIiCiAgIGF1eDpMZW5zPSIiLz4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz4n8Du9AAABgGlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9myO9GsaAsJg2rIT9KbJSZNNSkaYwy2Mw880PNG6/3RpKtslWU2Pi14C9gq6yVIlKysbEmNug511MjmXs753zu995zuvdccMVymm6Vd4OeL5jRUMA7FZ/2Vj5STQseseqEZhnDkUiYkuPthjIVrzpVrdLn/h21cylLg7Iq4SHNMAvCo8LhpYKheFO4Scsm5oSPhf2mXFD4WulJh58UZxz+UGzGokFwNQh7M784+Yu1rKkLy8vx6blF7ec+6iV1qfzkhMQ2sVYsooQI4GWMEYL008Og+H466aVLVpTI7/7OH2dBcjXxBsuYzJMhSwG/qItSPSUxLXpKZo5l1f+/fbXSfb1O9boAVDzY9ks7VG7A57ptv+/b9ucBuO/hLF/MX9iDgVfR14uabxc8q3ByXtSSW3C6Bs13RsJMfEtuMVc6Dc9HUB+HxkuomXF69rPP4S3EVuSrLmB7BzrkvGf2CygkZ8nECufOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAgAElEQVR4nO2dd7hcVbnGfzOnn1SSkAQSSOid0KU3ERTkKiiCXBUL6kUUrBcLYqEoekXELiiKXkFpiigWmoAiAQRCSUgIkJCEkH6Sk5w+5/7xzr5ncjJ7rbX3rD2zZ868z7OeQDKzZ++11/rWV97v+yB9aAFOB/4FdAILgIuAsZW8qTrqKAEZoBmt7WyF7yXVmAB8AegFBoeNW4AdKndrddQRC1sDJ6BD7AvAW4Dp1AXBFpgCXIpO/eGbPxg3A3shiVpHHWnHDOB/gJUMreH1wC+AfYGGyt1aujAFuBxYTfjmHwS6gd8Ce1MXAq7IAq3U56vc2Ab4AbCOLddxF3A7sFvF7i5F2Ar4KrAG8+YvnLybgV0qcbNVgj2BbwB/BP4JPAb8FXgv0O54jWbg9cDPgLuBO/L//Wnqc29DG3AdsIHwddwD/AWZCCMWTcgu6sZt8wdjALiNET55ITgCWAX0AzmG5iyHFuTXgVEO13kvUlcH8t/N5f+7D3gOOIm6HVsMDcCv0fzb1nEO+DcwsSJ3WmGMBj6HFlSUzV84bgUml/vGE8Y4YBowC3gr8CZkS7Y6fHcSsAzznL0IvBmzSTANu0Z2N26aQAPS8rbPP8dUFNFpdPhutWEi8HM2F7wu4z5gJ0aQmbY18BVK2/zBuA3Ytby3nwgagKOAHwJzgE1svmn/CwkHE87CfvIMAJ9B2lcYPpb/nM0UexNmLaAp/0zX559hOfAg8D3gPcCO1I4jbHvgx2heoq7hXmRi7UPtzEcopiKH33pK3/zBgr4FTV41S9ATgRcIf84lwNmYN9z5uKmeF2PWKL6MXQAMAu/EvGD3AR4JudYG5MvZ0/JM1YAZyOHXQfx13IUOs32o/vkIxWTcvP1xJu9mqjc6MAo5hEyq4wAKH00wXOdY7FrVanT6mhbZydgFQAeKb5uucwVmgdSDu08irdga+BGlbf7CdfwHZA7UHMYib7+PiSo2upFPoBrJQnsDC7E/458wP18L8vyHCZIB4HfoxDKhFdn4JoF0m8N1HrBcYxB4hur14zQgm38j/tZxL3A/NeYYzCJvvw+b3zZuR06nSiCD7N5dgdOAY9CmtGkl+yAb2fZsv8W+WdrQ5uxBp28/mvduorEppwN35r8XXCeIAjwEHOTwXDYhMoicllMd7ieLHIeNaONVWtNrRu8jqsPPdTyB+DFVj3HAFynP5i88naaX4+EKsB1wDlr0hQ6854FTkSAIQztwL+bFtAo551wWfjNwAHIKno7i+XHUylZgf+BM5F/4LPA2zGZIIT6BPcR7r+V6WfQuPwLcBcxGfISTkePNNK9JYWr+Hlz8JHFHDq2l3alin8AU4DLKu/kLhcAelOek2AvZ8GEL4jngaMu9nIwSn4othMWI2FNtqvI0ZJaF0btXAB9AAisMW6PNNlyQdAH3AO/GHh3xiZnI5jdR1n2NHuD3KCRcddGBbYCvUZwKWY7Ri1TefUlWCLQCN2I+vbuRs8sUesuisNpPgL8jO/AXSHs6jcqZNaUgi8yhi9C7eBpt3G5EgPkU4i6Y8E4216iGj0VIQzHNrS9sj8K0SfmxwtbO7chPVDWawNbIA+zb2x91dKETaE+SEwJ742a/Xw+McbjeJKT27Yo0KNPpWC1oQybS/sDxyCTZB5HBbPgZdjv7TtzNkrjYCrgWf+HrqELgLuxO11SgHZF8yqEiuYxeJEGT8gkcBbxiuYcB4BrKc0rVGm7CLgCWAtsmeA+NwK+ITln3OfqBh0k5/b0FeftdyCjlHr8jGTV6O2Cu5bcXAW+n8p7rasRHsfuQXkAmZxIYi5sQKtd4BJkiqVtLExGDLI2bPxi/JxmewCUU13j6UHz/i0gNriM6tkXOvrDTtx855XxXjMogrfGnFC9QU6nRD/wZmZ6pcQxug2z+ODzoco/AoeJTgo5FxUweR57tpYgEczVwCpUJVdUKssh38EPkROxh6F32IIfp6/DvINsBCRZTSm+lRg/SaPcjBUJgG+ThXkvlJ8Z18m7Ff3SgGTgExd1PRUKmvvH9YQLyt3wS+CXwvyin4QD8O0qnocSecnr7o45upNEm6eC2YiI6+atl8wcjSLyoV2SpPrSg6MgU3IubRMEoFLFJixPbdpjdTXL+DyOakbe/kp7RUsYAkqA1QbeswwsaEb23EsS1uCMHPEmZSWKjkeMrzQ4/1/F7Uh5aqaMsmIjMirR4+6OOh4CdKQNZKEjprYXNH4w/UDcHRioyiGBzHdXhxA4bfShbNFHa8LbAlVSHfRRlDKDowCxSGF+tIzFkkLf/x1SG4ed7BI5B5+hAFEkxFfg48EFqr0tPsBB2QCpgM5rQ4ESoozYxFfgSyiWohTXdiJKVdkBZk6ttX3A97cajhI6PUBsTFYY+lLzUhcgfm1BMf1GRsRxpDnVUJ5pQnsHbqD2SVkAbfjvipZSELPL215LN72NsBJ5FhIwvkjJmVh2hyKBQ4u+oXoef63iWEkOE46lvfteRQ8033kRta0nVggw62bdGKvF+KK36EtQspdY3f7Am70dkoaKHk8kEmApciEpI1082dywFvo+8yisrfC8jDVnE69gO8fh3RcVa9sj/t0s6dq2hDx1MX0Tl5p3M1mmoAk2aqZBpHitRJaS6JpA8GtAJ/1Z0ut+Eio2sY2Sc8i6jG/UdmIUDT2AKCvW59uqrj+JjLfBN6jUAksJ45MD7ESLBLGLzRKH62HwEvQiNtSFHozJePsscj+TRBXyX2qjqkxbshVpuz0enfJpSddM++lF4sCj9vQHFREeqw68bFd9cjkyfDSgM2I3sqLgVYHuBb+FW/qqOLdGATvs3obJY1Zp7kqbxBGI/ZgqdgMcAf2NkqqybUOGHLyOWY6EjqXBMQdlibfkxClUZss1ZB2oddTUe4rIjBG1okR4OvA+lWtc1KT/IoYakHy/8y+sYmU6T9cjh6VJauhnFVWehtljnoNoCpqq1wViFiobYquCOdLQCByLi2SMko5FuQr0Wk6zrn/bRA9xQ2KJ5JC7M9Ug9/zZS+W3oBV7NjwD/RAvqPzGHVScC5yG65mXIz1LHELKo3fhZSN2fhVtLdBesB+Yhv8ECVMR1NXAS6iswEsODzcBxhX9xMSNLInbkn9lHodBpqEqNiwbVgUyBujo7hDbgAhS+81GCqw91ZPop8H5UMiwos97GkKCejDSN1zz8ZjWOvsKXMAGFUip9U+UYnSileTz+0A7cgJsQ6ENkoboQgCOQZ9qHc+8lVJ7uUGTStWAnsbWitmfLPfx+tY2O4ZNxCFKTalkT2IBU/iTaSU1BQsBlMXehcJZPIVQtaEBO1kuJ3zxmAC3gBahg6JHEL4aRBT6EWJyVXp/lGjlUuHYzNAAnIlWsmsoiuY5NqEFHkptuJ9TSy6VmwlqkiVRbz79S0IZs/L8QL4bfgw6p21BfwWn4q+HwLtRjoNLrtByb/wXk/9gCzcCbUYnrWuIEdCJvfzlO3F2REHDRBFYhIVBT/eBDMB35XV4m+vvbhKICXwfeQHKOu/9AB2AtR8QWAe/FULW6GXgjSieshYnYiH+b34YdcfcJrEHCqVZ9Ahlkl9+MW8i0cPQBj6Fy4AeSfO5+A4oO/IvaWPvDx1JUJ8Basr4ROWiWpeCmSxmb0KlRCTV7MtIEXBZSJ3IM1lovgUaUqPMY0VX+V4FPoGQfXyFBFzShJqaPUltCYAkyvwrD/1bsQvU6R3oQAy/pzrEmtOMeIsyh+60VTaAJ8SOihtmCHIpKZ1Megfo+1oIQWIa6VMVK7T8CeIbq8gl0Az8nHXX/pyFNwEX97URZhNVOzBqNwmtRUsrXo9z1E0gPJf1IqtsUHkD9Kf+TEg6WRuQTeIzqiA70Ifs7yZbRUbELEkgu0YE16AQ8HQnfGURU2yqMySivIoq9/xxyEE4r/+1a8TpUY68aw+MvoFyKkk3LZuBk0h8d6EMMsDRt/gC7IE3ARYjm0On5HKpfdzFwGOkvYLkN4je4Enu6UBGPNJ36xXAISparJiGwBIU2vfmVmtGLej4FD1ds9APXIpJJWjEDd8dg4dgEPIWKtcwo+127YWuiVZJaBnyedL+vAA1IE/gL6T4ACzf/qSTgT2pA4Zi0OQYHkLNtB9Lf3GM8Mgfi2JVdKE59EOl6ztFoM7s2in0eOINkGnwmhWDtP0C6NYElyGRPtJbnXoh7nQbnSD+qeWYsd5QiNANfpbSTpBOZZGnwDTQC70QVemz3nUOazGGkS4BFwT5ICKdNCORQUZu3UoZ1kQWORtVFKukYHECe472pjgU1DvESfCyeFcA7qPwpeihu7L5eVIhid6rjXZmwD+IJpMUcGEB5Ee+mjGHkJqRqzKZyQuA+YH+qY0G1Ap/CXxPKHOLFn42qE1UCU4B/YNcEu1D33emVuc1EsDvyCaQhMrYQFagpO5EsoA0/QflVonuBfamOzQ9KtJqP3znIoWIXZ1NetlyAj2F/712o4tTMCtxf0tgXNZatpBBYivobVoxA1oTMgYUhN5jEeBA4gOrZ/AEt2EaH7UVOpm+jakMu9Nkc8CLieJd7Pn6P+fTvRSf/zhW4tygYje4xaoGYBiQEfkdlhMBidABXPISaRY7BJST/0P9GTqSo+d/tiNl1MOUvA/Vm5DS1PdtdiAzTghblGcjWd5mXtSiRpZwbbQ7hAiBoTbVbme8pCsagakQLUPhyJcrJiMIjyaAM0L9RXp/AK+h9p6pz1/5IJU3CHMghYszJRFtQ7eglByGqQG12yorygFGoDqBpTvqAWyhePnwX4GncFlc38gKXQx3MYBb4K1B6reu7akZ5G1ujUGmSnuxGhtiZwxuK9AO/ITorcUekmSYtBAo1voqf/MPRgDKpkqANv4DCTVFO/ibgoyjvfvj1lqHsqKRPpx2Rs8ikKt9FuCMvSKd9GDeTYAnlcQw2oYy9sPtYihh0LvM7FfkT7kbc+z8hCusu+F3kzflrvh/lt4S9k1XIox71dJ2J3mVSXYoCx+97SHHSWBAdeAR/QuA1VMQg6qkwE72QsBf9OCIPJYkDka0W9mzLgWMxb5RGVMX1QexzWrhIkmxI0oA5XXwZcBR2AdCKsiCH04eDxpYfR2ZbKQKtHb2HC/PXdFmXXyZeiHV75PfwFe0pHC8hwZT6tPFmVLnlKUonC61BIY44Eu91SBsx3cMvScaDPgV4C/A9zCf3LbhlLTYhQfEIdhMrh9h2XrngRbDAcA8rUUtumwB4I+bNsgG9w58B/4WEgUuq8FjEmPwQyg+ZjTIOXdfdJcQTABlESruO6AVQTOMVlCDm7eRP0sYKSB8fRpVg4sZ/NwJfAG7MXzMqupA6ZsLpSOW8CU10qZiGVMzTUHLMWMxqbBNuZk0faoR5PjphdjV8NoNU3a+j578FP882HMvQYi+2yZvRaWjD6zEv6tHo9J6FBGpHfryCCEgrGeqzMAr5EGaiHINxBSOKOv8aEqDdEb4TIDipL0Xz4iNE+wpwLgp995d4rbJjJ8wqcNjoRVK4FI99G0oQsql8syk9Bz+L1PQniOYIGkBJNFF8GzNxiyoMokV8Isn4On5KuHbVizzqtue6ynAN28jlx0B+5Eq4VjCCjFIfdRrHA7+iNFO4LNz+pPE6FDJynYhu/KX17oe90ONq5ISKO8lNSNKXUkLtx0QrXbYX8mG4zOkSpI34xkcxmyN/xl6RyWYClGvkkD/mW/gtyDIamS9Ru24PIMf3WaTQ2x8VjUjVc3EM9gP34Jfl927MXWdywB9xU1mHI4NCMisN13cdN+AeN8+i5pkPYI8O9CDTwbcWcDZmATAnf482B+d1RLPPfY/1SL1+B8mYxq3IHHPldFSFtz8qmhBxYTZmFXk98EH8LtYW7FV6A0plVILRAfjrqtSFYtD7Ot5HI+rs/ABmwTqA2Go+F9NhiOhjmtNVuL3LycBn8dclyHX0oKSez6JwbZIYhXJBXna4r0VIuNbM5g/QhIqKmFTlDuzNNuNgB8vvDgDfIVoR0RbkPPSZFr0JnYiujtNGdMrOttzHU/grJnIEcvLatLkBFAVxodi2obVRrpLcT6PegPtTvozKMcDXMGtsryDmaNWr/WFoQLZh2EvuAr5C/FZPJtgYeY+iVE9X4XMcemG+F+dqtBlc7yOLQl6mDbkAUaFLFawHopPftcz3w8gP40oIup3kBEA3ouy+E0Vryp1A1YQKp5g04MsoU52HJDaYCwaQp3ww5N+bgT1Ixmv9S8QrCMMs5Adw+e0McmCZHEaDyO67DnEZPow2jy2UM4FoxUBzKFb+quEzLZTeDXlX5LU/GvcTalb+ey5z2oM9bNufH4HXv3AdDTIUFejLX2s98HfUXGR3FBG5EZl8ccJ8paAdrRfT3nsW3X/iSELKjEdez06GasMVw5OGa2SRdJ6KXpJPrETMwHdRfEE2Idv2PqSKmzABeeJNRJu5yAZ+mKG5uB5l+72L8CalfWgOc5Z7GI61yHQo9mwZSgsl7YoiFS7svkK0oU13N2bhC9qwNr7H/6D3OBMRqMbnf2MAzdkaZOq9hGL5c9C8pAHtiKcQhkFk/1cdAi//t4E7gU9jbsW1M2YVch52emwcNKENaXI0/QW3k3IWimqEqasDhCfDjEVlwcK49E8QvdBJK+YmHC8Rnw9wEHI0xlXNF+MW1WnCzC0YRBmSac0utGEnzNT0DZgJXl7h0wQ4FTl7LkQdSE5DEjrsRb2M+XSfhMJhvtGHToVlhs/sgxt9diJmrv0ryN4spgWtRw7HbzFEkiL/54uIQDM/5LvFkEHCxkRe6UHmSFQciU7dUvwH05Fjy/b9QL03oZo9422YNYDlmDWgdhTOPRoP/gtfJsB2iERTaOdth5nU0o8KXsyg+KIYn79eK3IK+sRyRLCYGfLbU/IjOE3D0IIWY9iiXoT5Za5GLMV/o5N5e3RK/xVpABvDv7oZ2tGp+N+YhXoHQyEoVxyOnFK2WL4NGdTO+xqkpochsOEHDb+XhkKocTEKHW5hz+YiAC5CBVgvRw7TOBR5wN9EnsqWcettkB2fJdyhcTdiORWbjAYkALZBJ6JPrEXMuDBkkYkyx3KdgH4aBpdwYgdyCv4TPXM/Q6aRCQ1IYByKfAlHohBT2MIaQIJmg8M9BdgPkVcOw75WXkPztR/hJ9wOKLz7E8zPZ3v2alX/we4DWIZ5Q49Fe2I6EgRPIo02FnyYAFOR7T98sTciB5lJRb4XqeRh2BV3j3wUrGeIkRWGGQ7X6WAo26sY9sTN+51DPomNDOWRh2EsIpMsRYLx16hAyljL7/QwVL7LBbshE+VI7Jt/DYptfwwtyLD7z6BFa8vtqOYNbkIWnf4m1f1VzHtiJpqfDPIRvYESHLs+BMA0wiunzML8sleiUyNswcxEG8i3yheEhkyn99bYF+IypMaHIQt8idJDbwFGI+fql4je9PRhpGm4qP974u7tfw1xNr6LeAYPYFbxt8dO8spa/r0sIbIE0Ii9ypDNBNiRzefmg5RQJ8GHAOgjXGLtgzSDsJfZj3lRNqOKMqZoQlx0YZa0LoU0XkWL3nSdtwAfwU9m2b7I3Ipa5OMFdPLa4usZpO5fi5xMts2/CAmj7zGUhfcHhohRxZBFAiBsIzRiF/i250grGjEntw1i1wCGF6/ZB7Oz3QgfAmAxCtkV89xujUyEMPQxVOEmDEejzeNbLRxOIBkOF5JLPzJj1hk+04rqEX6a0mviTyc8xh+GRaiewr+xn/6HIlX+UIffeAnlu/+czc2KZ1EiV5ipkUEaxmkUX39t2L3b6y3/nlY0IMEXNrebkDll0nCGawAZSqAx+xAAHejEeJrNX/ogovsGFWOKYRCdTs8bPrMDyZT/bsJsO5mEUiH+igqVmjbX1ih083nMAtEGm9NxOOajyMAd2Df/DOATyNtvWxevAFcgNt3w07gf+BFmEtV4pMnsXOTfJmI3mUxsxyya7wPQ4XEoOiHTEDloxJxtugaz+QRbagCvYd5jZUEGSbar0GZ4Ap0622LfuJOQV9hE/LgVvy8wgwqNmPjYV+IuIE/ErQpyL6o+FNdpsx9uXXiCWnoHOD5DFlGUXbr6rkRluUzvI4P9nW5AQnH4XByNudR4P8Vt3u1RDb85yKHaWzB6kNP0euTXqBSP4H2Yi4U+icqdmfZMYTrxANIs0yDcYiOL4sOdhE/MRvy2kB6NPNymBfpJomkdV+NWCfYHxCdwNKKYvK2wxDkRf2M6bhmNq5E54yJUts9/3nS9+9k8fDwKuBhzcZCnGRIaLcgG/j7m9VM4BvK/ezzl6w3Rhsp52dbHHymuFRVe50UkzJ5Ffp0wKnlVwaVw5+X4Yy5ORzn3pt+L2mVndP6atlz26ymNwXUc5kKcg0SnUB+ANDfTfCxBJ3aUd/A1zFpWH6qUcyIyPS7EXubsmvw9jEd1F+cQrwdFNzJjZkR4njgYh8KjNu2qF/gmZqEUNCA5BGnXlUrm846tEP/blMr6Cv5KWs3CnnP+QVRo43iUlhuM4/N//zrkzNqaoRexC7KLwyrBDqAS16WobFuhwqCme7+AaALgGMytvRej+Yi64PbELlhy6N3OxV5Btwv1cRiN8iiWWz5vGxuRvyKpsvBbIb/KUod7WYgbVbomkUHS3PZCP0bpE5RBi6hYo5DCMR8t3rkoyvF8/s+5SP16EgmRv6Gef59ECTNBDL1YeasHEDmqVErtrzGfrFcRbbOegFk9vZF4NfLaUKUdXxV+7kMq8ndw81e4jA4kTKIUgXHBGKTRuNSK6EJmTBLh7qrBTFSMw3RaPEbpL6oNOSh9tm/qRxt+ETID3oTYesHL70Kc7dfhp8rLVZgzKa8nmgA4HrNf4TfEL5K5Lwr1llrgoxNpIVfgt9b+ICJ0nYQ/lboBOA/3GpEPkrwp4h0BHdEnvon5JFqDnCml/O42qDhEkiWn1iIBMBa9WN+nyzcwC4BfEG0xH45ZTX2B+GpyFkUNbBqXaeSQFnI+5lZkpYwb8cPYzKIOVi4O4RxqT1ZKaLjsaGeoqsobkcrrq/3UfpirpgaVe0vxBZxEeYpODiB6rCnxIy5s/pLvEk0A7Imowiah+Dnidxgah9KJ46jtAVv0WOymT/D5FWhjPYpMtUXYN+R65Bsq5XAZjU5+l83fm3+uJEq1J4YJqA78XIbKLi1Ai8NHHfUM6nhjWoivonhqHEdaMyLFlKPgZCCwrsGvbTcWsQ9Nnu+LiCYAJqOSZba+Cf+FHJ1x5n4SiuRE6ZvQg6jFR6Kw4t2We+xDxVzem/98AxI+JyCtyOToHAQ+Q3wzYCvk4LWFPgfRAXQnpfuDAgTEpwORNpFIdKAB1Sgv1g56Deq/5oOQsD/m+vA5VN46Tgnn/8C//WgbnehU8PVSTsPeZSmqN7kRbe41lut2InbnFeh9vxs5b0/G7QAYheoW3IrZJOhFDU8+x1BcfBLaNGECIIdCinuGPHvQsNOkOT2M0tMPxK33YIDxyAlsapU+XKgdQOmdfhrQ3P8KVaZ6BD3jm0mg2Ok0ZCeFnTx/x48pkEXS2iTpOxB5KAqjK0P5yk0PX5j/xE+Zp93Q4jEt4h7i2ZR74+6s60EbeDlSt18EfouiIDbBk0GkrhMRG/M29F4eQxGVHyDBsi+bL+IG5LwNOxxuwZxok0WVgE2btBf5Qp5G83wB9rlsR95+l1BfP2JozsJPm68TUY5H4Z4cQBEsl2SuSDgShb/CFsir+FN198Gurj1BtOSaSbizxfoYKhryAgr/PZf/cwF62a7XGkSb5TxKeyFTkXffhU0WZ3E1oLwB27ybFvdvcfdmZ5BPYQxaN1shdb3dcP8TkcAYvgYfRFEkGw5D68ZFyA2gyMjziFkZ9u4+jPuczUbOVB8bcwxaD2E+kdvwaApk0SSYFt8coqlNJoxGjiwbw+ty3M2O0ZidUEtQJ5ZxuE1cA1rs70eql2lucogbHzVrK4vU5n0ZyrCzCa7jiL/AxqOClXGYdYGgi8qgjIpGZOPfik7pT+HeT/EYhpLWoj7bLciMCNZGM9JCXXoj9CMNJ2oNBxN2R7yIsGfZhEffUwtKOjAtjKvxZ3dkUGjKRnndQLQS1TeEPMMASmuNe/+jsVeyvRO3UyrAOBRluR43bSOHKv6UqlrugbzncYXABaSzo80oREqy+TlMm/h+xOWYgEhpLt7+HqT2z/D8PLtgd4p6667VgKRuGFlkI3Kw+WxfPA430kegVrkgmLTCF9eX/7u9KW2ypmEOL/49wm+MQiZDlI5DC9EJ5+OF74dO1zgO0y9TQoWahNCCNNgXiLf5h6+Va3Br8tmNok774N8zH3QcNvmDgrwJL5hFOAf9LpLhUx+I3XHXj8wFV/NjL2Tr/jI/Pk245zgKJmIXAK4txw7E3uevcKxGqrDPjbcL2swLItzHIOLW+2yt7QNvZ6jEeqmjDze1vxcJ0f3xezAW4gLMYccr8CgAmlF44SmG1MN+lJ9+HMmofU0ovGJT25YTLVmlFdljk4lPbilEBtUPMKnNf8I9dHkG7r3kO1FvAVc72BUZ5Gg6GPlaFjrez71EM3WSxonYw6a+Rw75bPYiuc0P0ijDkq16cYvKREIW2T9nohjtach7m6TTZxxaVLZT6An8NL6Mir0Qz9/WJfdnuIdJz3a43iDSOK4h2ZzwDHK8taIF9SXMSVvrsBe1KBem4G5GPU98s2f4eBK3YjilIoP4GMN9ETlUqDVJ4VNWHIab8+ZW1Hop6YlvRxv/StwSPtaiWLHrfZ2EOV49kP/3Cyl/NZjtMBNyBlFORxq695yLfUP3IRN2d/R+JqP2dquIHi3oQxqxb23MhtcjX8M8dFi+m/K1Oy8bPo3by7ya5GzQccgLfAnuNmXQtTdKy/GDERMubAF24Fa4MwmMQSaBiZO/Ei3KShes+Dxmv0wfCqUdxuZzOQqZlC8ZvltMG/sT5oo+SSMNWldiaENOO1t4ahNaoD4dYhMQ5TKoebbCUZ4AACAASURBVBjlZOhC3PwoJ/XemDMWO/DXayAqMqiuoS0r7zlkKvrihsTBWZgPjdkoyaiYoBqDnGwuuQvdiJ7ui+FXRwj2xl4NZxDxAy6jdDVoIgp//gaFkFzs8uHjJqKrhHthJnlsxH+KcRTsiOxl23tYjLjpH0Z8jd1RdOFA4K1Iq/sC8iV5566jJJmwLMcFiC5r2rDjsaeo9yKTaD/LterwgEbUaONl7BtvHapbH1UIZBAZ5lKUUrqG+MVD/kA89teBmNuOr6RyGgAMFbxwiYUHtOql6L29hBxzKxCvvzP/37eRjO28K1tmTz6C+4Y9B3NE5rn8b1Ta3BkxaEZpmy655etRuSdTocUsWggTkPPkPsxVaW0j6PP3PcvvmvAGlMMe9htPU/lqsOPQyeerslIfKqWWxCnahAppvgdFily1jQzqeWHS/H5LjW/+DHKqzUQe4NFU3tmwFfBD3EI2G5C3Pug0PA2RlvZAjqr/Rgk0ax2uZRtrUPz3rchnEQctiNRjWnS3kA623QEM1YbwIQSeIz0hxICOPg/zPdtaslc1AvLP9ciWuhc52KJ4tJPC9si+duGs9yDfwe3IU/sIcu7EsenDNv7fUA/AUss77Yud/fhZ/BCYfOAUojtGTcL6MspXrz8MGeSr+A1m+7+PBMg2ntCMB7/K2WyZ5zyABIGpxVG5sBPa1OXO8Q/GOmTnfwg/VOjdkEppUqtXoyKeaTp13oRScn2YA3PRoVPJhKIdUXLYBsz3+jDJOC9LwbaoYta3kRl6PvGK5zCV8JMoh99GHaVgJ0QAKqcQCKr8nok2fql263Yo5DQbO8/8j6SLagt6/gNQHkDcbLtg9KN5OAa39TUNhfs+hSjUpUZHJqKT30bFHkAO6TSd/jOQafwaQ5rxGvQ8kbX212Nmo80hPWGPnSleKML36EZmxxEoRBTn+SchR9Q7UAjs98g77sL934hqMqYx3TaD/EPHAjfjljBj2lxL0bOGMQqnImfwU8ghvBFpZPcTXy0fg2oKutz7XaTr9G9Bp30xv1gv6tIUiZPxAcx1254hPQIApAncjFuOdtTRhzb+bsSX+BMQjz7uCZlDqah7lHAP5cQ0pNXciQTcWrRB16EN6yogXkZcgitRdtu1SDM1vec7iJZ/n0GcgT/jdogsZ0v2YKWxNeaCtw8Sce2Y6q8NIrUiDSZAIbZHlXfilrUyjUdwV0uHYzSaT5tNaRqLURgrbXPugiZ0Yu+KhOi+qDhLKVqCbYO+DbfFnkGHh83hF4xVqPpv2rj2U1HnqTABsBDR2J0FwEWYY+1fIJ2LcQLKVLRVExp+urp8LqCORpX8e+Fei67YWIc8/2lbdHGRQWZUKZWHTKMfmQ82DTVotnkDbibYKkQQK3eyjwsmYfaFbUBmvfPaPY7wVMqNiK2WJhWoEE0oo+4aROyZh8J+r6GT9FkkLX+DVMsLUTqoy+Kag0p1RXn2w4l/+q9CDSYryalPAi3IeedaZyDquBo7W3IGKqntUnKtE5HK0trFZwzy/IcJgD60J5zXbRt64OESug9ViklDuqcJGbQAdkQn8H6oOsssVAFoR0QMGoMoxqdgJ30E45n8510nM64AeAqVWotLKko72pEQeA3/AuBpzI03xiDHsQuZLAd8kcrSr21oQhmMYdyWl4iRQdqEvNWPICfObFRosFZU0UI0AKfidiLlkBZxAm4TegTRCk10oBjuDqTTzPKJBuS1960JDCDtrhhhagzSDF14CzlkDqf9wAOF+ooly+XQeppYuVurDmTRieRaB+/fyFQypfo2IKFpsnU3oYSYF5DqOova3/jDMRGZbEvxF8npQ5GIachG3hqFjF3bw60HLiZd4T4TMogk9gAyHTtQ2vYNyNFZhwOywLtwryA7G3Mt/nZUx8C04H6Rv0Ya+P2VRDMKr12NFvECtJC7GZq/XrSwF+X/3cV5txCFUO9Dfi0Xx+NKZOpWMu06LiYjbfYDKOU5VGNPqxOv0siiSrKXIU64Df9GauI9aPEU4kQUxw6rUrQJla76LVqYdUhr2h7N/Qw0d+1ovfYwlF6cQQ7cKL0hXLAGqcw/QP6JOkYgssjR55rt9hybN+XcCnUNmmP5/jPISVgXxtERZE66dOR1Hd2IsJVEW/c6qgyNKNHFNTqwAJ0c16EYt8vC/AXpjCtXC6YiOrWPRKQcqiNYayHXOkpABoXikohXL0clx+qnf2nYCXchHTYGENlqpDlf63BA0Fp6Pv4SjvoRc6t++vvBLshxGKVrczDWIrXfR3v7mkHQx/1YVKJqFiPbS51F9RFK7S8XjHnEoxXXEY7JyHH7BG7RgQ2oZPtnSF87s7IgbPE1It7w+1CedysKn9yJqgMtL8vdpQ9ZZA58HSW1xMViFDW4mbrn3zdaEevzSLR2d0abuwnxAtaj2PiLyAH7GCJ1barEzSaMFkR62oCiJ844FKUPDqcVrkHSslapqS7IIMdg3DJYs1FoMI05/bWEZlQdZx+0no/I/7kf8hmMp3a1r1GoStWdiPvwGxTWdtLgW1Dnm7COKvMRh34kI9CQomT4rUdx5XoJ6TqSRBuiQK9maG32I2LTuThQmiejRpamhV0tRSmSxk6o/sBKVCasF2lNfUjl2oRexK/R6ZOmAip11CZM+SyLgemFHy7GYc+G/H0h6uqrsBCpWt9ENufOyJPci7j9z6NEqjqbrI5yIIMyIKeH/Pt2KCM2KPQbutEHLT+Ui3N3NYwF+VFHHZVEIzqATAf4ZgzHYh/sQvZqGDYwFGKpo46kEeQF7Iay+gKWXgcKyT6N4vh1SAOwmeab7dtiAmAD8CTKwirGh74HTX4ddSSJRlTB5kzkyd8KebED87MXHVQLULrrbUQMddUobAKgz+UiExCffXgkYB7KvKp7setIErNQ/4MN2Dn+OaS1Xkd1FO1IEhnUcdnU2/JIHB34bSif+K+oA8p3kIOhVjd/FqWcboU0n8n5Pydgt6vq8IM2VDwlbt7FrdSz+I4EHmfLmgcDiCq9WVWgeihPauXODPWt3x3Zmu1IzVyFbM0nEPlnPgr71eEXLejAuZj4PJN+RHq5BNXAG4l+qkZUPv6jyG/ShkylZ9C8/J06+/T/sQNKAnmMcOJToQRdiKjQJ1M9ZaKqBW9FlZtLzbHoRO9oF0buAdeAakxchDoCfQz5Uerh+wLshOxGl6SRYmzITyE6aR2lY3v8dRgeRL6DXxCtO1CtYqQKQSO2I/7mDxxPK1EDknoKaem4Gv8NQjYBN1L5VuN1pAzjURdbHwtuDSqbXncQxscOKDvPReguQLUT/4S7tnAn9ehAHXlMQCW7fJ42j1K8cGhd9XLDhZibpvQjOvXpDFW3zaKEF1PvysJxM8oMrL+TYRhJySnbA18BPozfUOa2iPe/EnUc2helnAYdiHYCpiBvbA+ORIwRgkYkAEx9EF5AHW/uYWjuBlGoqxklptka1eyM3lOdNRgDu6HY7IeR97sau4sEDj+XwpE9aNH9C4X+XAp7LkYLdD5q5Bn8zkD+/xeguvTfRz0HRnoZsCyagxMQ69Skzl9GuHCYirzcLu+oE/g5Izs6EBnvRBvhVWTvLkS0y7BsozRiB+CnuDn81gHfQmzHfVDm1GnI5vRRdXYAhbr+hjoQjTTbNIvm9ptIIM7FzFobBPbGvGGnAFfg9n47UZOWaX4fqzZxBMVr4veiOGs1MAK3Aa7FvsgG0QK6ii01nAY0F7PxF6bKIbPhe6S326xvzEK2+GvYORfBWI+bkByDyrS5+HZ6gFso3jOwFtCCKlZdgw6+9wLj4lzoKsJf1ACyqdOM8agCj8ui6AV+jNmW/CxKgvIhAILRj7zaO1K7aukoZD4uIfr8rCCan+rruPcV/BPKLAzqX7QgP037sNGW/7dqOPAmAP/D5o1o+9Gz7hrlQk2IUmk68U4jvYt2CrK3XTZ/J/bNDzIHSq09HyZMf0ltklYmA5fi7q0fPtYSTQC0IHNgjeP1b0O18i5B7dseQlrvy4hK/CxwPyIVvQeZvmkVBI3Auyl+SPUhweBMXMuismAmu/dzpHMyZiLVx2XzBza/S7vzduCf+DMDir2gWlJLRwPfIFpb9OHjXqJHqiYhx+HKEn632AhMhyNJ53vaCjk5w9bnv7D7UzbDZZgdK9eQPgEwBfghbjbmWuRBjpI99r/4cQYWG+tRtGUaEmLbIdstrVqWCRngC8RnWg6iU/wU4j3/VOBy3DUB19GLfEFnkL7K2NugTR4mAOYBBzFsPk0MtoVIeoedjktKu1/vaEYq0DuwS+j1SO2/GmX7ueJXyPQJe/kdKOtqEVr8LchXsh929WsMIre8ik69HEPZiM+gVM5/Ia0l7Tga+DhumtVwDKIw7Dcp3m3ZBWsQeegMdDL6QhPKGL0S+Q+uJz3l8VqQGRkmMDvQweiM6Yg4UUyirCd9ocDDcSvT3YVqG8RJ5GlEDq3hUYU5KJV1W7SRA+dRW/7/90Ue8F7LvRUbOaR+bkCC4JP4XdS+0YyadbqyLVcCdwBfBs4BjkGnWRx6dQMq134nEgJJaWuDSMCfR3o0tJ0wm1u3E8PP9HrUEWgTslO7UEXRt5OeBwdtssuxv/AeFBaMczIVYhfgv5HD6TTH641HJoePSMK8/O+msVXbiciJZnsPj1FCiKoAjUggvgU1s/GdVGQTzheSjtTw6eiAKHYADiBfV6y53gnZc9cCX0V2RNqSX/YiXFsJRgeKDJS6+UvBOOSjGN5xKc7oRy91u7I+gRmNyPFn4l30ISftTA+/tRPyzt9LPO3Kx1iNim9UOuuwHTnm17GlkJqLuAFpOrS9IYvotaYFsBEtzDSk7s7ELqxcRzcSzDuW8wEM2A7V8jM9293IWVvq73wIxbd9cTN6kF/rKVQC7x/5/3fRKF5C2kwlDxfQvFyBNIENyAy6DwnJSt9bYmhCPH/ToruVdMXZz8OfqtqBhFsaauEdhTZQ2LvoQ76auCfReNSw9i7c+P+2sRwJrMuR/+GNwGEMJXOdibI9be8qhwqanEzlteMJiLl6BqqytDc1Tjlvxez8W4Xaeru+mK1RO/TTUR5BEhiLX1LRChRCrHTJpzMwl/WaQ/zFuA8q8LHCcH2XsQ45xN6LNse2SDMsFtJuQsLgcewa2wDwbyIy7uooHTsiNl/Yi3kIvUTbqdOIWn8/j+zr/vx1LyUZ9ekw4tFjw8Y/Kd2uLhUfxJzbfwPxuCP7o/h7XK0ph9qBfw6pyQ1E00Imos3tYrbdR+W1gBGBBqSmvYj5hTyDTnTTS2lATRVfKfL9DpQH4Jv9lUHC6yKGHKxvBw5BTs2DEafhuyid2JbQlEMbsJKOno9i5uJfRXQBsCNy8kX1mfQgTsXdSJUvNWIyE0UZXBy436aGbe40oBHFi2255MHG+COKxRdbfFnUgcZUi/4eVNyjUptrJkpsstm9j1DZkNT5mFmY3yaaAGhEGZNRNn83Evo/RiFJX2ZRFgllFyHQhXwKNakJNCK66nQq84CN6ER/GPdw2gCy+3Ybdq0M8GZ0wpq+/ywSOJU8XSejzWALsR1AZe6zDfi85f6imgCHEy2RaA7ygh9DMhGfRuQofBKzOZLL30spDs/UIYM4AN9HKtl9KKZ9MOXLCWgAjkWbP2rctw/5A97BkHp2EmavdTAeA15HZV9mJn8PtroEl1D+HI2xwBeRIDVtjEeIltxzE26n/4L87x9M8qHeVkQ5txUy7UHJOdsmfD9lQ6D+FKp4vWhTHUZ5Nsf+aMOWQqRZlX+OXyCHn82xNIAyIyeU4flsaEE0ZpPwewqxBMtV9WYc8DvMzr9gbMRda5yA3pXpemtRUto+lDc5pxU1lLExT1cD51Ke6MwuaB7G2j4YB2NRckbYZrmKZJtkZFBILm7PuLgjh0KMB5IeVe49uJXR3gT8Gamso0jm/iegJCVXG70LdwFwFGZu+yr8OT2DoiCNEa7XgEq72Z79YeTUTWL+M+hgLoxQLAbej2eBuD3qKRb2sLNRT70kHrIRecZdNn8OPzTbYMwFjkvoueLiMKJxCIKKMEfjVz2ehLSoKKbYHbibJ2/H7E94gtJPu0ZUVfg8FG25DPkPXDnzUwnn3xeuya+SjIYSthY6ETvW27qdgaiRYQ/aiTyuvm3PJpSQ5ELECDjPv8JPHvhc5CNI0+YHRQRcY9KFYwVqHe2jInEb8Anci24ETLkowvQdmAXAo5Qu0I5C67pQle9A/gTXjMvTEaPQ9PzL0Entcy21IaEVFnadg0fTYxJDuc9hD/lxnz9ING9/sPnPRjzzT2K3H20v7FTSt/lBp97DxMslWI2chKX6Mw7GrUhqDqmkP0OmSJQQ5XGYTYBXKa2ychsK7xZ7hiWIO+Dy/sehak62WoS3l3CvxbAnKlcW9g768ei3agI+glnd+wR+Y65HoUXmomK+jF5Y4N1vQyrks8TbKLfhrgbugYhC16Gc9oNItuFKFtVrjJvrvhTFqOMuxlGohbdLpeWbkOkxhehzMhVzok8/6sNwJVorruZAE2L2XUD4pu1HIVcX8lcGhV4fwrzWuvFbR/NtmJmkXXhOFz+GcNuzEzgefybAXkhldC3q+Ra2FD4NyC/xc6KXproWe3pnBpWsegpNdh96yS+gMFGSnt834eZ1LzZySH2O65jaGXPpqeA3LkFzGHfBZ4C/OvxOD+L3r0DhwMeRhvQQivb8Ex0kz6CsvdeQdmirVXgD7iZGA2rBbTM9H8Pfpjwfs9ZxH54PolGIFz9cKnchaekjGy2LTtSXME9kMFZjz3NuQIUcb0Qvfz3aqKaFdR/mDkgZFBkIk/pPsXnkIINOk6noFPgOymh7EFWv+SZSkSfifjL/F7I9N6J30IUWhKvG83mi05szSNCbtLJ+FBXyIQBPwb3Mt8/RjYq3RDnQtkHv1HRobUBJSD60gPcRriHlkEnu3YSdAHwGhX7mIAfKpfgpStGINqqLhzuHTtrTifaQ26AN+G3MWWtd+WsXk6AZlFx0O+GbbYAhKmgWMRA/m3820wJ5Hvkvdgr57eHYA/HvL0aJLt8C/oLyI2x+k3n5+YiChvxzmJ7hofz9+0AGzXM5q/wMIn/SEUTfQGdhdowOoNCsj8PyIKTdFJubF0ku9AiI3bQfQ5lVpaIJOfyi5F6fRfwEnZ2xF65YgKT1zsh51YISU85GzhfbfX4m/70T0Ut3Pcm68/f2+pjP14pOztsw2+k5lP0YZZE0IdXYlO//KfzmI+yH1kUS5djDnuEq4vlIRqN6iKZ7XYJa7pW6OVuQFvAsQ2txAB2M51FFyUiNqEmkq7f/eTSBpdhS7UjFs23KlchT/Kv8+Btu+eg9+Xt8C/EckX2INnss8QRsoKXcZ/ntHxFNzW3BnJm3kuhamQ1NSKA9Rnk0gdWIURf3GY7Enq9xHX60gHa0Ri5BtPyvIFOy1DqLZUMGkRkex43AswR5932QKk7BngQUd/wdaSillP4aQOp0XC55E9JCTJ70x4neeecxwzO9hBagTwEwBdGaj0FOwaRr//0vpSW5NWLvqjUXv8ll7cg8T4rxmRhmoE3oskl6UMklX57NNsRk88kcHETx6XPRIij12jmU3RY3unISCpWFXX8V0QWAiZT1Ev7IU8flf6sLOc/+iOzyCym9KpBpnODh/vfErF3mUB2INFQTrhjG4EZoySGHne+TBaTquWQDuo61SA07C3uhEtfRyZZpzK44CrMWspHoAuB+w/V8mABZVMtucZHrv4jMqrGIKXgDckYvRoJ3JRJqqwvGqvxYiT0c/Cp+ohctqA+ELdI008NvVS0+hZvD73lEekgqxfWU/G+UulFXouKS26Aog01V7USkHFM5s2DcRHSnziTEQTcVEXmNaAKgCTUyNTkBz6e0TTQV9eALWxurUROWYD7aUR2+Y5BT8wxECntnfpyJzMZ3YN+Uv8bPOguEmKmWwUakLaWtvV5sTEQnzkmIgGNaWJOwd/HJIQfaWSSf6vlGJJHjqOwDyEv9QWSD7UU4xTQY81C470wUwptn+fx6otV1H4ccQzaO+gNEEwAuYcCfUpqD6xDsXv91iAcRxVM/ETk9Tde9AH9a5g7Y18F3qXwh15KRQXTPG5G6OR+VrzKFsN6A3Y6bz+b03iSRQebAFYhW7GIS5JDN+3XEjQ820kkUV18LT/5TCj7fhuxa00k9gDs9OYvMEJdEnagdnseiOTIJgJcorSrRQSgCYnsHC4gWxtwOuwbw+hLuezjakLA0+QIWkVD+fjmxHyq8GKi8A0hlNZ0sH8XsnV6JVKhytmHOoDju3qjt18MUf3ldyMv/CXTaj2Zzxt85Id8Lxh/YMoS5FWIFmhbnK8gUMi3QLOoR4EITfo1oDUVORBtzeOeZYsLqcuKfbJPQ+nEp1HJnhGfYBfExTObLLjHvOQwnYDYvc7gnnU1Eps+3UFbnHqTAfGhEG6HQ3u3BXvzxa5hjpddbvl8utKPKwyei02FPzAu7FbuK/N8h1zgdc4JPDjm9wgqvNKHEGJckoQF0+rsI2Jb8PUfpwDOH0sw2W5HWYGxAPgdX1uT9hAuANajuhU9si13r+A32tX4wW/IgAkJRRU2ICciOKXzAThR/DnuoDErQMdnbFxu+n2aMRZvQJADeRvEF24CduDMf+SuGz81WSO132aRdKNbtstjHopyBqKnVL1K63+Z4FAa0CbQ7cGvgsidmLWsZ/vssZpCgNTkDN2CupjUa+S6Kral5uPW8CEWpm6yfoZO88O+WDfu7QrQgNc8ktV8yfD/NaEBag+mFrKN4T/kBJPg6Dd/dEW2MQrtxEnJenYfdnuxCG+YKZFKY0Ixs7PMwJ0YVwxyKP2MU3Ito10ElqjAcgubFtpYDLSoMSRw4gyhzcrnhM6ORDy1szXQhk7i3yL/thoh0se+91IfeiNIs1xT8XR8SAGGYiD3N8uXSbqtiyGBWyQITKQwPo/JdYcKvAZGhZjDkszgf1Wqwed4Dm/lSlEthE7DTka8manHRZQwRrErF80gDCRLEimEyUu9t7L1+zHM/imSEwFNI2JqEj4k8NYCYg6tD/n06FRQAA2jR/puhF2TTAALKogkBiabakME8p4EaF4Yc8BOkyodhN8T/bkbq5QW4lfm6I//5Zyz3EOCNRPPm96N6+Z9nqFimDzzFEPegGDJIANj8GX3owApDO6XVLwjDWmS/9xs+czjmaNdzDEWJhuNlSphrHxJvIfKursv/fy9mDWASZgGwAak81QrTAgpsNxOeRZz3sM81ooKP30VcApeyT7cjD/JCh88GOBP7qdqDPPbvQCXbT0BkGpMZExXdiBewyvCZbbDf6ya0GcOQJZlmsIOIb9Ft+MwkJMTC1s4Cij//fIaKs8SCDwGQQ9lNt6KTazma7DBMxJy08DLVefoHMN17BvsJsxKd1qbT6iBEPLJxyfsRf+BDmBf/cGwFHIpZLX0U8TnehTzdz6BTyqT6tyKn1ZdROOsMpL3Y5mQjZq2o1eEanQxxT8JQkkPNgIcx74nRSICGYSMygwq1iAE074soYb/4au0VhGPuQieSSSJNwuwDCMI/1YggxBaGLPYFlkMm1SPI4Rd3QXYhzsHFmE/PYjgM89p4ClWceRj3dzUOhYwLG63mUAGTixEztNi1Mkg1N5GggvJeJmxCmmk34er2UZZrxMUa9Hxh+SztiFOSJXz9zEEaV1P+M7ORT2dDKTfm0+nRi06b6zC/jAmY7Z0XPd5TueEiAFziti+hVGDTqWFCN9IivooKRESFiRAzgGzaQr+PC05HTsVCWz2LKM7fR9l/xdZjK4qDTzJc+1XMNnaAVzCbl4dYfqcU3Ev4fDWhSIYpivMPZB6+iN7tZUR/B1ug3M09W5AJYHLYpEkDyKAFsSPytk5B6nE7Qxu5B6mXa5CqNtVyzUBdNT1jN7IbzyJeJuAfEC/A5D03wVQTv5fwsFQY2hCZKizefShwNbrn37G5ED0JsStNYeN5mD38AV5EwmJ7ip/E4xBN++f4X4N/N1wzg0yh7RhiWg7Hc8jnMwr5BBbjwdFabgEwBrvTqtIaQCMijRyPqrvshEyWdrSQm9FiDE6roBtRL1qEhdTgYnAt2vAoWtg7Ey1h5zZEFV0c4TvDYdNiopbLakWnm0nj3BsxRPdHz96K2JcnYSborGBL+zgMLyCb+RDC38GHEFEqioBzwRzMpJ8J6JB5OuTfc6gGoFekUQBUSgMYi9JGz0WJQS2494qLUtjBNfljA1Ibj8deojzAbagkeVzTIYBJTW5Beezj2Zz/YcJ65IfIES7MMkjYXcTQyRYUVTVhNjKZXE7DjfnPm8pm7YvCrH/D7zrsQb6TMNLPRCQAahbtKIXTlKXmokL7RBtazF/AnMHnc3wFd2bd7shutV2zG/gt/lpRH46ZgrsB+ReidJ45Bfdy765jParHH+Ug2x9pAmHXHEARLa9NNfL4NuZK0tei9V9VZb1c0IxUK1t++kD+c0nnATSjuOtFmBdDEqMDveijsJNXMtg70G5Eqdi7xp2MImjHnk7cgVpku/bQy6IDIAhblTr6kK8j6nM3Yk/QCVqD+e7wdCn2vgFXIl9TzaAVsdVew+3FLsVPXbYwjEUttu/B3h0myfE8ioPbhN2FmBfNc0iY+J6vm7Dn5K9Hqb+uVWiziDRk66jrMp6leGKUC07CnIzWj2oQxi3FVgx7IEqv7bk3II6Eq2BNNYKiCKZiF8XGo0hV872ot0Xlk5dQvjrzYWMAne62fPY9MKvjzyCV3fdcnYpbubJO5ME3ZbQVIovyGVyai4aNF/P3V0pjUJtmtR6d2D424hSkrbg+70akJXpr7lkJtCIV2/XkHy6Bf4/f/OzpiDbZHeN+khoLgTdj3ryNmP0TvhpNDMcE1PLNpb5AJ6ImuwqBRuRoi9rlOIdo0ntTugP7IOwNTpcTzk9wRTuax6jrrht1VU5UCCTVxbYF+DByrsUhpG5bHQAAD5NJREFUVmTRydjC0KYtFVeiUyNqAYVcfqxDXty/I+/8ffl7m4s83M1sznB02ZCBp3+u5fePQg7BsGs+ipiDPtGFknsmM8RSC0Mzipy0opPdFpPPIcr3SsQ6NAmOYOMvRIlGn0dmYqkx8GUoq9KU8DQaHWAP4hZmHI5GRH46H/dGo4Xf3RM5jP+Bnz1QFrSjzR/n5B8+OlA1mqiTNxwTEWvKtdbfeuQc/AN6efviFuqbhkKJP0bUz5WG3wy69Lrwz03Oo17ErU/KcToTxcVd2oEH0QHXKMfRmO3iPuB/UATBVbuIgj0tvz+IqlPFqUvZjByJpZaH34jmoCqiAy2ogITN2x9lvAq8n9K0lWkMFakwbfw1yDn4ObTpS9lU05Cz8Sa0CIZv4DW4d+j9cJHvF973lSSnzYGy5H6FmzmwHgkB24ZtRTkApipG80j2uVrReg0rUJvL32PU2pRZ5Mi2Vb52HZ2o1qNL2nfF0IZq/btUo406Xqa0hhMtyKdg2kQPo5jyLvhddONQgdNrkUr9AhIyF+B+Up5tuPdBdEIkuVFA/pjrcCudvgG1PA8TAlnkuLSV//4ByYeEt0UaW7GI0FziVdzZH7H2fDqaO4FrSKljsA2dZkls/kIhcCLxhcAbUErs8Ot2ocW6N/G9yjZkkfTeD9FQd434W5/GLLy+TnlqKG6DHFou/fk2oQVbTAjsijLZbO2zSsmGdEUmfz8/Yahz0ADy95xFdPV/F3SYJNHItAs5BqOWaEsUgbc/yX5twXgWZYbFWRSNqHtMUF01h0JobyUZ1pcvHIB5brtRE5ByFVHdFp3MLppAMZLStujktwmRxylfzfwg5XgftOlPzN9nVIfxNOQkTrKLcRfyS6RCCLQhJ1nUqrFxRw6Vdi6lJnoDCgnOILkT3weCUle2tmVrkae5nA6ibVHGnGtoazkygT6Om1OsHzFCkzZrfCGDYv0347/ZbJgQ+B5+WozHRhv+vP1RRh8qO7UTVeAVjYkGZEfeh93xtoBobcN8YXtUq883r2IAlZibWbYnKQ0ZZBp9F3vzUZ8jiA5sk/wjbolWdOqUQ+0Pk4A/oMY403k0Aq9D1YFtanIvUgeTKmJhw/b53/d56s1H5cjLnakaFxNQmXVbx6QkRieiDZf1/Qf03nKp/baHL2f7sHLgKHTyuzjaHkediyqpCUXxCdjGchSJcU1/rjQaEAdjDZXbBxtR45Cy+ATK4e2PKgQup3pOCxtORck9Lk6klahgSRo6KAUqsMmr77KQL8A9sajSyCDna7HIUrlHN/LJJKoJtKKWX5U++YePTShMloaNEBcNqNyTqw3ZicKaaXrmCeg0jKsKb0TFWKrFr/Mp3NiR5RQC15OQJjAKdZ9J2+YPxquoEk6avfrF0ICiET/AffOvBt5HOrWeRuAtKC+hg+hEmCXoPabZrGtBEYpK+b9MowtxL7zShgN6bxofuHA8g5xHaV48hWhH+ex34aY651ASzMdJv408CRX/uAO9lxW4+TQGkRPw3cTj3yeNdkTvLncRmSjDa3SgDS24tNj8tg3yMHKipT1+vCPwRbTYXZ/vFVQcpJoKRYxGVNr3IvPANSHreSQE0qTlNKNiJs9S+VoSLkLgO5RIGw4cfpX0cEYdA4iJ5bM8lk+MQrz+vxEtZvwq2kTlYsYlgSwSBq5C4EV02qbFJ3AqbhV90jIC2nAsslAbyuWvhpN/+OhH+dupoErmkUV5AL9Eoa4oi+hFRGGOUnk4rcigugaP4TYHK1EmaKWFwBsoX9FYn6MHuIGIQqAFeaTTEN4oZfyVdNiRo1Al4Dia1L+wlwyrRuyBuyawFjUGqZQQOJbq0oKLCYGf4mgOBN7+ajz5iz34D1wf3CMyaB53Rr3wolbBzaFF/zOqhw4bFRngCJQy6+IcfBmZA21lvMdmdPJXk9ofNjahuo3bYhCkrSixJ+3e/ihjNXK2lctxNgGp619CHV5cCmgMH/MQ3yLVxR88IIs6//wDNxbhfMonBJpR5eDZJJvZV86xEbiKkL4bzaST5ONjLEZJS0mZA1mUA/5epGrNJR4tths1pDiJ6gllloosUrEfwe2UDYRAkuZAUM3nX9TO5g/GJtSIdQvG4KnU1sk/fCxEdeV8MufGoSy8a9AptoL4quICRIP1WQW5WpABDsTdMbgICdukhMBRqHJTrW3+YHQjx+BmGub/Ek9drZYRVJXdmdLQjFT8qxDBZTWl8d+7gN+gDTBSTv1iyKAmHLYSYcFYC3wA/0LgSNLRMyLp0Y3KoP2/OXX/CHjoQUQwsaUQZxCRqAU586ajKjE34K/YaS869c+m+ujLSWJfZHe7HEYrUHQgatWeYmhAav8yh9+tlbEQVT4C5HGuZQ2gcNzGlo6QduRxn4UcU+chCTkbv+3DNqDqxJdQuRz+NCODVPCHcIsOBGShUvw7bcBp1Ia3P8pYjZz+gBb9SJF+naiAwwREVT0W0VT/jLrXlqLSm37zH/nfsTXZGOnIomKgD+Fmh89HNQSOQoVdt0O5Ei5zHHD7ffQqrLaxAjg3sKGa8hNxBbUffgLZeT9EKv5pmLvulIJuxEq8E3gAhfiqpsNLBRGUDb8KtfCyvZvV6ABblx8dyE+wEi304M/gvzvQmr8AJS3VItnKhqeBcwonthl1q/0WtVlqqxCDaIEEdr5vrEYaxY2owMdSpNLW4Y4M0pZ+hpsQGI4cErZdBSP4/6AZyUGktM5+wtiI6hlcP/wfmlEWVi2HBJMcLyHi0a7Itqw0h70WsCuldRIuNnKer1dNYwDVMwh1Pgf5/8tG8CS5jB6kbr4I/AJ5VH14pOvYHAFP4J+Up+R2LY8ORIqzHkxtKPd8SQpuOi1jACWFzEMdfb+LTKYpLhNaR0nIIP7Fg7gXFqmPzcdS5CzdLKvUtHDbENniS4zckNUaRCVejNT7+Shc9Cwyk+ooHzKom/DnKK1F3EjEEuTbux5pAf8P2yS2oioo32RkRAfWI0rqU4iosxQ1Plme/7Puwa8sMqil91nAf6KuxXWYsRJVzr4BOb4jowkx1srdAajcoyM/UTNQ5Z00laOqY3OMRjH/D6JT7R9IWNcqfz/u6EX+vNHxpnkIAU+gFuoEFBsDKOZcp+VWFzL5kc2PNiQY3oqyW3+CmqwsYeQwXYPRj5KmvJHOgnoBtZYssQFt/roHv7bRjhKOTgIuQ1yNSq+9pMZKHL39UdGK2FNLU/CQPsYqpPbXN//IQgbVGnyJyq9B32Mx8vYn1vK+FdEnq50s9BqKcFRLK6o6/CKDzNoopdnTPoLS8eM9zlNRtCAvrK/02HKPVYzs8GYdQitivtaCEFiNOnYnvvkDNAPvpPqEQNBQtH7y1wE6zM6hOst+B6MfRUTKWTQVkBB4P9UjBPpQ2yTfNn8mf81mFD6sk1SqDx+gOqNcXZRQNr3UFloDiBnXiaq5jIl7I2VAByqI+HkkCHxhPCpxfT7iS+yV//tehoqJ1FEaglLr0/JjPDr1ejz+xhMot+NgPMTNy4TlwGdRa/BcJW+kFdkfr1J5iVhsrEDNOXzX3RsHXMSWJ8cKVOH3nQn85kjDeBS6+xJwN2Jozka1K5IornIO6W7+GYxFaM+lRli1kk5z4DVUgiuJvO+T0YI0/XYi8dgRgimoucsLbJkJ2A38Cv/FPBqBd6Gkr0qv3bARJPaUzeHniibE006LJrAGnRxJ9AlsBC7GXkJsIVJb64iGDOqzYJrf1cD78C9g25AQMAn3So31iN6b2kaxaYkOdAFfIzlCREv++jb++QbUP6CuBUTDHsgmN81tDpkCSTR9CejvaSK9BfTe1FPWm4FzqRxtuAtlMCbN8DsP+yLdgGxYkwDIIFtuKrATUn3HIbOq2gVHBmlLo9CpNQo3u/0U9B5tAuBSkg1/pSU6sI5ktJ3EEDgGyx1fXU356L27A3dgLlIxH9jGcI0sKkd+HXrJA0h7+jMyXw6jejMTt0GFPD4IfA+4HfgR6kRlM8sOROqu6V0vBc4k+U3xfirLE3gFsW+rzqHcik7JcqUSB/TecnlGM6h67c9RB9vh97MEe4x2F+D3hAuR+cDbLddII/ZApdKKtUxbicKxJidWG/CnIt8NRgcqcmESrj5RKcbgyyjEnFqb34YW5FBJuu/AClSQMwmHnw1TUZWaLwN3odJVP0NpqSZ7LYNMJVtm2lxU794FeyI+wjmo5PlRxIuAtOWvdThqk30U7uzJMWgeTP6R+cAbMQu2vYA/snkEoAOVWf8Q6tpULjQj+ns5owOvAh+hBlirjaiyUFJCYB3afOVqAx6GoJXYDJRnYLN1m4GvYs9V34Tmz7RZmoBPo/Znr6FTdhk6QWaj+oWuWsTJKI9+PsqYeyV/nYeBNztc52TsHZX6UM6+zbzZHngb0uw+gUyibalMBmcrOswWkvzm70KmU2ri/KWiCUUHfJsD/cDXqQLPaBE0AF/ALgC60Iln2njnYs7Q7ATeYrkGwH9gdr4tRJ17TNe5ELfinV/Eza4tLPpRaQRZhEmatf1Ii0vD83pFMyLGLMZPdGAD8A2q10kG8nbb4s1rgUMJ33STgN9hntMccA/msOg4VH7bdJ1+VGnH5Hk/AxF1TM+0CtnV1ebbCPB+kokOrKTKvP1R0YKcGq9Q+kR9here/CB7+WLC56MHuBazyrsn8jvYhOqzmNugHYQbDfZPyMwJw2TgScP9dAO/pvpbcp2D+kL42vyLkLe/7Fl95UYLsm/iMgaXo01TtZ7RYRiPGJTfA/6KbO+lqELx17C3apuR/55NAMxBXZDDcABu7LffsWWH5eF4PeqHWGgKrEeC4TvAftTGKefLMbgIHYxV7/BzRTOK4UZlWq1Em78S3v6kMRa1wjocOA7YHzcnUDPiPnQSPm/9KFzZWvwS///792AWJJ1I83LxueyNTsmL0eI+hdrrx9eK7PVShMBKdPKPmM0foAnZi67RgQ1o8Y24iXLAtpj9APOQcLHhWIaaZw4fOeAvyDPvikak0jZRGyd+MQQVsl4m+ubvRzZ/zav9YQiyr2xCoB+4kuq3+ZNEA1qIN6Ja+QtQG+hvEC1zbHcUf+9A4bwVwOOoK09ixSZrAO8hWq3MLmT61apgdEYzUoEWUfwEW4eSPuqbv3zIoPdSjeHVSuJ9uGm0y1CeQc2F+uKiBQmBeQwJgRxSqy6mXrq7juqBKZU4h8hV55ECbarUkmA+MYC81HPRpl+AKsBch1TarordWR11REPQPHZPxNEoVPGXIFP218inVUcRtKGJG01dRaqjOtGKch1uR4VpOlGE5XTE/UgFRrzzoY46EkQDKlYShF57gI1I200F/g91uRizrj/j0QAAAABJRU5ErkJggg==',
          ),
        ),
      ),
      1 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => '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',
          ),
        ),
      ),
    ),
  ),
);
