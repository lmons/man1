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

    'LBL_ADMINISTRATION_MAIN' => 'Paramètres du Connecteur',
    'LBL_AVAILABLE' => 'Disponible',
    'LBL_BACK' => '< Retour',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Un ou des champs obligatoires ont été laissé vide.  Réalisez les changements ?',
    'LBL_CONNECTOR_FIELDS' => 'Champs du Connecteur',
    'LBL_DATA' => 'Donnée',
    'LBL_DEFAULT' => 'Défaut',
    'LBL_DISABLED' => 'Désactivé',
    'LBL_ENABLED' => 'Activé',
    'LBL_EXTERNAL' => 'Autoriser les utilisateurs à créer des liens externes pour ce connecteur. Pour utiliser ce connecteur, les propriétés devraient aussi être définies dans la rubrique de définition des propriétés du connecteur',
    'LBL_EXTERNAL_SET_PROPERTIES' => 'Afin de pouvoir utiliser ce connecteur, vous devez positionner les paramètres dans la page appropriée.',
    'LBL_MERGE' => 'Fusionner',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Activer les connecteurs',
    'LBL_MODIFY_DISPLAY_DESC' => 'Sélectionner les modules disponibles pour chaque connecteur.',
    'LBL_MODULE_FIELDS' => 'Champs du module',
    'LBL_MODIFY_MAPPING_TITLE' => 'Correspondance des champs pour le Connecteur',
    'LBL_MODIFY_MAPPING_DESC' => 'Correspondance des champs du Connecteur avec les champs du module afin de déterminer quelles données du Connecteur peuvent être visualisées et fusionnées avec les données du module.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Positionner les Paramètres du Connecteur',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Configurer les Propriétés pour chacun des Connecteurs, incluant les URLs et les clés des APIs.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Gérer la recherche du Connecteur',
    'LBL_MODIFY_SEARCH' => 'Recherche',
    'LBL_MODIFY_SEARCH_DESC' => 'Sélectionner les champs du connecteur a utilisé pour la recherche des données pour chacun des modules.',
    'LBL_MODULE_NAME' => 'Connecteurs',
    'LBL_NO_PROPERTIES' => 'Il n&#39;y a pas de paramètres de configuration pour ce conencteur.',
    'LBL_SAVE' => 'Sauvegarder',
    'LBL_SUMMARY' => 'Résumé',
    'LBL_STEP1' => 'Rechercher et voir les données',
    'LBL_STEP2' => 'Fusionner les enregistrements avec',
    'LBL_TEST_SOURCE' => 'Tester le  Connecteur',
    'LBL_TEST_SOURCE_FAILED' => 'Test échoué',
    'LBL_TEST_SOURCE_SUCCESS' => 'Test réussi',
    'LBL_TITLE' => 'Fusion des données',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Erreur : Aucun détail supplémentaire n&#39;a été retrouvé pour l&#39;enregistrement.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Aucun module n&#39;a été activé pour ce connecteur. Sélectionnez un module pour ce connecteur dans la page des Connecteurs actifs.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Erreur : Il n&#39;y a pas de connecteur activé qui possède des champs de recherche définis.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Erreur : Il n&#39;y a pas de champ de recherche défini pour ce module et ce connecteur. Veuillez contacter votre administrateur système.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Erreur : Il n&#39;y a pas de champ de module défini pour afficher les résultats. Veuillez contacter votre administrateur système.',
    'LBL_INFO_INLINE' => 'Info' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Fermer' /*for 508 compliance fix*/,

);
