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
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_NUMBER' => 'Numéro', //PR 3296
    'LBL_CREATED_USER' => 'Créé par l\'utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_LIST_FORM_TITLE' => 'Liste des produits en devis',
    'LBL_MODULE_NAME' => 'Lignes de produits',
    'LBL_MODULE_TITLE' => 'Products en devis : Accueil',
    'LBL_HOMEPAGE_TITLE' => 'Mes produits en devis',
    'LNK_NEW_RECORD' => 'Créer un devis',
    'LNK_LIST' => 'Devis des produits',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher les devis d\'un produit',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau devis',
    'LBL_PRODUCT_NAME' => 'Nom',
    'LBL_PRODUCT_NUMBER' => 'Numéro', //PR 3296
    'LBL_PRODUCT_QTY' => 'Quantité',
    'LBL_PRODUCT_COST_PRICE' => 'Prix d&#39;achat',
    'LBL_PRODUCT_LIST_PRICE' => 'Prix public',
    'LBL_PRODUCT_UNIT_PRICE' => 'Prix unitaire',
    'LBL_PRODUCT_DISCOUNT' => 'Remise',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Montant de remise',
    'LBL_PART_NUMBER' => 'Numéro de pièce',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_DISCOUNT' => 'Type de remise',
    'LBL_VAT_AMT' => 'Montant des taxes',
    'LBL_VAT' => 'Taxes',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Prix total',
    'LBL_PRODUCT_NOTE' => 'Notes',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Rattachée à',
    'LBL_PRODUCT' => 'Produit',

    'LBL_SERVICE_MODULE_NAME' => 'Prestations',
    'LBL_SERVICE_NUMBER' => 'Numéro', //PR 3296
    'LBL_LIST_NUM' => 'Numéro',
    'LBL_PARENT_ID' => 'Parent ID',
    'LBL_GROUP_NAME' => 'Groupe',
    'LBL_GROUP_DESCRIPTION' => 'Description', //PR 3296
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Prix d&#39;achat (Monnaie par d&eacute;faut)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Prix public (Monnaie par d&eacute;faut)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Prix unitaire (Monnaie par d&eacute;faut)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Prix total (Monnaie par d&eacute;faut)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Remise (Monnaie par d&eacute;faut)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Montant de la remise (Monnaie par d&eacute;faut)',
    'LBL_VAT_AMT_USDOLLAR' => 'Montant des taxes (Monnaie par d&eacute;faut)',
    'LBL_PRODUCTS_SERVICES' => 'Produits / Service',
    'LBL_PRODUCT_ID' => 'ID produit',

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_INVOICES' => 'Factures',
    'LBL_AOS_PRODUCTS' => 'Produits',
    'LBL_AOS_QUOTES' => 'Devis',
);

