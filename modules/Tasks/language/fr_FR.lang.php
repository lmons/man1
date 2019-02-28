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
    'LBL_MODULE_NAME' => 'Tâches',
    'LBL_MODULE_TITLE' => 'Tâches',
    'LBL_SEARCH_FORM_TITLE' => ' Recherche de Tâche',
    'LBL_LIST_FORM_TITLE' => 'Liste des Tâches',
    'LBL_NEW_FORM_TITLE' => 'Planifier une Tâche',
    'LBL_LIST_CLOSE' => 'Fermer',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_CONTACT' => 'Contacts',
    'LBL_LIST_PRIORITY' => 'Priorité',
    'LBL_LIST_RELATED_TO' => 'Relatif à',
    'LBL_LIST_DUE_DATE' => 'Date d&#39;échéance',
    'LBL_LIST_DUE_TIME' => 'Heure d&#39;échéance',
    'LBL_SUBJECT' => 'Sujet :',
    'LBL_STATUS' => 'Statut :',
    'LBL_DUE_DATE' => 'Date échéance :',
    'LBL_DUE_TIME' => 'Heure échéance :',
    'LBL_PRIORITY' => 'Priorité :',
    'LBL_DUE_DATE_AND_TIME' => 'Date & Heure échéance :',
    'LBL_START_DATE_AND_TIME' => 'Date et Heure début :',
    'LBL_START_DATE' => 'Date de début :',
    'LBL_LIST_START_DATE' => 'Date de début',
    'LBL_START_TIME' => 'Heure de début :',
    'DATE_FORMAT' => '(aaaa-mm-jj)',
    'LBL_NONE' => 'Indéfini',
    'LBL_CONTACT' => 'Contact :',
    'LBL_EMAIL_ADDRESS' => 'Adresse E-mail :',
    'LBL_PHONE' => 'Téléphone :',
    'LBL_EMAIL' => 'Adresse E-mail :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_NAME' => 'Nom :',
    'LBL_CONTACT_NAME' => 'Nom du contact ',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_DATE_DUE_FLAG' => 'Aucune date de deadline',
    'LBL_DATE_START_FLAG' => 'Aucune date de début',
    'LBL_LIST_MY_TASKS' => 'Mes Tâches ouvertes',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_TASK_LIST' => 'Tâches',
    'LNK_IMPORT_TASKS' => 'Import Tâche',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_LIST_DATE_MODIFIED' => 'Date de modification',
    'LBL_CONTACT_ID' => 'Contact (ID) :',
    'LBL_PARENT_ID' => 'Parent (ID) :',
    'LBL_CONTACT_PHONE' => 'Téléphone du contact :',
    'LBL_PARENT_TYPE' => 'Type de Parent :',
    'LBL_TASK_INFORMATION' => 'Informations Tâches', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_EDITLAYOUT' => 'Editer la mise en page' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    //For export labels
    'LBL_DATE_DUE' => 'Date d&#39;échéance',
    'LBL_RELATED_TO' => 'Relatif à :',
);
