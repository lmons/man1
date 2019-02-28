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
    'LBL_SECURITYGROUPS' => 'Groupes de sécurité',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Groupes de sécurité',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par (Nom)',
    'LBL_CREATED' => 'Créé par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Créé par l\'utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par l\'utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Éditer',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_LIST_FORM_TITLE' => 'Liste de pivots',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'Mon Pivot',
    'LNK_NEW_RECORD' => 'Créer un pivot',
    'LNK_LIST' => 'Voir le pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche de pivots',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Pivot',
    'LBL_CONFIG' => 'Configuration',
    'LBL_TYPE' => 'Zone d’analyse',
    'LNK_SPOT_LIST' => 'Voir les Spots',
    'LNK_SPOT_CREATE' => 'Créer un Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuration',

    'LBL_AN_UNSUPPORTED_DB' => 'Désolé, Suite Spots est actuellement configuré pour MySQL et MS SQL uniquement',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nom',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Type de compte',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Secteur d\'activité',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Pays de facturation',
    
    
    
    'LBL_AN_ACCOUNTS_PHARMA_DAY' => 'Jours',
    'LBL_AN_ACCOUNTS_PHARMA_MONTH' => 'Mois',
    'LBL_AN_ACCOUNTS_PHARMA_ACCOUNT_NAME' => 'Comptes',
    'LBL_AN_ACCOUNTS_PHARMA_CUTOMER_TIER' => 'Liste',
    'LBL_AN_ACCOUNTS_PHARMA_ACCOUNT_TYPE' => 'Type',
    'LBL_AN_ACCOUNTS_PHARMA_REP' => 'Délégué',
    'LBL_AN_ACCOUNTS_PHARMA_WEEK_C' => 'Semaine',
    'LBL_AN_ACCOUNTS_PHARMA_TEAM' => 'Equipe',
    

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Utilisateur assigné',
    'LBL_AN_LEADS_STATUS' => 'Statut',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Origine principale',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Nom de la campagne',
    'LBL_AN_LEADS_YEAR' => 'Année',
    'LBL_AN_LEADS_QUARTER' => 'Trimestre',
    'LBL_AN_LEADS_MONTH' => 'Mois',
    'LBL_AN_LEADS_WEEK' => 'Semaine',
    'LBL_AN_LEADS_DAY' => 'Jour',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nom de la Société',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nom Affaire',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Utilisateur assigné',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Type d\'affaire',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Origine principale',
    'LBL_AN_SALES_AMOUNT' => 'Montant',
    'LBL_AN_SALES_STAGE' => 'Etape de vente',
    'LBL_AN_SALES_PROBABILITY' => 'Probabilité',
    'LBL_AN_SALES_DATE' => 'Date de vente',
    'LBL_AN_SALES_QUARTER' => 'Trimestre de vente',
    'LBL_AN_SALES_MONTH' => 'Mois de vente',
    'LBL_AN_SALES_WEEK' => 'Ventes (semaine)',
    'LBL_AN_SALES_DAY' => 'Jour de vente',
    'LBL_AN_SALES_YEAR' => 'Année de vente',
    'LBL_AN_SALES_CAMPAIGN' => 'Campagnes',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nom de la Société',
    'LBL_AN_SERVICE_STATE' => 'Région',
    'LBL_AN_SERVICE_STATUS' => 'Statut',
    'LBL_AN_SERVICE_PRIORITY' => 'Priorité',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Jour de création',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Semaine de création',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Mois de création',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Trimestre de création',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Année de création',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Nom Contact',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Utilisateur assigné',

    //Analytics labels for the activities pivot
       'LBL_AN_ACTIVITIES_REP' => 'Délégué',
    'LBL_AN_ACTIVITIES_MONTH' => 'Mois',
    'LBL_AN_ACTIVITIES_DAY' => 'Jours',
    'LBL_AN_ACTIVITIES_WEEK_C' => 'Semaine',
    'LBL_AN_ACTIVITIES_ACCOUNT_TYPE' => 'Type de compte',
    'LBL_AN_ACTIVITIES_SPECIALTY_C' => 'Spécialité',
    'LBL_AN_ACTIVITIES_CUTOMER_TIER' => 'Segment',
    'LBL_AN_ACTIVITIES_CONTACT_NAME' => 'Médecin',
    'LBL_AN_ACTIVITIES_TYPE' => 'Type',
    'LBL_AN_ACTIVITIES_NAME' => 'Nom',
    'LBL_AN_ACTIVITIES_STATUS' => 'Statut',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Utilisateur assigné',
    
    
    
        'LBL_AN_LEADS_REP' => 'Délégué',
    'LBL_AN_LEADS_MONTH' => 'Mois',
    'LBL_AN_LEADS_DAY' => 'Jours',
    'LBL_AN_LEADS_WEEK_C' => 'Semaine',
    'LBL_AN_LEADS_ACCOUNT_TYPE' => 'Type de compte',
    'LBL_AN_LEADS_SPECIALTY_C' => 'Spécialité',
    'LBL_AN_LEADS_CUTOMER_TIER' => 'Segment',
    'LBL_AN_LEADS_CONTACT_NAME' => 'Médecin',
    'LBL_AN_LEADS_TYPE' => 'Type',
    'LBL_AN_LEADS_NAME' => 'Nom',
    'LBL_AN_LEADS_STATUS' => 'Statut',
    'LBL_AN_LEADS_ASSIGNED_TO' => 'Utilisateur assigné',
    'LBL_AN_LEADS_TEAM_NAME'=> 'Equipe',


'LBL_AN_MARKETING_PHARMA_REP' => 'Délégué',
    'LBL_AN_MARKETING_PHARMA_MONTH' => 'Mois',
    'LBL_AN_MARKETING_PHARMA_DAY' => 'Jours',
    'LBL_AN_MARKETING_PHARMA_PHARMA_NAME' => 'Compte',
    'LBL_AN_MARKETING_PHARMA_WEEK_C' => 'Semaine',
    'LBL_AN_MARKETING_PHARMA_ACCOUNT_TYPE' => 'Type de compte',
    'LBL_AN_MARKETING_PHARMA_CUTOMER_TIER' => 'Segment',
    'LBL_AN_MARKETING_PHARMA_TYPE' => 'Type',
    'LBL_AN_MARKETING_PHARMA_NAME' => 'Nom',
    'LBL_AN_MARKETING_PHARMA_STATUS' => 'Statut',
    'LBL_AN_MARKETING_PHARMA_ASSIGNED_TO' => 'Utilisateur assigné',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Statut',
    'LBL_AN_MARKETING_TYPE' => 'Type',
    'LBL_AN_MARKETING_BUDGET' => 'Budget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Coût prévu',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Revenu attendu',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nom Affaire',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Montant Affaire',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Affaires par Phase de Vente',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Affaire assignée à',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nom de la Société',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nom de la campagne',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Date de l&#39;activité',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Type d&#39;Activité',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Type Lié',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ID associé',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nom Affaire',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Type d\'opportunité',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Origine du prospect de l\'affaire',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Affaires par Phase de Vente',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nom de la Société',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Nom Contact',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Nom de l’item',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Type d’élément',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Catégorie de l’élément',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Quantité',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Liste de prix de l\'article',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Prix de vente de l’article',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Prix de revient de l\'article',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Prix promotionnel',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Montant de remise',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Total d’articles',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Total global',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Utilisateur assigné',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Date de création',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Jour de création',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Semaine de création',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Mois de création',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Trimestre de création',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Année de création',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Erreur, vérifier l’étiquette pour la sous-zone de pivot',

    //Added to allow for the UI of the pivot to be language agnostic
    'LBL_RENDERERS_TABLE' =>'Tableau',
    'LBL_RENDERERS_TABLE_BARCHART' =>'Graphique en barre',
    'LBL_RENDERERS_HEATMAP' =>'Cartographie thermique',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Ligne de la cartographie thermique',
    'LBL_RENDERERS_COL_HEATMAP' =>'Colonne de la cartographie thermique',
    'LBL_RENDERERS_LINE_CHART' =>'Graphique courbe',
    'LBL_RENDERERS_BAR_CHART' =>'Histogramme',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Barres empilées',
    'LBL_RENDERERS_AREA_CHART' =>'Graphique en aires',
    'LBL_RENDERERS_SCATTER_CHART' =>'Graphique en nuage de points',

    'LBL_AGGREGATORS_COUNT' => 'Décompte',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Nombre de valeurs uniques',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'Liste des valeurs uniques',
    'LBL_AGGREGATORS_SUM' => 'Total',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Somme entière',
    'LBL_AGGREGATORS_AVERAGE' => 'Moyenne',
    'LBL_AGGREGATORS_MINIMUM' => 'Minimum',
    'LBL_AGGREGATORS_MAXIMUM' => 'Maximum',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Somme sur somme',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => 'Limite supérieure de 80 %',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => 'Limite inférieure de 80 %',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => 'Pourcentage de la somme totale',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => 'Pourcentage du total de la ligne',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => 'Pourcentage du total de la colonne',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => 'Pourcentage du décompte total',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => 'Pourcentage du décompte de la ligne',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => 'Pourcentage du décompte de la colonne',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'Une erreur s’est produite lors de l\'affichage du tableau croisé dynamique.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'Une erreur s’est produite lors du calcul du tableau croisé dynamique.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'Une erreur s’est produite lors de l\'affichage du tableau croisé dynamique.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => 'Liste Complète',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Ne rien sélectionner',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(liste trop importante)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'Filtrer les résultats',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Totaux',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => 'par',
    'LBL_LOCALE_STRINGS_OK' => 'Ok',

    'LBL_ACTIVITIES_CALL'=>'Appels',
    'LBL_ACTIVITIES_MEETING'=>'Réunions',
    'LBL_ACTIVITIES_TASK'=>'Tâches',
);
