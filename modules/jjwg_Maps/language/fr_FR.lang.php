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

$mod_strings['LBL_MAP'] = 'Carte';
$mod_strings['LBL_MODULE_NAME'] = 'Cartes';
$mod_strings['LBL_MODULE_TITLE'] = 'Cartes : Accueil';
$mod_strings['LBL_MODULE_ID'] = 'Cartes';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Listing des cartes';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Marqueur personnalisé';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Zone personnalisée';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Mon Liste des cartes';

$mod_strings['LBL_FLEX_RELATE'] = 'Relatif à (centre) :';
$mod_strings['LBL_MODULE_TYPE'] = 'Type de module à afficher :';
$mod_strings['LBL_DISTANCE'] = 'Distance (rayon) :';
$mod_strings['LBL_UNIT_TYPE'] = 'Type d\'unité :';

$mod_strings['LBL_MAP_DISPLAY'] = 'Affichage de la carte';
$mod_strings['LBL_MAP_LEGEND'] = 'Légende :';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Groupes:';
$mod_strings['LBL_MAP_GROUP'] = 'Groupe';
$mod_strings['LBL_MAP_TYPE'] = 'Type';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Assigné à :';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Obtenir les Directions';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Vue Google Maps';

$mod_strings['LNK_NEW_MAP'] = 'Ajouter une nouvelle carte';
$mod_strings['LNK_NEW_RECORD'] = 'Ajouter une nouvelle carte';
$mod_strings['LNK_MAP_LIST'] = 'Lister les cartes';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Tester le géocodage';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Carte rapide';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Sans Pièce Jointe';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adresse';
$mod_strings['LBL_MAP_PROCESS'] = 'Traiter !';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Dernier statut de géocodage';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Nombre de géocodages';
$mod_strings['LBL_CRON_URL'] = 'URL de traitement cron :';
$mod_strings['LBL_MODULE_HEADING'] = 'Module';
$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Total';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Réinitialiser';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'La table ci-dessous indique le nombre d’objets module géocodée, regroupés par réponse de géocodage. N’oubliez pas que la limite d’utilisation de Google Maps standard est de 2500 visites par jour. Ce module met en cache les informations de géocodage des adresses au cours du traitement afin de réduire le nombre total de demandes nécessaires.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Pour traiter les demandes de géocodage, il est recommandé de configurer une tâche Cron-tous les soirs. Un point d’entrée personnalisé a été créé à cet effet et est accessible sans authentification. L’URL ci-dessous est destiné à être utilisé avec une tâche Administrative planifiée. Consultez la documentation pour plus d’informations.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'URL&#39; s d\'export';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Utiliser les liens ci-dessous pour exporter les adresses complètes ayant besoin d’une information de geocodage. Puis utilisez un outil de géocodage batch en ligne ou hors ligne pour géocoder les adresses. Lorsque vous avez fini de géocodage, importer les adresses dans le module de Cache d’adresses à utiliser avec vos cartes. Noter que le module du Cache de l’adresse est facultatif. Toutes les informations de géolocalisation sont stockées dans le module représentatif.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Cache des adresses';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Ajouter à la liste des cibles';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'En traitement...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Paramètres de configuration';
$mod_strings['LBL_CONFIG_SAVED'] = 'Paramètres enregistrés avec succès !';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Adresse de Facturation';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Adresse de livraison';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Adresse Principale';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Autre adresse';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Rattachement d\'inflexion';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adresse (Simple, Utilisateurs)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Personnalisé (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Activé';
$mod_strings['LBL_DISABLED'] = 'Désactivé';
$mod_strings['LBL_DEFAULT'] = 'Défaut :';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Défaut :';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Modules de Geocode valide :';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Tables de Geocode valide :';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Paramètres de Type d'adresse : Ceci définit les types d'adresse de modules utilisés lors du géocodage des adresses. Les valeurs autorisées: 'billing'; 'shipping'; 'primary'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Type d\'adresse pour ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Type d\'adresse pour les comptes :';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Type d\'adresse pour les contacts :';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Type d\'adresse pour les prospects :';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Type d\'adresse pour les opportunités :';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(de compte liés)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Type d\'adresse pour les cas :';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Type d\'adresse pour les projets :';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(pour les Comptes/Opportunités liés)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Type d\'adresse pour les réunions :';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Type d\'adresse pour les Prospects/ Cibles :';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Objet liés a travers le champ Flex Relation';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Paramètres de groupe de marqueur de champ : Ceci définit le « champ » pour être utilisé comme paramètre de groupe lors de l'affichage des marqueurs sur une carte. Exemples : assigned_user_name, industrie, statut, sales_stage, priorité";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Champ de groupe pour ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Champ de groupe pour les comptes :';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Champ de groupe pour les Contacts :';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Champ de groupe pour les prospects :';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Champ de groupe pour les opportunités :';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Champ de groupe pour les cas :';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Champ de groupe pour les projets :';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Champ de groupe pour les réunions :';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Champ de groupe pour les Prospects/Cibles :';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Paramètres de géocodage/Google :';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Géocodage API URL :';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'L\'URL du Proxy ou Google Maps API V3'; // PR 3290
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Phrase secrète pour le Proxy :';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'La Phrase secrète  utilisée avec la comparaison Proxy MD5.';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_GET_A_KEY'] = 'Obtenir une clé gratuite pour Google Maps Geocoding API (pour géolocaliser gratuitement un quota important d\'adresses par jour).';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Limite de géocodage :';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "« geocoding_limit » définit la limite de requête lors de la sélection des enregistrements à géocoder.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Limite de géocodage Google :';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "« google_geocoding_limit » définit la imite de géocodage à l'aide de l'API Google Maps.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limite d\'adresses d\'exportation :';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "« export_addresses_limit » définit la limite de requête lors de la sélection des enregistrements à exporter.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Autoriser Types d'emplacement « Approximatif »  :";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "« allow_approximate_location_type » - permet aux types d'emplacement « Approximatif» d'etre pris en compte dans les résultats de géo-codage";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Paramètres de Cache d\'adresse :';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Activer le Cache d\'adresses (Get) :';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "« address_cache_get_enabled » permet au module de cache d'adresse récupérer les données de la table cache.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Activez l\'enregistrement adresse Cache (Save) :';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "« address_cache_save_enabled » permet au module de cache d'adresse à enregistrer des données dans la table cache.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Propriété des Logic Hooks :';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Activer tous les Logic Hooks : ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' autorise les logic hooks pour une mise à jour automatique des relations. Il est recommandé de désactiver lors d'une mise à jour de SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Paramètres du marqueur/mappage :';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limite marqueurs de carte :";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "« map_markers_limit » définit la limite de requête lors de la sélection d'enregistrements à afficher sur une carte.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Latitude de la carte par défaut :";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "« map_default_center_latitude » définit la position de latitude par défaut pour les cartes.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Longitude de la carte par défaut :";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "« map_default_center_longitude » définit la position de longitude par défaut pour les cartes.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Type d'unité par défaut pour la carte :";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' définit l'unité de mesure par défaut type pour calculs de distance. Valeurs : \"mi\" (miles) ou 'km' (kilomètres).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Distance de carte par défaut :";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "« map_default_distance » définit la distance par défaut utilisée pour les cartes.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Ajustement du marqueur en double :";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "« map_duplicate_marker_adjustment » définit un réglage de l'offset à ajouter à la longitude et la latitude en cas de position du repère en double.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Taille de la grille pour les marqueurs Clusterer :";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "« map_clusterer_grid_size » est utilisée pour définir la taille de la grille de calcul de carte avec marqueurs en clusterers.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Marqueurs Clusterer Max Zoom :";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "« map_clusterer_max_zoom » est utilisée pour définir le niveau de zoom maximum  auquel le regroupement ne sera pas appliquée.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Remarque importante : Tous les paramètres enregistrés se trouvent dans la table « config » dans la catégorie « vis-à-vis ». Note, un fichier personnalisé controller.php ne devrait plus être utilisé pour substituer les paramètres.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Zones';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Marqueurs';
$mod_strings['LBL_PARENT_ID'] = 'Parent ID';
$mod_strings['LBL_JJWP_PARTNERS'] = 'Partenaires JJWP';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Obtenir une clé';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Clé d’Api Google';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Veuillez régler la Google Api Key dans le panneau d\'administration de Google Maps.';
