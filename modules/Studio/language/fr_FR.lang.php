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
    'LBL_EDIT_LAYOUT' => 'Editer la mise en page',
    'LBL_EDIT_FIELDS' => 'Editer les champs personnalisés',
    'LBL_SELECT_FILE' => 'Selectionner un fichier',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Boîte à outils',
    'LBL_SUGAR_FIELDS_STAGE' => 'Champs SuiteCRM (cliquer sur les éléments à ajouter dans la zone de dépôt)',
    'LBL_VIEW_SUGAR_FIELDS' => 'Voir les champs SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Echec de la sauvegarde',
    'LBL_CONFIRM_UNSAVE' => 'Toutes les modifications seront perdues. Etes-vous sûr(e) de vouloir continuer ?',
    'LBL_PUBLISHING' => 'Publication ...',
    'LBL_PUBLISHED' => 'Publié',
    'LBL_FAILED_PUBLISHED' => 'Echec de publication',
    'LBL_DROP_HERE' => '[Glisser ici]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nom',
    'LBL_LABEL' => 'Libellé',
    'LBL_MASS_UPDATE' => 'Mise à jour de Masse',
    'LBL_DEFAULT_VALUE' => 'Valeur par défaut',
    'LBL_REQUIRED' => 'Obligatoire',
    'LBL_DATA_TYPE' => 'Type',


    'LBL_HISTORY' => 'Historique',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Bienvenue à Studio!</h2><br> Que souhaitez-vous faire ?<br><b> Merci de choisir une option ci-dessous.</b>',
    'LBL_SW_EDIT_MODULE' => 'Editer un Module',
    'LBL_SW_EDIT_DROPDOWNS' => 'Editer une Liste déroulante',
    'LBL_SW_EDIT_TABS' => 'Configurer les Onglets',
    'LBL_SW_RENAME_TABS' => 'Renommer les Onglets',
    'LBL_SW_EDIT_GROUPTABS' => 'Configurer les Groupes d&#39;onglets',
    'LBL_SW_EDIT_PORTAL' => 'Editer le Portail',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Réparer les champs personnalisés',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrer les champs personnalisés',

//Manager Backups History
    'LBL_MB_DELETE' => 'Supprimer',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Créer une Liste déroulante',
    'LBL_DROPDOWN_NAME' => 'Nom de la liste déroulante :',
    'LBL_DROPDOWN_LANGUAGE' => 'Langue de la liste déroulante :',
    'LBL_TABGROUP_LANGUAGE' => 'Langue :',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Valeur à afficher',
    'LBL_DD_DATABASEVALUE' => 'Valeur dans la base de données',
    'LBL_DD_ALL' => 'Tout',

//BUTTONS
    'LBL_BTN_SAVE' => 'Sauvegarder',
    'LBL_BTN_CANCEL' => 'Annuler',
    'LBL_BTN_SAVEPUBLISH' => 'Sauvegarder & Publier',
    'LBL_BTN_HISTORY' => 'Historique',
    'LBL_BTN_ADDROWS' => 'Ajouter des Lignes',
    'LBL_BTN_UNDO' => 'Annuler',
    'LBL_BTN_REDO' => 'Réappliquer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Ajouter Champ personnalisé',
    'LBL_BTN_TABINDEX' => 'Editer l&#39;ordre des onglets',

//TABS
    'LBL_MODULES' => 'Modules',
    'LBL_MODULE_NAME' => 'Administration',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configurer les groupes d&#39;onglets',
    'LBL_GROUP_TAB_WELCOME' => 'La mise en page de groupe d&#39;onglets sera utilisé quand un utilisateur choisira d&#39;utiliser l&#39;option Onglets Groupés dans Mon Compte > Options de Mise en page. Le groupe VIDE n&#39;est pas affiché dans la barre de navigation.',
    'LBL_RENAME_TAB_WELCOME' => 'Cliquer sur chaque onglets Valeur Affichée dans la table ci-dessous pour renommer l&#39;onglet.',
    'LBL_DELETE_MODULE' => 'Supprimer&nbsp;le&nbsp;Module<br />Du&nbsp;Groupe',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Pour modifier les libellés dans Groupes d&#39;onglets dans d&#39;autres langues, veuillez choisir une langue, modifier le libellé et cliquer sur "Sauvegarder et déployer".',
    'LBL_ADD_GROUP' => 'Ajouter un Groupe',
    'LBL_NEW_GROUP' => 'Nouveau Groupe',
    'LBL_RENAME_TABS' => 'Renommer les Onglets',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Valeur de la clé invalide : [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Sauvegarder' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Annuler' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Réappliquer' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Edition à la volée' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Ajouter champ' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximiser' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimiser' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publier' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Ajouter des lignes' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Ajouter champ' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Éditer' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Sélectionner la langue a éditer.',
    'LBL_SINGULAR' => 'Nom du module au singulier',
    'LBL_PLURAL' => 'Nom du module au pluriel',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Cliquer sur <b>Sauvegarder</b> pour appliquer les changements.'

);
