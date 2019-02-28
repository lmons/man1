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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    // Dashlet Categories
    'LBL_CHARTS' => 'Graphiques',
    'LBL_DEFAULT' => 'Vues',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié afin de supprimer le compte.',
    'LBL_ACCOUNT_INFORMATION' => 'Vue d\'ensemble', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_ACCOUNT_NAME' => 'Nom du compte :',
    'LBL_ACCOUNT' => 'Compte :',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités à Réaliser',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ANNUAL_REVENUE' => 'Revenu annuel :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ANY_PHONE' => 'Tous les téléphones :',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur assigné :',
    'LBL_BILLING_ADDRESS_CITY' => 'Facturation - Ville :',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Facturation - Pays :',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Facturation - Code Postal :',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturation - Région :',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Facturation - Rue 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Facturation - Rue 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Facturation - Rue 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Facturation - Rue :',
    'LBL_BILLING_ADDRESS' => 'Facturation - Adresse :',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CAMPAIGN_ID' => 'Campagne (ID)',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_CITY' => 'Ville :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_DATE_ENTERED' => 'Date de création :',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_DESCRIPTION_INFORMATION' => 'Description',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DUPLICATE' => 'Doublon possible avec le(s) Compte(s)',
    'LBL_EMAIL' => 'Adresse E-mail :',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out :',
    'LBL_EMAIL_ADDRESSES' => 'Adresse(s) E-mail',
    'LBL_EMPLOYEES' => 'Employés :',
    'LBL_FAX' => 'Fax :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique et Activités terminées',
    'LBL_HOMEPAGE_TITLE' => 'Mes Comptes',
    'LBL_INDUSTRY' => 'Activité :',
    'LBL_INVALID_EMAIL' => 'E-mail invalide :',
    'LBL_INVITEE' => 'Contacts',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse E-mail',
    'LBL_LIST_FORM_TITLE' => 'Liste des Comptes',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_STATE' => 'Région',
    'LBL_MEMBER_OF' => 'Membre de :',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Compte(s) rattaché(s)',
    'LBL_MODULE_NAME' => 'Comptes',
    'LBL_MODULE_TITLE' => 'Comptes : Accueil',
    'LBL_MODULE_ID' => 'Comptes',
    'LBL_NAME' => 'Nom :',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Compte',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Autre téléphone :',
    'LBL_OWNERSHIP' => 'Propriétaire :',
    'LBL_PARENT_ACCOUNT_ID' => 'Rattaché à (ID)',
    'LBL_PHONE_ALT' => 'Téléphone Alternatif :',
    'LBL_PHONE_FAX' => 'Fax :',
    'LBL_PHONE_OFFICE' => 'Téléphone de l&#39;accueil :',
    'LBL_PHONE' => 'Téléphone :',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_PRODUCTS_TITLE' => 'Produits',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copier vers les Contacts',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copier...',
    'LBL_RATING' => 'Classement :',
    'LBL_SAVE_ACCOUNT' => 'Sauvegarder le compte',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche de Compte',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Livraison - Ville :',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Livraison - Pays :',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Livraison - Code Postal :',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Livraison - Région :',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Livraison - Rue 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Livraison - Rue 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Livraison - Rue 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Livraison - Rue :',
    'LBL_SHIPPING_ADDRESS' => 'Livraison - Adresse :',
    'LBL_SIC_CODE' => 'Code APE :',
    'LBL_STATE' => 'État ou région :', //For address fields
    'LBL_TICKER_SYMBOL' => 'Symbole Tycker :',
    'LBL_TYPE' => 'Type :',
    'LBL_WEBSITE' => 'Site Web :',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LNK_ACCOUNT_LIST' => 'Voir comptes',
    'LNK_NEW_ACCOUNT' => 'Créer Compte',
    'LNK_IMPORT_ACCOUNTS' => 'Import Comptes',
    'MSG_DUPLICATE' => 'Créer ce Compte est une source de doublon potentielle. Vous pouvez soit sélectionner un compte dans la liste ci dessous ou cliquer sur "Sauvegarder" pour poursuivre la création de la fiche compte avec les données saisies.',
    'MSG_SHOW_DUPLICATES' => 'Le compte que vous allez créer pourrait être un doublon d\'un enregistrement existant. Les comptes existants avec des noms similaires sont listés ci-dessous.<br>Cliquez sur Sauvegarder pour valider la création d\'un nouveau compte, ou sur Annulation pour revenir au module sans créer de compte.',
    'LBL_ASSIGNED_USER_NAME' => 'Assigné à :',
    'LBL_PROSPECT_LIST' => 'Liste de cibles',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    //For export labels
    'LBL_PARENT_ID' => 'Parent (ID)',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Produits et services achetés',

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_INVOICES' => 'Factures',
    'LBL_AOS_QUOTES' => 'Devis',
);

