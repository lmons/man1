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
    'LBL_ACCEPT_THIS' => 'Accepter ?',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Ajouter des participants',
    'LBL_CONTACT_NAME' => 'Contact :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Créé par',
    'LBL_DATE_END' => 'Date de fin',
    'LBL_DATE_TIME' => 'Date et Heure début :',
    'LBL_DATE' => 'Date de début :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Réunions',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DIRECTION' => 'Sens du tri :',
    'LBL_DURATION_HOURS' => 'Durée en heures :',
    'LBL_DURATION_MINUTES' => 'Durée en minutes :',
    'LBL_DURATION' => 'Durée :',
    'LBL_EMAIL' => 'E-mail',
    'LBL_FIRST_NAME' => 'Prénom',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(heures/minutes)',
    'LBL_INVITEE' => 'Participants',
    'LBL_LAST_NAME' => 'Nom',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur assigné',
    'LBL_LIST_CLOSE' => 'Clôturer',
    'LBL_LIST_CONTACT' => 'Contacts',
    'LBL_LIST_DATE_MODIFIED' => 'Date de modification',
    'LBL_LIST_DATE' => 'Date de début',
    'LBL_LIST_DIRECTION' => 'Sens',
    'LBL_LIST_DUE_DATE' => 'Date prévue',
    'LBL_LIST_FORM_TITLE' => 'Liste des Réunions',
    'LBL_LIST_MY_MEETINGS' => 'Mes Rendez-vous',
    'LBL_LIST_RELATED_TO' => 'Relatif à',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_LOCATION' => 'Localisation :',
    'LBL_MINSS_ABBREV' => 'min',
    'LBL_MODIFIED_BY' => 'Modifié par',
    'LBL_MODULE_NAME' => 'Réunions',
    'LBL_MODULE_TITLE' => 'Réunions',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_FORM_TITLE' => 'Planifier Réunion',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_SEQUENCE' => 'Fréquence de mise à jour de la réunion',
    'LBL_PHONE' => 'Téléphone bureau :',
    'LBL_REMINDER_TIME' => 'Heure de la notification',
    'LBL_EMAIL_REMINDER_SENT' => 'Notification par E-mail envoyée',
    'LBL_REMINDER' => 'Rappels :',
    'LBL_REMINDER_POPUP' => 'Rappel utilisateurs',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Rapp. E-mail tous',
    'LBL_EMAIL_REMINDER' => 'Notification par E-mail',
    'LBL_EMAIL_REMINDER_TIME' => 'Rappel de l\'horaire par E-mail',
    'LBL_REMOVE' => 'Sup',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planification',
    'LBL_SEARCH_BUTTON' => 'Rechercher',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Réunion',
    'LBL_SEND_BUTTON_LABEL' => 'Envoyer Invitations',
    'LBL_SEND_BUTTON_TITLE' => 'Envoyer Invitations',
    'LBL_STATUS' => 'Statut :',
    'LBL_TYPE' => 'Type',
    'LBL_PASSWORD' => 'Mot de passe',
    'LBL_URL' => 'Démarrer/rejoindre la réunion',
    'LBL_HOST_URL' => 'URL hôte',
    'LBL_DISPLAYED_URL' => 'URL affichée',
    'LBL_CREATOR' => 'Créé par',
    'LBL_EXTERNALID' => 'ID application externe',
    'LBL_SUBJECT' => 'Sujet :',
    'LBL_TIME' => 'Heure de début :',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_PARENT_TYPE' => 'Type de Parent :',
    'LBL_PARENT_ID' => 'Parent ID',
    'LNK_MEETING_LIST' => 'Réunions',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_IMPORT_MEETINGS' => 'Import Réunions',

    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'NOTICE_DURATION_TIME' => 'La durée doit être supérieur à 0',
    'LBL_MEETING_INFORMATION' => 'Vue d\'ensemble', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LIST_JOIN_MEETING' => 'Joindre la réunion',
    'LBL_ACCEPT_STATUS' => 'Statut acceptation',
    'LBL_ACCEPT_LINK' => 'Lien acceptation',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Vous n&#39;êtes pas autorisé à joindre cette réunion car vous n&#39;êtes pas un des participants de celle-ci.',
    'LBL_EXTNOT_RECORD_LINK' => 'Voir la réunion',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Vous ne pouvez pas démarrer cette réunion car vous êtes ni un administrateur ni le responsable de cette réunion.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Créer un invité',
    'LBL_CREATE_CONTACT' => 'Comme un Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Comme un prospect', // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Créer et Ajouter', // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_EMPTY_SEARCH_RESULT' => 'Désolé, aucun résultat trouvé. Veuillez créer un invité ci-dessous.',
    'LBL_NO_ACCESS' => 'Vous n&#39;avez aucun accès pour créer $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Répétition type',
    'LBL_REPEAT_INTERVAL' => 'Répétition intervalle',
    'LBL_REPEAT_DOW' => 'Répétition depuis',
    'LBL_REPEAT_UNTIL' => 'Répéter jusqu&#39;à',
    'LBL_REPEAT_COUNT' => 'Répétition occurences',
    'LBL_REPEAT_PARENT_ID' => 'Répétition ID parent',
    'LBL_RECURRING_SOURCE' => 'Source récurrence',

    'LBL_SYNCED_RECURRING_MSG' => 'Cette réunion provient d\'une application externe et a été synchronisé avec SuiteCRM. Une fois éditer dans SuiteCRM, cette réunion ne sera plus synchronisée avec cette application externe.',
    'LBL_RELATED_TO' => 'Relatif à :',

    // for reminders
    'LBL_REMINDERS' => 'Rappel par défaut',
    'LBL_REMINDERS_ACTIONS' => 'Actions',
    'LBL_REMINDERS_POPUP' => 'Rappel utilisateurs',
    'LBL_REMINDERS_EMAIL' => 'E-mail invités',
    'LBL_REMINDERS_WHEN' => 'Quand :',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Supprimer le rappel',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Ajouter tous les invités',
    'LBL_REMINDERS_ADD_REMINDER' => 'Ajouter un rappel',
);
