<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$relationships = array (
  'terri_territoire_thin_cycleplans_1' => 
  array (
    'id' => 'a927a7e3-601f-6beb-73b1-5964f82670bf',
    'relationship_name' => 'terri_territoire_thin_cycleplans_1',
    'lhs_module' => 'Terri_Territoire',
    'lhs_table' => 'terri_territoire',
    'lhs_key' => 'id',
    'rhs_module' => 'Thin_CyclePlans',
    'rhs_table' => 'thin_cycleplans',
    'rhs_key' => 'id',
    'join_table' => 'terri_territoire_thin_cycleplans_1_c',
    'join_key_lhs' => 'terri_territoire_thin_cycleplans_1terri_territoire_ida',
    'join_key_rhs' => 'terri_territoire_thin_cycleplans_1thin_cycleplans_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'thin_cycleplans_thin_cycleplantargets' => 
  array (
    'id' => 'b19018af-3cb3-7758-9549-5964f8cf5aef',
    'relationship_name' => 'thin_cycleplans_thin_cycleplantargets',
    'lhs_module' => 'Thin_CyclePlans',
    'lhs_table' => 'thin_cycleplans',
    'lhs_key' => 'id',
    'rhs_module' => 'Thin_CyclePlanTargets',
    'rhs_table' => 'thin_cycleplantargets',
    'rhs_key' => 'id',
    'join_table' => 'thin_cycleplans_thin_cycleplantargets_c',
    'join_key_lhs' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida',
    'join_key_rhs' => 'thin_cycleplans_thin_cycleplantargetsthin_cycleplantargets_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'thin_cycleplans_modified_user' => 
  array (
    'id' => 'caf75400-dbca-76fd-a4a7-5964f81ef331',
    'relationship_name' => 'thin_cycleplans_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Thin_CyclePlans',
    'rhs_table' => 'thin_cycleplans',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'thin_cycleplans_created_by' => 
  array (
    'id' => 'd729b948-e177-3953-c4d5-5964f84c4d13',
    'relationship_name' => 'thin_cycleplans_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Thin_CyclePlans',
    'rhs_table' => 'thin_cycleplans',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'thin_cycleplans_assigned_user' => 
  array (
    'id' => 'df9a8ae9-995d-b8cc-03d7-5964f8e49013',
    'relationship_name' => 'thin_cycleplans_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Thin_CyclePlans',
    'rhs_table' => 'thin_cycleplans',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'securitygroups_thin_cycleplans' => 
  array (
    'id' => 'e742c74b-4afa-eff0-3325-5964f83ec941',
    'relationship_name' => 'securitygroups_thin_cycleplans',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Thin_CyclePlans',
    'rhs_table' => 'thin_cycleplans',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Thin_CyclePlans',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'thin_cycleplans_thin_cycleplantargets_pharma_1' => 
  array (
    'rhs_label' => 'Cycle Plan Targets Pharma',
    'lhs_label' => 'Cycle Plans',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Thin_CyclePlans',
    'rhs_module' => 'Thin_CyclePlanTargets_Pharma',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'thin_cycleplans_thin_cycleplantargets_pharma_1',
  ),
);