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
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_ID' => 'Modifié par (ID)',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_CREATED_ID' => 'Créé par (ID)',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_MODULE_NAME' => 'Actions du WorkFlow',
    'LBL_MODULE_TITLE' => 'Actions du WorkFlow',
    'LBL_AOW_WORKFLOW_ID' => 'ID d\'AOW_WorkFlow',
    'LBL_ACTION' => 'Action',
    'LBL_PARAMETERS' => 'Paramètres',
    'LBL_SELECT_ACTION' => 'Choisir une action',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Créer',
    'LBL_RECORD_TYPE' => 'Type d\'enregistrement',
    'LBL_SENDEMAIL' => 'Envoi du Message',
    'LBL_CREATERECORD' => 'Créer Enregistrement',
    'LBL_MODIFYRECORD' => 'Modifier Enregistrement',
    'LBL_ADD_FIELD' => 'Ajouter un champ',
    'LBL_ADD_RELATIONSHIP' => 'Ajouter une relation',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Éditer',
    'LBL_EMAIL' => 'E-mail',
    'LBL_EMAIL_TEMPLATE' => 'Modèle d\'E-mail',
    'LBL_SETAPPROVAL' => 'Accorder Approbation',
    'LBL_RELATE_WORKFLOW' => 'Relatif au module de WorkFlow',
    'LBL_INDIVIDUAL_EMAILS' => 'Envoyer des E-mails individuels',
    'LBL_COMPUTEFIELD' => 'Calculer les Champs',
    'LBL_COMPUTEFIELD_PARAMETERS' => 'Paramètres',
    'LBL_COMPUTEFIELD_FIELD_NAME' => 'Nom du champ',
    'LBL_COMPUTEFIELD_IDENTIFIER' => 'Identificateur',
    'LBL_COMPUTEFIELD_ADD_PARAMETER' => 'Ajouter un paramètre',
    'LBL_COMPUTEFIELD_RELATION_PARAMETERS' => 'Paramètres de la relation',
    'LBL_COMPUTEFIELD_RELATION' => 'Relation',
    'LBL_COMPUTEFIELD_ADD_RELATION_PARAMETER' => 'Ajoutez un paramètre de relation',
    'LBL_COMPUTEFIELD_FORMULA' => 'Formule',
    'LBL_COMPUTEFIELD_FORMULAS' => 'Formules',
    'LBL_COMPUTEFIELD_ADD_FORMULA' => 'Ajouter une formule',
    'LBL_COMPUTEFIELD_VALUE_TYPE' => 'Type de valeur',
    'LBL_COMPUTEFIELD_RAW_VALUE' => 'Valeur brute',
    'LBL_COMPUTEFIELD_FORMATTED_VALUE' => 'Valeur mise en forme'
);
