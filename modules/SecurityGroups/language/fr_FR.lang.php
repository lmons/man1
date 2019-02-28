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
    'LBL_ALL_MODULES' => 'Tout',//rost fix
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
    'LBL_NONINHERITABLE' => 'Non héritable',
    'LBL_LIST_NONINHERITABLE' => 'Non héritable',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_LIST_FORM_TITLE' => 'Groupes de sécurité',
    'LBL_MODULE_NAME' => 'Gestion des groupes de securité',
    'LBL_MODULE_TITLE' => 'Gestion des groupes de sécurité',
    'LNK_NEW_RECORD' => 'Créer un groupe de sécurité',
    'LNK_LIST' => 'Vue Liste',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher dans la gestion des groupes de sécurité',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Gestion des groupes de sécurité',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Rôles',
    'LBL_ROLES' => 'Rôles',

    'LBL_CONFIGURE_SETTINGS' => 'Configurer',
    'LBL_ADDITIVE' => 'Droits additionnels',
    'LBL_ADDITIVE_DESC' => "L'usager reçoit les droits les plus élevés liés à tous les rôles attribués à l'usager ou aux groupes auxquels il appartient.",
    'LBL_STRICT_RIGHTS' => 'Droits stricts',
    'LBL_STRICT_RIGHTS_DESC' => "Si un utilisateur est membre de plusieurs groupes, seuls les droits liés au groupe responsable de l'enregistrement en cours sont utilisés.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Priorité rôle utilisateur',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Si un rôle est assigné directement à un utilisateur, ce rôle prévaut sur tous les rôles liés aux groupes dont il est membre.',
    'LBL_INHERIT_TITLE' => 'Règles d\'héritage des groupes',
    'LBL_INHERIT_CREATOR' => 'Hérité de "Créé par l\'utilisateur"',
    'LBL_INHERIT_CREATOR_DESC' => 'Le dossier héritera de tous les groupes affectés à l\'utilisateur qui l\'a créé.',
    'LBL_INHERIT_PARENT' => 'Hérité de l\'enregistrement parent',
    'LBL_INHERIT_PARENT_DESC' => 'Par exemple, si un cas est créé pour un contact, le cas héritera des groupes associés avec ce contact.',
    'LBL_USER_POPUP' => 'Nouveau groupe d\'utilisateur',
    'LBL_USER_POPUP_DESC' => 'Lorsque vous créez un nouvel utilisateur ouvrez la fenetre SecurityGroups pour affecter l\'utilisateur à un groupe (s).',
    'LBL_INHERIT_ASSIGNED' => 'Hérité de "Assigné à l\'utilisateur"',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Le dossier héritera de tous les groupes de l\'utilisateur affecté à l\'enregistrement. Les autres groupes affectés à l\'enregistrement ne seront pas supprimés.',
    'LBL_POPUP_SELECT' => 'Utilisez la fonction Creation de groupe',
    'LBL_POPUP_SELECT_DESC' => 'Quand un enregistrement est créé par un utilisateur dans plus d\'un groupe, afficher le panneau de sélection de groupe sur l\'écran de création. Sinon il herite de ce groupe.',
    'LBL_FILTER_USER_LIST' => 'Filtrer la liste des utilisateurs',
    'LBL_FILTER_USER_LIST_DESC' => "Les utilisateurs non administrateurs peuvent uniquement assigner des utilisateurs membre de leur(s) groupe(s)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Groupe par défaut des nouveaux enregistrements',
    'LBL_ADD_BUTTON_LABEL' => 'Ajouter',
    'LBL_REMOVE_BUTTON_LABEL' => 'Supprimer',
    'LBL_GROUP' => 'Groupe :',
    'LBL_MODULE' => 'Module :',

    'LBL_MASS_ASSIGN' => 'Groupes de sécurité : Assignation en masse',
    'LBL_ASSIGN' => 'Assigner',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_ASSIGN_CONFIRM' => 'Etes-vous sûr de vouloir ajouter ce groupe au ',
    'LBL_REMOVE_CONFIRM' => 'Etes-vous sûr de vouloir supprimer ce groupe de ',
    'LBL_CONFIRM_END' => ' enregistrement(s) sélectionné(s) ?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Groupe de sécurité / Utilisateur',
    'LBL_USER_NAME' => 'Nom Utilisateur',
    'LBL_SECURITYGROUP_NAME' => 'Nom du groupe de sécurité',
    'LBL_HOMEPAGE_TITLE' => 'Messages de groupe',
    'LBL_TITLE' => 'Titre',
    'LBL_ROWS' => 'Enregistrements',
    'LBL_POST' => 'Poster',
    'LBL_SELECT_GROUP_ERROR' => 'Merci de choisir un groupe et d\'essayer à nouveau !',

    'LBL_GROUP_SELECT' => 'Sélectionner les groupes qui pourront avoir accès à cet enregistrement',
    'LBL_ERROR_DUPLICATE' => 'SuiteCRM détecte qu\'il peut y avoir un doublon dans les enregistrements. Vous allez devoir ajouter manuellement un groupe de sécurité à ce nouvel enregistrement.',

    'LBL_INBOUND_EMAIL' => 'Compte d\'E-mail entrant',
    'LBL_INBOUND_EMAIL_DESC' => 'Uniquement permettre l\'accès au compte E-mail si l\'utilisateur est membre du groupe assigné à ce compte E-mail.',
    'LBL_PRIMARY_GROUP' => 'Groupe primaire',

);
