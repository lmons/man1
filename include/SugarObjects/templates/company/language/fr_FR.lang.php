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
    'ERR_DELETE_RECORD' => 'Un identifiant d&#39;enregistrement doit être spécifié pour toute suppression.',
    'LBL_ACCOUNT_NAME' => 'Nom de la Société :',
    'LBL_ACCOUNT' => 'Société :',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ADDRESS_INFORMATION' => 'Information de l&#39;adresse',
    'LBL_ANNUAL_REVENUE' => 'Revenu annuel :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_EMAIL_NON_PRIMARY' => 'E-mail(s) secondaire(s)',
    'LBL_ANY_PHONE' => 'Tous les téléphones :',
    'LBL_ASSIGNED_TO_NAME' => 'Utilisateur :',
    'LBL_RATING' => 'Evaluation',
    'LBL_ASSIGNED_TO' => 'Assigné à :',
    'LBL_ASSIGNED_USER' => 'Assigné à :',
    'LBL_ASSIGNED_TO_ID' => 'Assigné à :',
    'LBL_BILLING_ADDRESS_CITY' => 'Facturation - Ville :',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Facturation - Pays :',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Facturation - Code Postal :',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturation - Région :',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Adrrese 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Adresse 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Adresse 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Facturation - Rue :',
    'LBL_BILLING_ADDRESS' => 'Facturation - Adresse :',
    'LBL_ACCOUNT_INFORMATION' => 'Information de la Société',
    'LBL_CITY' => 'Ville :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_DATE_ENTERED' => 'Date de création :',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_DESCRIPTION_INFORMATION' => 'Description des Informations',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DUPLICATE' => 'Doublon possible avec le(s) Compte(s)',
    'LBL_EMAIL' => 'Adresse E-mail :',
    'LBL_EMPLOYEES' => 'Employés :',
    'LBL_FAX' => 'Fax :',
    'LBL_INDUSTRY' => 'Activité :',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom de la Société',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse E-mail',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_STATE' => 'Région',
    'LBL_MEMBER_OF' => 'Membre de :',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Membre des organisations',
    'LBL_NAME' => 'Nom :',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Autre téléphone :',
    'LBL_OWNERSHIP' => 'Propriétaire :',
    'LBL_PARENT_ACCOUNT_ID' => 'Identifiant de la Société parent',
    'LBL_PHONE_ALT' => 'Téléphone Alternatif :',
    'LBL_PHONE_FAX' => 'Fax :',
    'LBL_PHONE_OFFICE' => 'Téléphone de l&#39;accueil :',
    'LBL_PHONE' => 'Téléphone :',
    'LBL_EMAIL_ADDRESS' => 'Adresse(s) E-mail',
    'LBL_EMAIL_ADDRESSES' => 'Adresse(s) E-mail',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_SAVE_ACCOUNT' => 'Sauvegarder la Société',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Livraison - Ville :',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Livraison - Pays :',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Livraison - Code Postal :',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Livraison - Région :',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adresse 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adresse 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adresse 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Livraison - Rue :',
    'LBL_SHIPPING_ADDRESS' => 'Livraison - Adresse :',

    'LBL_STATE' => 'État ou région :', //For address fields
    'LBL_TICKER_SYMBOL' => 'Symbole Tycker :',
    'LBL_TYPE' => 'Type :',
    'LBL_WEBSITE' => 'Site Web :',

    'LNK_ACCOUNT_LIST' => 'Comptes',
    'LNK_NEW_ACCOUNT' => 'Créer une Société',

    'MSG_DUPLICATE' => 'Créer cette Société peut potentiellement créer une Société dupliquée. Vous pouvez choisir une Société à partir de la liste ci-dessous ou vous pouvez cliquer sur Sauvegarder pour continuer de créer une nouvelle Société avec les données précédemment saisies.',
    'MSG_SHOW_DUPLICATES' => 'Le compte que vous allez créer pourrait être un doublon d\'un enregistrement existant. Les comptes existants avec des noms similaires sont listés ci-dessous.<br>Cliquez sur Sauvegarder pour valider la création d\'un nouveau compte, ou sur Annulation pour revenir au module sans créer de compte.',

    'NTC_DELETE_CONFIRMATION' => 'Etes-vous sûr(e) sur de vouloir supprimer cet enregistrement ?',

    'LBL_EDIT_BUTTON' => 'Éditer  ',
    'LBL_REMOVE' => 'Supprimer',

);


