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
    'LBL_ASSIGNED_TO_NAME' => 'Manager du projet',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom du modèle',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Éditer',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_LIST_FORM_TITLE' => 'Liste des modèles de projets',
    'LBL_MODULE_NAME' => 'Modèles de projets',
    'LBL_MODULE_TITLE' => 'Modèles de projets',
    'LBL_HOMEPAGE_TITLE' => 'Mes modèles de projets',
    'LNK_NEW_RECORD' => 'Créer des modèles de projets',
    'LNK_LIST' => 'Voir les modèles de projets',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importer des modèles de projets',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher des modèles de projets',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau modèle de projet',
    'LBL_STATUS' => 'Statut',
    'LBL_PRIORITY' => 'Priorité',
    'LBL_PROJECT_NAME' => 'Nom du projet',
    'LBL_START_DATE' => 'Date de début',
    'LBL_CREATE_PROJECT_TITLE' => 'Créer un nouveau projet à partir de ce modèle ?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Modèles de tâche',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Utilisateurs',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contacts',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Sélectionner des ressources',
    'LBL_NEW_PROJECT_CREATED' => 'Nouveau projet créé',
    'LBL_NEW_PROJECT' => 'Créer Projet',
    'LBL_CANCEL_PROJECT' => 'Annuler',

    'LBL_SUBTASK' => 'Tâches',
    'LBL_MILESTONE_FLAG' => 'Etape',
    'LBL_RELATIONSHIP_TYPE' => 'Type de relation',
    'LBL_LAG' => 'Retard',
    'LBL_DAYS' => 'Jours',
    'LBL_HOURS' => 'Heures',
    'LBL_MONTHS' => 'Mois',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tâches du Projet',
    'LBL_VIEW_GANTT_TITLE' => 'Voir le Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durée',
    'LBL_TASK_TITLE' => 'Modifier la tâche',
    'LBL_DURATION_TITLE' => 'Modifier la durée',
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_ASSIGNED_USER_ID' => 'Assigné à :',

    'LBL_LIST_ASSIGNED_USER' => 'Manager du projet',
    'LBL_UNASSIGNED' => 'Non assigné',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressources',
    'LBL_DELETE_TASK' => 'Supprimer la tâche',
    'LBL_VIEW_DETAIL' => 'Retour à la Campagne',
    'LBL_ADD_NEW_TASK' => 'Ajouter une nouvelle tâche',
    'LBL_ASSIGNED_USER_NAME' => 'Manager du projet :',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nom de la Tâche',
    'LBL_DURATION' => 'Durée',
    'LBL_ACTUAL_DURATION' => 'Durée en cours',
    'LBL_START' => 'Début',
    'LBL_FINISH' => 'Terminer',
    'LBL_PREDECESSORS' => 'Prédécesseurs',
    'LBL_PERCENT_COMPLETE' => 'Progression (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifier les propriétés de la tâche',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Tenir compte des jours ouvrables',
    'LBL_COPY_ALL_TASKS' => 'Copier toutes les tâches avec leurs ressources',
    'LBL_COPY_SEL_TASKS' => 'Copier les tâches sélectionnées avec leurs ressources',
    'LBL_TOOLTIP_TITLE' => 'Aide',
    'LBL_TOOLTIP_TEXT' => 'Copier toutes les tâches avec les utilisateurs assignés',

    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Téléphone bureau :',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Ajouter une ressource',
    'LBL_FIRST_NAME' => 'Prénom',
    'LBL_LAST_NAME' => 'Nom de Famille',
    'LBL_SEARCH_BUTTON' => 'Rechercher',
    'LBL_EMPTY_SEARCH_RESULT' => 'Désolé, aucun résultat trouvé. Veuillez créer un invité ci-dessous.',
    'LBL_CREATE_INVITEE' => 'Créer une ressource',
    'LBL_CREATE_CONTACT' => 'Comme un Contact',
    'LBL_CREATE_AND_ADD' => 'Créer et Ajouter',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_NO_ACCESS' => 'Vous n&#39;avez aucun accès pour créer $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Liste des ressources',
    'LBL_NONE' => 'Sans Pièce Jointe',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modèles de projet : projet du nom de projet',


);
