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
    'LBL_ASSIGNED_TO_ID' => 'Id de l\'utilisateur assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Utilisateur SuiteCRM',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Identifiant',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FORM_TITLE' => 'Liste des liens externes',
    'LBL_MODULE_NAME' => 'Lien externe',
    'LBL_MODULE_TITLE' => 'Liens externes',
    'LBL_HOMEPAGE_TITLE' => 'Mes liens externes',
    'LNK_NEW_RECORD' => 'Crée un nouveau lien externe',
    'LNK_LIST' => 'Liens externes',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un lien externe',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique et Activités terminées',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités à réaliser',
    'LBL_NEW_FORM_TITLE' => 'Nouveau lien externe',
    'LBL_PASSWORD' => 'Mot de passe',
    'LBL_USER_NAME' => 'Mot de passe',
    'LBL_URL' => 'URL Plugins',
    'LBL_APPLICATION' => 'Application',
    'LBL_API_DATA' => 'Donnée API',
    'LBL_API_CONSKEY' => 'OAuth Consumer Key',
    'LBL_API_CONSSECRET' => 'OAuth Consumer Secret',
    'LBL_API_OAUTHTOKEN' => 'Jetons OAuth',
    'LBL_AUTH_UNSUPPORTED' => "Cette méthode d&#39;autorisation n&#39;est pas priss en charge par l&#39;application",
    'LBL_AUTH_ERROR' => 'La tentative d&#39;identification sur le lien externe a échoué.',
    'LBL_VALIDATED' => 'Accès validé',
    'LBL_ACTIVE' => 'Actif',
    'LBL_OAUTH_NAME' => '%S',
    'LBL_CONNECT_BUTTON_TITLE' => 'Connexion',
    'LBL_NOTE' => 'Veuillez noter',
    'LBL_CONNECTED' => 'Connecté',

    'LBL_ERR_NO_AUTHINFO' => 'Il n&#39;y a pas d&#39.information d&#39.authentification pour ce lien externe.',
    'LBL_ERR_NO_TOKEN' => 'Cet identifiant est invalide pour ce lien externe.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Vous n&#39.êtes pas actuellement connecté sur votre compte {0}. Cliquez sur OK pour vous reconnecter à votre compte et activer ce lien externe.',

    'LBL_CLICK_TO_EDIT' => 'Cliquez pour modifier',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Réauthentifaction',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Un lien externe vers cette application existe déjà. Nous avons réactiver ce lien déjà existant.',
    'LBL_OMIT_URL' => '(Ne pas mettre http:// ou https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Cliquez sur <b>Connect</b> pour être dirigé vers une page afin de fournir vos informations de compte et d’autoriser l’accès au compte par SuiteCRM. Une fois connecté, vous serez dirigé vers SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Cliquez sur <b>Connect</b> pour connecter ce compte à SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Veuillez activer les fenêtres popup navigateur ou ajouter une exception pour le site Web « {0} » à la liste des exceptions afin de se connecter.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
