<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Accueil',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Contact',
    'LBL_FIRST_NAME' => 'Prénom :',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_LIST_LAST_NAME' => 'Nom',
    'LBL_PHONE' => 'Téléphone :',
    'LBL_EMAIL_ADDRESS' => 'Adresse E-mail :',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mon Portefeuille',
    'LBL_PIPELINE_FORM_TITLE' => 'Mon Portefeuille',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Portefeuille par phase de vente',
    'LNK_NEW_CONTACT' => 'Créer Contact',
    'LNK_NEW_ACCOUNT' => 'Créer Compte',
    'LNK_NEW_OPPORTUNITY' => 'Créer Affaire',
    'LNK_NEW_LEAD' => 'Créer un prospect',
    'LNK_NEW_CASE' => 'Créer Ticket',
    'LNK_NEW_NOTE' => 'Créer Note',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_EMAIL' => 'Archiver E-mail',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_NEW_BUG' => 'Signaler Bug',
    'LBL_ADD_BUSINESSCARD' => 'Créer Carte de Visite',
    'LNK_NEW_SEND_EMAIL' => 'Rédiger E-mail',
    'LBL_NO_ACCESS' => 'Vous n&#39;avez pas accès à cet espace. Veuillez contacter votre administrateur pour en connaître la raison.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Pas de résultats --',
    'LBL_NO_RESULTS' => '<h2>Aucun résultat trouvé. Veuillez effectuer une nouvelle recherche.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Aide à la recherche :</h3><ul><li>Assurez vous d&#39;avoir sélectionnées les catégories appropriées ci-dessus.</li><li>Élargissez vos critères de recherche.</li><li>Si vous ne trouvez aucun résultat, essayez la recherche avancée du module.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Ajouter des Dashlets',
    'LBL_WEBSITE_TITLE' => 'Site web',
    'LBL_RSS_TITLE' => 'News RSS',
    'LBL_CLOSE_DASHLETS' => 'Fermer',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Aujourd&#39;hui',
    'LBL_YESTERDAY' => 'Hier',
    'LBL_TOMORROW' => 'Demain',
    'LBL_NEXT_WEEK' => 'La semaine prochaine',
    'LBL_LAST_7_DAYS' => 'Dans les 7 derniers jours',
    'LBL_NEXT_7_DAYS' => 'Dans les 7 prochains jours',
    'LBL_LAST_MONTH' => 'Le mois dernier',
    'LBL_NEXT_MONTH' => 'Le mois prochain',
    'LBL_LAST_YEAR' => 'L&#39;année dernière',
    'LBL_NEXT_YEAR' => 'L&#39;année prochaine',
    'LBL_LAST_30_DAYS' => 'Dans les 30 derniers jours',
    'LBL_NEXT_30_DAYS' => 'Dans les 30 prochains jours',
    'LBL_THIS_MONTH' => 'Ce Mois-ci',
    'LBL_THIS_YEAR' => 'Cette Année',

    'LBL_MODULES' => 'Modules',
    'LBL_CHARTS' => 'Graphiques',
    'LBL_TOOLS' => 'Outils',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Résultats de la Recherche',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Vue Modules',
        'Portal' => 'Portail',
        'Charts' => 'Graphiques',
        'Tools' => 'Outils',
        'Miscellaneous' => 'Divers'
    ),
    'LBL_ADDING_DASHLET' => 'Ajout de Dashlet ...',
    'LBL_ADDED_DASHLET' => 'Dashlet ajouté',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Etes-vous certain de vouloir supprimer le Dashlet ?',
    'LBL_REMOVING_DASHLET' => 'Suppression du Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'Dashlet supprimé',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Général',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtres',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Mes Eléments seulement',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titre',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Afficher les lignes',

    'LBL_DASHLET_DELETE' => 'Supprimer le Dashlet',
    'LBL_DASHLET_REFRESH' => 'Rafraîchir le Dashlet',
    'LBL_DASHLET_EDIT' => 'Editer le Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Mon CRM',
    'LBL_CLOSE_SITEMAP' => 'Fermer',

    'LBL_SEARCH' => 'Rechercher',
    'LBL_CLEAR' => 'Effacer',

    'LBL_BASIC_CHARTS' => 'Graphique basique',

    'LBL_DASHLET_SEARCH' => 'Recherche de Dashlets',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'version de construction',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - fournisseurs de la plateforme CE',

    'LBL_DASHLET_TITLE' => 'Mes sites',
    'LBL_DASHLET_OPT_TITLE' => 'Titre',
    'LBL_DASHLET_INCORRECT_URL' => 'URL incorrecte',
    'LBL_DASHLET_OPT_URL' => 'URL',
    'LBL_DASHLET_OPT_HEIGHT' => 'Hauteur du Dashlet (en pixels)',
    'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM Actualités',
    'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Découvrir SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Filtre rapide' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Filtre avancé' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Icône Accueil',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Retour rapide à l\'accueil du tableau de bord en un seul clic.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Tous vos modules importants sont ici.',
    'LBL_TOUR_MORE' => 'Plus de modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Le reste des modules est ici.',
    'LBL_TOUR_SEARCH' => 'Recherche en plein texte (Full Text)',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Les recherches précises fournissent de meilleurs résultats.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notifications de SuiteCRM iraient ici.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Profil, reglages et deconnexion.',
    'LBL_TOUR_QUICKCREATE' => 'Création rapide',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Créer rapidement des documents sans changer d\'ecran.',
    'LBL_TOUR_FOOTER' => 'Pied de page dépliable. ',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Déplier ou replier le pied de page facilement.',
    'LBL_TOUR_CUSTOM' => 'Applications personnalisées',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Les intégrations personnalisées se trouveront ici.',
    'LBL_TOUR_BRAND' => 'Votre marque',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Votre logo se place ici.Survolez avec la souris pour plus d\'informations.',
    'LBL_TOUR_WELCOME' => 'Bienvenue dans SuiteCRM',
    'LBL_TOUR_WATCH' => 'Regardez les nouveautés de SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nouvelle barre de navigation</li><li class="icon-ok">Nouveau pied de page dépliable</li><li class="icon-ok">Recherche améliorée</li><li class="icon-ok">Nouveau menu actions</li></ul><p>et beaucoup plus !</p>',
    'LBL_TOUR_VISIT' => 'Pour plus d\'informations, merci de visiter notre application.',
    'LBL_TOUR_DONE' => 'C\'est fait !',
    'LBL_TOUR_REFERENCE_1' => 'Vous pouvez toujours faire référence à notre',
    'LBL_TOUR_REFERENCE_2' => 'à l\'aide du "Lien Support" dans l\'onglet profil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Voulez-vous partager votre calendrier SuiteCRM avec d\'autres applications, tels que Microsoft Outlook ou Exchange? Si oui, vous avez une nouvelle URL, plus sécurisé, qui comprend une clé personnelle pour éviter la publication non autorisée de votre calendrier.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Récupérer votre nouvelle URL de calendrier partagé.',
    'LBL_CONTRIBUTORS' => 'Contributeurs',
    'LBL_ABOUT_SUITE' => 'A propos de SuiteCRM',
    'LBL_PARTNERS' => 'Partenaires',
    'LBL_FEATURING' => 'Modules AOS, AOW, AOR, AOP, AOE et replanification par SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - CRM Open Source pour le monde',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite par Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps par Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'Logo SuiteCRM fourni par Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution à la version 7.3 de SuiteCRM par ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Au sujet des traductions SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Traduction collaborative par la communauté de SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Traductions créées à l’aide de Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM est publié sous une licence Open Source - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Tout le code de SuiteCRM, géré et développé par ce projet, seras publié sous licence Open Source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'L\'assistance sur SuiteCRM est disponible gratuitement ou par des options payantes',

    'LBL_SUITE_PARTNERS' => 'Nous avons des partenaires loyaux et passionnés d\'Open Source. Retrouvez la liste complète de ces partenaires sur notre site internet.',

    'LBL_SAVE_BUTTON' => 'Sauvegarder',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_APPLY_BUTTON' => 'Appliquer',
    'LBL_SEND_INVITES' => 'Envoyer Invitations',
    'LBL_CANCEL_BUTTON' => 'Annuler',
    'LBL_CLOSE_BUTTON' => 'Fermer',

    'LBL_CREATE_NEW_RECORD' => 'Créer une activité',
    'LBL_CREATE_CALL' => 'Planifier un Appel',
    'LBL_CREATE_MEETING' => 'Planifier une Réunion',

    'LBL_GENERAL_TAB' => 'Détails',
    'LBL_PARTICIPANTS_TAB' => 'Participants',
    'LBL_REPEAT_TAB' => 'Récurrence',

    'LBL_REPEAT_TYPE' => 'Répéter',
    'LBL_REPEAT_INTERVAL' => 'Intervalle',
    'LBL_REPEAT_END' => 'Fin',
    'LBL_REPEAT_END_AFTER' => 'Après le',
    'LBL_REPEAT_OCCURRENCES' => 'occurrences',
    'LBL_REPEAT_END_BY' => 'Le',
    'LBL_REPEAT_DOW' => 'Le',
    'LBL_REPEAT_UNTIL' => 'Répéter jusqu&#39;à',
    'LBL_REPEAT_COUNT' => 'Nombre d’occurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Votre requête allait créer plus de $limit meetings.',
);
