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
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
    'LBL_ACCOUNT_ID' => 'Compte (ID) :',
    'LBL_ACCOUNT_NAME' => 'Nom du compte :',
    'LBL_CAMPAIGN' => 'Campagne :',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités à réaliser',
    'LBL_ADD_BUSINESSCARD' => 'Saisir une carte de visite',
    'LBL_ADDMORE_BUSINESSCARD' => 'Ajouter une autre carte de visite',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville :',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays :',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse secondaire - Code Postal :',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - Région :',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresse secondaire - Rue 2 :',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresse secondaire - Rue 3 :',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue 1 :',
    'LBL_ALTERNATE_ADDRESS' => 'Autres adresses :',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ANY_PHONE' => 'Tous les téléphones :',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à:',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur assigné',
    'LBL_ASSISTANT_PHONE' => 'Assistant - Tél :',
    'LBL_ASSISTANT' => 'Assistant :',
    'LBL_BIRTHDATE' => 'Anniversaire :',
    'LBL_BUSINESSCARD' => 'Carte de visite',
    'LBL_CITY' => 'Ville :',
    'LBL_CAMPAIGN_ID' => 'Campagne (ID)',
    'LBL_CONTACT_INFORMATION' => 'Vue d\'ensemble',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Nom du contact :',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contact-Affaire :',
    'LBL_CONTACT_ROLE' => 'Rôle :',
    'LBL_CONTACT' => 'Contact :',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte créé',
    'LBL_CREATED_CALL' => 'Nouvel Appel créé',
    'LBL_CREATED_CONTACT' => 'Nouveau Contact créé',
    'LBL_CREATED_MEETING' => 'Nouvelle Réunion créée',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Affaire créée',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEPARTMENT' => 'Service :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Rapports directs',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler :',
    'LBL_DUPLICATE' => 'Doublons de Contacts Possible',
    'LBL_EMAIL_ADDRESS' => 'Adresse E-mail :',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out :',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilisé',
    'LBL_EXISTING_CONTACT' => 'Contact existant utilisé',
    'LBL_EXISTING_OPPORTUNITY' => 'Affaire existante utilisée',
    'LBL_FAX_PHONE' => 'Fax :',
    'LBL_FIRST_NAME' => 'Prénom :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique et Activités terminées',
    'LBL_HOME_PHONE' => 'Téléphone (domicile) :',
    'LBL_ID' => 'ID :',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Créer automatiquement un nouveau contact en important une carte de Visite de votre fichier système.',
    'LBL_INVALID_EMAIL' => 'E-mail invalide :',
    'LBL_INVITEE' => 'Rapports directs',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_LEAD_SOURCE' => 'Origine du prospect :',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_CONTACT_ROLE' => 'Rôle',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Prénom',
    'LBL_LIST_FORM_TITLE' => 'Liste des Contacts',
    'LBL_LIST_LAST_NAME' => 'Nom',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_MOBILE_PHONE' => 'Téléphone mobile :',
    'LBL_MODIFIED' => 'Modifié par :',
    'LBL_MODULE_NAME' => 'Contacts',
    'LBL_MODULE_TITLE' => 'Contacts',
    'LBL_NAME' => 'Nom :',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Contact',
    'LBL_NOTE_SUBJECT' => 'Objet de la Note',
    'LBL_OFFICE_PHONE' => 'Téléphone de l&#39;accueil :',
    'LBL_OPP_NAME' => 'Nom Affaire :',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Rôle pour cette Affaire (ID) :',
    'LBL_OPPORTUNITY_ROLE' => 'Rôle pour cette Affaire',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Autre téléphone :',
    'LBL_PHONE' => 'Téléphone :',
    'LBL_PORTAL_APP' => 'Demande de Portail :',
    'LBL_PORTAL_INFORMATION' => 'Information sur le Portail',
    'LBL_PORTAL_NAME' => 'Nom sur le portail :',
    'LBL_STREET' => 'Rue',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ville (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Code postal (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Région (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rue 2 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rue 3 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rue (adresse principale) :',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',
    'LBL_PRODUCTS_TITLE' => 'Produits',
    'LBL_REPORTS_TO_ID' => 'Rend compte à (ID) :',
    'LBL_REPORTS_TO' => 'Rend compte à :',
    'LBL_RESOURCE_NAME' => 'Nom de la Resource',
    'LBL_SALUTATION' => 'Titre :',
    'LBL_SAVE_CONTACT' => 'Sauvegarder le Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Utiliser Contacts sélectionnés',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Utiliser Contacts sélectionnés',
    'LBL_STATE' => 'État ou région :', //For address fields
    'LBL_SYNC_CONTACT' => 'Synchroniser pour Outlook&reg; :',
    'LBL_PROSPECT_LIST' => 'Liste de cibles',
    'LBL_TITLE' => 'Fonction :',
    'LNK_CONTACT_LIST' => 'Contacts',
    'LNK_IMPORT_VCARD' => 'Insérer une vCard',
    'LNK_NEW_ACCOUNT' => 'Créer Compte',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_CASE' => 'Créer Ticket',
    'LNK_NEW_CONTACT' => 'Créer Contact',
    'LNK_NEW_EMAIL' => 'Archiver E-mail',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_NOTE' => 'Créer Note',
    'LNK_NEW_OPPORTUNITY' => 'Créer une Affaire',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_SELECT_ACCOUNT' => "Sélectionner Compte",
    'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Créer une Affaire nécessite un Compte associé.<br /> Merci de le créer ou de le sélectionner.',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer ce contact pour ce ticket?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copie de l&#39;adresse principale',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copie de l&#39;adresse secondaire',

    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECTS_RESOURCES' => 'Ressources projet',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_STATE' => 'Région',
    'LBL_HOMEPAGE_TITLE' => 'Mes Contacts',
    'LBL_OPPORTUNITIES' => 'Affaires',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LNK_IMPORT_CONTACTS' => 'Importer des contacts',

    // SNIP
    'LBL_USER_SYNC' => 'Synchro utilisateur',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Évènements',

    'LBL_AOP_CASE_UPDATES' => 'Mises à jour du cas',
    'LBL_CREATE_PORTAL_USER' => 'Créer le portail utilisateur',
    'LBL_ENABLE_PORTAL_USER' => 'Activer le portail utilisateur',
    'LBL_DISABLE_PORTAL_USER' => 'Désactiver le portail utilisateur',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Échec de la création du portail utilisateur',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Échec de l\'activation du portail utilisateur',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Échec de la désactivation du portail utilisateur',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portail utilisateur créée',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portail utilisateur activé',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portail utilisateur désactivé',
    'LBL_NO_JOOMLA_URL' => 'Pas d\'URL spécifiée pour le portail',
    'LBL_PORTAL_USER_TYPE' => 'Type de portail utilisateur',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Compte désactivé',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID de compte Joomla',

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_INVOICES' => 'Factures',
    'LBL_AOS_QUOTES' => 'Devis',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Contacts du projet depuis le nom du projet',
);

