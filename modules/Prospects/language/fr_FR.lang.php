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
    'LBL_MODULE_NAME' => 'Cibles',
    'LBL_MODULE_ID' => 'Cibles',
    'LBL_INVITEE' => 'Rapports directs',
    'LBL_MODULE_TITLE' => 'Cibles : Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche cible',
    'LBL_LIST_FORM_TITLE' => 'Liste des cibles',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle cible',
    'LBL_BUSINESSCARD' => 'Carte de Visite',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_LAST_NAME' => 'Nom',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_FIRST_NAME' => 'Prénom',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ASSIGNED_TO_ID' => 'Assigné à :',
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilisé',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte créé',
    'LBL_CREATED_CALL' => 'Nouvel Appel créé',
    'LBL_CREATED_MEETING' => 'Nouvelle Réunion créée',
    'LBL_ADDMORE_BUSINESSCARD' => 'Ajouter une autre Carte de Visite',
    'LBL_ADD_BUSINESSCARD' => 'Saisir une Carte de Visite',
    'LBL_NAME' => 'Nom :',
    'LBL_PROSPECT_INFORMATION' => 'Vue d\'ensemble', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MORE_INFORMATION' => 'Plus d&#39;Informations',
    'LBL_FIRST_NAME' => 'Prénom :',
    'LBL_OFFICE_PHONE' => 'Téléphone de l&#39;accueil :',
    'LBL_ANY_PHONE' => 'Tous les téléphones :',
    'LBL_PHONE' => 'Téléphone :',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_MOBILE_PHONE' => 'Téléphone mobile :',
    'LBL_HOME_PHONE' => 'Téléphone (domicile) :',
    'LBL_OTHER_PHONE' => 'Autre téléphone :',
    'LBL_FAX_PHONE' => 'Fax :',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rue (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ville (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Région (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Code postal (adresse principale) :',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue 1 :',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville :',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays :',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - Région :',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse secondaire - Code Postal :',
    'LBL_TITLE' => 'Fonction :',
    'LBL_DEPARTMENT' => 'Service :',
    'LBL_BIRTHDATE' => 'Anniversaire :',
    'LBL_EMAIL_ADDRESS' => 'Adresse E-mail :',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ASSISTANT' => 'Assistant :',
    'LBL_ASSISTANT_PHONE' => 'Assistant - Tél :',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler :',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out :',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',
    'LBL_ALTERNATE_ADDRESS' => 'Autres adresses :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_CITY' => 'Ville :',
    'LBL_STATE' => 'État ou région :', //For address fields
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_OPP_NAME' => 'Nom Affaire :',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Créer automatiquement un nouveau contact en important une carte de Visite de votre fichier système.',
    'LBL_DUPLICATE' => 'Doublon possible sur les Cibles',
    'MSG_SHOW_DUPLICATES' => 'La création de ce Contact peut entraîner la création d\'un doublon. Vous pouvez continuer pour créer ce Contact avec les données renseignées ou cliquer sur "Annuler".',
    'MSG_DUPLICATE' => 'Duplication de contact possible. Sélectionnez un contact dans la liste ci-dessous ou cliquez sur "Sauvegarder" pour poursuivre la création d\'un nouveau contact avec les données saisies.',
    'LNK_IMPORT_VCARD' => 'Insérer une vCard',
    'LNK_NEW_ACCOUNT' => 'Créer Compte',
    'LNK_NEW_OPPORTUNITY' => 'Créer une Affaire',
    'LNK_NEW_CASE' => 'Créer Ticket',
    'LNK_NEW_NOTE' => 'Créer Note',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_EMAIL' => 'Archiver E-mail',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_IMPORT_PROSPECTS' => 'Importer des cibles',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer ce contact pour ce ticket?',
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
    'LBL_SALUTATION' => 'Civilité',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Affaire créée',
    'LNK_SELECT_ACCOUNT' => "Sélectionner Compte",
    'LNK_NEW_PROSPECT' => 'Créer la cible',
    'LNK_PROSPECT_LIST' => 'Voir Cibles',
    'LNK_NEW_CAMPAIGN' => 'Créer Campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LNK_NEW_PROSPECT_LIST' => 'Nouvelle Liste de Cibles',
    'LNK_PROSPECT_LIST_LIST' => 'Listes de Cibles',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Utiliser les cibles sélectionnés',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Utiliser les cibles sélectionnés',
    'LBL_INVALID_EMAIL' => 'E-mail invalide :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cibles',
    'LBL_PROSPECT_LIST' => 'Liste de cibles',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convertir la cible',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convertir la cible',
    'LNK_NEW_CONTACT' => 'Nouveau Contact',
    'LBL_CREATED_CONTACT' => "Nouveau Contact créé",
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Logs des Campagnes',
    'LBL_TRACKER_KEY' => 'Clé de tracking',
    'LBL_LEAD_ID' => 'Prospect ID',
    'LBL_CONVERTED_LEAD' => 'Prospect converti',
    'LBL_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nom du compte :',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Évènements',
);
