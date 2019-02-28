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
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Éditer',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_LIST_FORM_TITLE' => 'Liste des évènements',
    'LBL_MODULE_NAME' => 'Evènement',
    'LBL_MODULE_TITLE' => 'Evènement',
    'LBL_HOMEPAGE_TITLE' => 'Mes évènements',
    'LNK_NEW_RECORD' => 'Créer un évènement',
    'LNK_LIST' => 'Voir les évènements',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher des évènements',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouvel évènement',
    'LBL_LOCATION' => 'Localisation',
    'LBL_START_DATE' => 'Date de début',
    'LBL_END_DATE' => 'Date/Heure de fin',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Date de début',
    'LBL_DATE_END' => 'Date de fin',
    'LBL_DURATION' => 'Durée',
    'LBL_INVITE_TEMPLATES' => 'Modèle d\'E-mail d\'invitation',
    'LBL_INVITE_PDF' => 'Envoyer les invitations',
    'LBL_EDITVIEW_PANEL1' => 'Détails de l\'évènement',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Délègue',
    'LBL_ACCEPT_REDIRECT' => 'Accepter la redirection URL',
    'LBL_DECLINE_REDIRECT' => 'Refuser la redirection d\'URL',
    'LBL_SELECT_DELEGATES' => 'Sélectionner les délégués',
    'LBL_SELECT_DELEGATES_TITLE' => 'Sélectionner les délégués : -',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Liste des cibles',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Cibles',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contacts',
    'LBL_SELECT_DELEGATES_LEADS' => 'Prospects',
    'LBL_MANAGE_DELEGATES' => 'Gestion des délégués',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Gestion des délégués : -',
    'LBL_MANAGE_ACCEPTANCES' => 'Gestion des acceptations',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Gestion des acceptations : -',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Accepté',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Refusé',
    'LBL_MANAGE_POPUP_ERROR' => 'Aucun délégué n\'a été sélectionné.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invité',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Pas invité',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'A participé',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'N\'a pas participé',
    'LBL_SUCCESS_MSG' => 'Toutes les invitations ont été envoyées avec succès.',
    'LBL_ERROR_MSG_1' => 'Tous les contacts liés ont déjà été invités.',
    'LBL_ERROR_MSG_2' => 'L\'envoi des E-mails d\'invitation à échoué ! Veuillez vérifier vos paramètres d\'E-mail.',
    'LBL_ERROR_MSG_3' => 'L\'émission de plus de 10 E-mails a échouée. Merci de vérifier que tous les contacts que vous invitez ont une adresse E-mail valide. (Voir le log d\'erreur : SuiteCRM suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' E-mails n\'ont pu être envoyés. Veuillez vérifier que ces contacts disposent d\'une adresse E-mail valide (voir le fichier de log suitecrm.log)', //LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Modèle d\'E-mail non valide',
    'LBL_EMAIL_INVITE' => 'Envoyer l\'invitation par E-mail',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Contacts',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Lieux',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Prospects',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Cibles',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Délègue',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nom',
    'LBL_ACCOUNT_NAME' => 'Société',
    'LBL_SIGNATURE' => 'Signature',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invité',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Statut',

    'LBL_ACTIVITY_STATUS' => 'Statut ',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Lieux des évènements à partir du nom de l\'évènement',
);
