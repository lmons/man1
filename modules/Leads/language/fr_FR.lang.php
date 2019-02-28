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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Un identifiant doit être spécifié pour pouvoir supprimer le prospect.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Description compte',
    'LBL_ACCOUNT_ID' => 'Compte (ID)',
    'LBL_ACCOUNT_NAME' => 'Nom du compte :',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités à réaliser',
    'LBL_ADD_BUSINESSCARD' => 'Saisir carte de visite',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse secondaire - Code Postal',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - Région',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresse secondaire - Rue 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresse secondaire - Rue 3',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue 1',
    'LBL_ALTERNATE_ADDRESS' => 'Autres adresses :',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ANY_PHONE' => 'Tous les téléphones :',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur assigné :',
    'LBL_BUSINESSCARD' => 'Convertir le prospect',
    'LBL_CITY' => 'Ville :',
    'LBL_CONTACT_ID' => 'Contact (ID)',
    'LBL_CONTACT_INFORMATION' => 'Vue d\'ensemble', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Nom du prospect :',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Prospect-Affaire :',
    'LBL_CONTACT_ROLE' => 'Rôle :',
    'LBL_CONTACT' => 'Prospect :',
    'LBL_CONVERTED_ACCOUNT' => 'Compte converti :',
    'LBL_CONVERTED_CONTACT' => 'Contact converti :',
    'LBL_CONVERTED_OPP' => 'Affaire convertie :',
    'LBL_CONVERTED' => 'Converti',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir le prospect',
    'LBL_CONVERTLEAD' => 'Convertir le prospect',
    'LBL_CONVERTLEAD_WARNING' => 'Attention : Le statut du prospect que vous souhaitez convertir est "converti". Un contact et/ou un compte ont sans doute déja été créés à partir des informations de ce prospect. Si vous souhaitez tout de même convertir ce prospect, cliquez sur "sauvegarder". Sinon cliquez sur "annuler" pour retourner sur la page précédente.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Contact possible : ',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_CREATED_NEW' => 'Création',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte créé',
    'LBL_CREATED_CALL' => 'Nouvel Appel créé',
    'LBL_CREATED_CONTACT' => 'Nouveau Contact créé',
    'LBL_CREATED_MEETING' => 'Nouvelle Réunion créée',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Affaire créée',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prospects',
    'LBL_DEPARTMENT' => 'Service :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler :',
    'LBL_DUPLICATE' => 'Prospects similaires',
    'LBL_EMAIL_ADDRESS' => 'Adresse E-mail :',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out :',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilisé',
    'LBL_EXISTING_CONTACT' => 'Contact existant utilisé',
    'LBL_EXISTING_OPPORTUNITY' => 'Affaire existante utilisée',
    'LBL_FAX_PHONE' => 'Fax :',
    'LBL_FIRST_NAME' => 'Prénom :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique et activités terminées',
    'LBL_HOME_PHONE' => 'Téléphone (domicile) :',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Créer automatiquement un nouveau prospect par import de vcard depuis votre système.',
    'LBL_INVALID_EMAIL' => 'E-mail invalide :',
    'LBL_INVITEE' => 'Rapports directs',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Description de la origine du prospect :',
    'LBL_LEAD_SOURCE' => 'Origine du prospect :',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut d&#39;acceptation',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CONTACT_NAME' => 'Nom du Prospect',
    'LBL_LIST_CONTACT_ROLE' => 'Rôle',
    'LBL_LIST_DATE_ENTERED' => 'Date de création',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Prénom',
    'LBL_LIST_FORM_TITLE' => 'Liste des Prospects',
    'LBL_LIST_LAST_NAME' => 'Nom',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Description origine principale',
    'LBL_LIST_LEAD_SOURCE' => 'Origine principale',
    'LBL_LIST_MY_LEADS' => 'Mes Prospects',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_REFERED_BY' => 'Fait référence à',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_MOBILE_PHONE' => 'Téléphone mobile :',
    'LBL_MODULE_NAME' => 'Prospects',
    'LBL_MODULE_TITLE' => 'Prospects : Accueil',
    'LBL_NAME' => 'Nom :',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Prospect',
    'LBL_OFFICE_PHONE' => 'Téléphone de l&#39;accueil :',
    'LBL_OPP_NAME' => 'Nom Affaire :',
    'LBL_OPPORTUNITY_AMOUNT' => 'Montant Affaire :',
    'LBL_OPPORTUNITY_ID' => 'Affaire (ID)',
    'LBL_OPPORTUNITY_NAME' => 'Nom Affaire :',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Autre téléphone :',
    'LBL_PHONE' => 'Téléphone :',
    'LBL_PORTAL_APP' => 'Portail application',
    'LBL_PORTAL_INFORMATION' => 'Information sur le portail ',
    'LBL_PORTAL_NAME' => 'Nom sur le portail :',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_STREET' => 'Rue',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresse principale - Ville',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresse principale - Pays',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresse principale - Code Postal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresse principale - Région',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresse principale - Rue 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresse principale - Rue 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresse principale - Rue 1',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',
    'LBL_REFERED_BY' => 'Fait référence à :',
    'LBL_REPORTS_TO_ID' => 'Rend compte à (ID)',
    'LBL_REPORTS_TO' => 'Rend compte à :',
    'LBL_SALUTATION' => 'Civilité',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un prospect',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Sélectionner prospects vérifiés',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Sélectionner prospects vérifiés',
    'LBL_STATE' => 'État ou région :', //For address fields
    'LBL_STATUS_DESCRIPTION' => 'Description Statut :',
    'LBL_STATUS' => 'Statut :',
    'LBL_TITLE' => 'Titre :',
    'LNK_IMPORT_VCARD' => 'Insérer une vCard',
    'LNK_LEAD_LIST' => 'Voir les prospects',
    'LNK_NEW_ACCOUNT' => 'Créer un nouveau Compte',
    'LNK_NEW_APPOINTMENT' => 'Planifier un Rendez-vous ou un Appel',
    'LNK_NEW_CONTACT' => 'Création du Contact',
    'LNK_NEW_LEAD' => 'Créer un prospect',
    'LNK_NEW_NOTE' => 'Créer Note',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_NEW_CASE' => 'Créer Ticket',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_OPPORTUNITY' => 'Créer une nouvelle Affaire',
    'LNK_SELECT_ACCOUNTS' => ' <b>OU</b> Sélectionner un Compte',
    'LNK_SELECT_CONTACTS' => ' <b>Ou</b> Sélectionnez le Contact',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer ce prospect ?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_CAMPAIGN' => 'Campagne :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur assigné',
    'LBL_PROSPECT_LIST' => 'Liste de cibles',
    'LBL_CAMPAIGN_LEAD' => 'Campagne(s)',
    'LBL_BIRTHDATE' => 'Anniversaire :',
    'LBL_ASSISTANT_PHONE' => 'Téléphone assistant',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Requis',
    'LBL_CONVERT_SELECT' => 'Sélection',
    'LBL_CONVERT_COPY' => 'Copier',
    'LBL_CONVERT_EDIT' => 'Éditer',
    'LBL_CONVERT_DELETE' => 'Supprimer',
    'LBL_CONVERT_ADD_MODULE' => 'Ajouter Module',
    'LBL_CREATE' => 'Création',
    'LBL_SELECT' => '<b>OU</b> Sélectionner',
    'LBL_WEBSITE' => 'Site web',
    'LNK_IMPORT_LEADS' => 'Importer des prospects',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Le module dans lequel vous souhaitez créer un nouvel enregistrement.',
    'LBL_REQUIRED_TIP' => 'Les modules requis doivent être créés ou sélectionnés avant de convertir le prospect.',
    'LBL_COPY_TIP' => 'Si la case est cochée, les champs du prospect seront copiés dans les champs ayant le même nom dans les enregistrements des modules de destination.',
    'LBL_SELECTION_TIP' => 'Les modules liés avec le module contacts pourront être sélectionnés plutôt que créés durant le processus de conversion des prospects.',
    'LBL_EDIT_TIP' => 'Modifier la mise en page de conversion pour ce module.',
    'LBL_DELETE_TIP' => 'Supprimer ce module de la mise en page de conversion.',

    'LBL_ACTIVITIES_MOVE' => 'Déplacer les activités vers',
    'LBL_ACTIVITIES_COPY' => 'Copier les activités vers',
    'LBL_ACTIVITIES_MOVE_HELP' => "Sélectionner les enregistrements vers lesquels les activités du prospect seront déplacées lors de la conversion. Les activités de type tâches, appels, réunions, notes et E-mails seront déplacées vers ces enregistrement sélectionnés.",
    'LBL_ACTIVITIES_COPY_HELP' => "Sélectionner les enregistrements vers lesquels les activités du prospect seront copiées lors de la conversion. Des activités de type tâches, appels, réunions et notes seront créés pour chacun des enregistrements sélectionnés. Les E-mails seront rattachés aux enregistrements sélectionnés.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_EDITLAYOUT' => 'Editer la mise en page' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Préciser la date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Chargement' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Éditer' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Évènements',
    'LBL_WWW' => 'WWW',
);

