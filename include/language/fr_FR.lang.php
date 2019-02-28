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



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Français (France) - fr_FR',
    'moduleList' => array(
        'Home' => 'Accueil',
        'ResourceCalendar' => 'Calendrier des ressources',
        'Contacts' => 'Contacts',
        'Accounts' => 'Comptes',
        'Alerts' => 'Alertes',
        'Opportunities' => 'Affaires',
        'Cases' => 'Tickets',
        'Notes' => 'Notes',
        'Calls' => 'Appels',
        'TemplateSectionLine' => 'Ligne de séparation de section',
        'Calls_Reschedule' => 'Replanifier les appels',
        'Emails' => 'E-mails',
        'EAPM' => 'EAPM',
        'Meetings' => 'Réunions',
        'Tasks' => 'Tâches',
        'Calendar' => 'Calendrier',
        'Leads' => 'Prospects',
        'Currencies' => 'Devises',
        'Activities' => 'Activités',
        'Bugs' => 'Bugs',
        'Feeds' => 'Flux RSS',
        'iFrames' => 'Mes sites',
        'TimePeriods' => 'Périodes',
        'ContractTypes' => 'Types de contrat',
        'Schedulers' => 'Planificateur',
        'Project' => 'Projets',
        'ProjectTask' => 'Tâches du Projet',
        'Campaigns' => 'Campagnes',
        'CampaignLog' => 'Log des campagnes',
        'Documents' => 'Documents',
        'DocumentRevisions' => 'Version des documents',
        'Connectors' => 'Connecteurs',
        'Roles' => 'Rôles',
        'Notifications' => 'Notifications',
        'Sync' => 'Synchronisation',
        'Users' => 'Utilisateurs',
        'Employees' => 'Employés',
        'Administration' => 'Administration',
        'ACLRoles' => 'Rôles',
        'InboundEmail' => 'E-mail Entrant',
        'Releases' => 'Versions',
        'Prospects' => 'Cibles',
        'Queues' => 'Files d\'attente',
        'EmailMarketing' => 'E-mail marketing',
        'EmailTemplates' => 'Modèles d\'E-mail',
        'ProspectLists' => 'Cibles - Listes',
        'SavedSearch' => 'Recherches sauvegardées',
        'UpgradeWizard' => 'Assistant de mise à jour',
        'Trackers' => 'Suivis',
        'TrackerSessions' => 'Suivi des sessions',
        'TrackerQueries' => 'Suivi des requêtes',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Newsletters',
        'SugarFeed' => 'Flux activités internes',
        'SugarFavorites' => 'Favoris SuiteCRM',

        'OAuthKeys' => 'OAuth Clé Consommateur',
        'OAuthTokens' => 'Jetons OAuth',
        'OAuth2Clients' => 'Clients OAuth',
        'OAuth2Tokens' => 'Jetons OAuth',
    ),

    'moduleListSingular' => array(
        'Home' => 'Accueil',
        'Dashboard' => 'Tableau de bord',
        'Contacts' => 'Contacts',
        'Accounts' => 'Comptes',
        'Opportunities' => 'Affaires',
        'Cases' => 'Ticket',
        'Notes' => 'Notes',
        'Calls' => 'Appels',
        'Emails' => 'E-mail',
        'EmailTemplates' => 'Modèle d\'E-mail',
        'Meetings' => 'Réunions',
        'Tasks' => 'Tâches',
        'Calendar' => 'Calendrier',
        'Leads' => 'Prospect',
        'Activities' => 'Activités',
        'Bugs' => 'Suivi bugs',
        'KBDocuments' => 'Base de connaissance',
        'Feeds' => 'Flux RSS',
        'iFrames' => 'Mon portail',
        'TimePeriods' => 'Périodes',
        'Project' => 'Projets',
        'ProjectTask' => 'Tâches projet',
        'Prospects' => 'Cible',
        'Campaigns' => 'Campagnes',
        'Documents' => 'Documents',
        'Sync' => 'Synchronisation',
        'Users' => 'Utilisateurs',
        'SugarFavorites' => 'Favoris SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Oui',
        '2' => 'Fev',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analyste',
        'Competitor' => 'Concurrent',
        'Customer' => 'Client',
        'Integrator' => 'Intégrateur',
        'Investor' => 'Investisseur',
        'Partner' => 'Partenaire',
        'Press' => 'Presse',
        'Prospect' => 'Prospect',
        'Reseller' => 'Revendeur',
        'Other' => 'Autre',
    ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Textile',
        'Banking' => 'Banque',
        'Biotechnology' => 'Biotechnologie',
        'Chemicals' => 'Industrie Chimique',
        'Communications' => 'Communication',
        'Construction' => 'Construction - BTP',
        'Consulting' => 'Conseil',
        'Education' => 'Formation',
        'Electronics' => 'Informatique - Electronique',
        'Energy' => 'Énergie',
        'Engineering' => 'Ingénierie',
        'Entertainment' => 'Culture-Presse',
        'Environmental' => 'Environnement',
        'Finance' => 'Finance',
        'Government' => 'Administration',
        'Healthcare' => 'Santé',
        'Hospitality' => 'Hopitaux',
        'Insurance' => 'Assurance',
        'Machinery' => 'Industrie lourde',
        'Manufacturing' => 'Industrie Manufact.',
        'Media' => 'Média',
        'Not For Profit' => 'Sans but lucratif',
        'Recreation' => 'Loisir',
        'Retail' => 'Commerce détail',
        'Shipping' => 'Transports',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Télécommunications',
        'Transportation' => 'Voyage-hôtellerie',
        'Utilities' => 'Services',
        'Other' => 'Autre',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Appel de prospection',
        'Existing Customer' => 'Client existant',
        'Self Generated' => 'Récurrent',
        'Employee' => 'Employé',
        'Partner' => 'Partenaire',
        'Public Relations' => 'Relation publique',
        'Direct Mail' => 'Mailing',
        'Conference' => 'Conférence',
        'Trade Show' => 'Salon',
        'Web Site' => 'Site web',
        'Word of mouth' => 'Recommandé',
        'Email' => 'E-mail',
        'Campaign' => 'Campagne',
        'Other' => 'Autre',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Récurrent',
        'New Business' => 'Nouvelle affaire',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Revenu',
        'Investment' => 'Investissement',
        'Expected_Revenue' => 'Revenu attendu',
        'Budget' => 'Budget',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Décideur Principal',
        'Business Decision Maker' => 'Acheteur',
        'Business Evaluator' => 'Chef de projet',
        'Technical Decision Maker' => 'Responsable technique',
        'Technical Evaluator' => 'Utilisateur',
        'Executive Sponsor' => 'Sponsor',
        'Influencer' => 'Influenceur',
        'Other' => 'Autre',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Contact Principal',
        'Alternate Contact' => 'Contact Alternatif',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15 jours',
        'Net 30' => 'Net 30 jours',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospection',
        'Qualification' => 'Qualification',
        'Needs Analysis' => 'Analyse des besoins',
        'Value Proposition' => 'Chiffrage',
        'Id. Decision Makers' => 'Identifier les décideurs',
        'Perception Analysis' => 'Evaluation',
        'Proposal/Price Quote' => 'Devis / Proposition',
        'Negotiation/Review' => 'Négociation',
        'Closed Won' => 'Gagné',
        'Closed Lost' => 'Perdu',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Appel',
        'Meeting' => 'Réunion',
        'Task' => 'Tâche',
        'Email' => 'E-mail',
        'Note' => 'Note',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'M.',
        'Ms.' => 'Mlle',
        'Mrs.' => 'Mme',
        'Miss' => 'Mlle',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minute avant',
        300 => '5 minutes avant',
        600 => '10 minutes avant',
        900 => '15 minutes avant',
        1800 => '30 minutes avant',
        3600 => '1 heure avant',
        7200 => '2 heures avant',
        10800 => '3 heures avant',
        18000 => '5 heures avant',
        86400 => '1 jour avant',
    ),

    'task_priority_default' => 'Moyenne',
    'task_priority_dom' => array(
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'task_status_default' => 'Non démarré',
    'task_status_dom' => array(
        'Not Started' => 'Non démarrée',
        'In Progress' => 'En cours',
        'Completed' => 'Réalisée',
        'Pending Input' => 'En attente',
        'Deferred' => 'Reportée',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planifiée',
        'Held' => 'Tenue',
        'Not Held' => 'Annulée',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Autre',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planifiée',
        'Held' => 'Tenue',
        'Not Held' => 'Annulée',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Entrant',
        'Outbound' => 'Sortant',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'In Process' => 'En cours',
        'Converted' => 'Converti',
        'Recycled' => 'Réactivé',
        'Dead' => 'Mort',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Haute',
        'P2' => 'Moyenne',
        'P3' => 'Basse',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Utilisateur normal',
        'Administrator' => 'Administrateur',
    ),
    'user_status_dom' => array(
        'Active' => 'Activé',
        'Inactive' => 'Désactivé',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Code email',
    ),
    'employee_status_dom' => array(
        'Active' => 'Activé',
        'Terminated' => 'Inactif',
        'Leave of Absence' => 'Absence temporaire',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'project_task_priority_default' => 'Moyenne',

    'project_task_status_options' => array(
        'Not Started' => 'Non démarrée',
        'In Progress' => 'En cours',
        'Completed' => 'Réalisée',
        'Pending Input' => 'En attente',
        'Deferred' => 'Reportée',
    ),
    'project_task_utilization_options' => array(
        '0' => 'aucun',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Brouillon',
        'In Review' => 'En relecture',
        'Underway' => 'En cours',
        'On_Hold' => 'Suspendu',
        'Completed' => 'Réalisée',
    ),
    'project_status_default' => 'Brouillon',

    'project_duration_units_dom' => array(
        'Days' => 'Jours',
        'Hours' => 'Heures',
    ),

    'activity_status_type_dom' => array(
        '' => '--Aucun--',
        'active' => 'Activé',
        'inactive' => 'Désactivé',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Comptes',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Comptes',
        'Opportunities' => 'Affaires',
        'Cases' => 'Tickets',
        'Leads' => 'Prospect',
        'Contacts' => 'Contacts', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Suivi bugs',
        'Project' => 'Projets',

        'Prospects' => 'Cible',
        'ProjectTask' => 'Tâches projet',

        'Tasks' => 'Tâches',

    ),
// PR 4606
    'record_type_display_notes' => array(
        'Accounts' => 'Comptes',
        'Contacts' => 'Contacts',
        'Opportunities' => 'Affaires',
        'Campaigns' => 'Campagnes',
        'Tasks' => 'Tâches',
        'Emails' => 'E-mail',

        'Bugs' => 'Suivi bugs',
        'Project' => 'Projets',
        'ProjectTask' => 'Tâches projet',
        'Prospects' => 'Cible',
        'Cases' => 'Tickets',
        'Leads' => 'Prospect',

        'Meetings' => 'Réunions',
        'Calls' => 'Appels',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Comptes',
        'Contacts' => 'Contacts',
        'Tasks' => 'Tâches',
        'Opportunities' => 'Affaires',

        'Bugs' => 'Suivi bugs',
        'Cases' => 'Tickets',
        'Leads' => 'Prospect',

        'Project' => 'Projets',
        'ProjectTask' => 'Tâches projet',

        'Prospects' => 'Cible',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Devis',
        'AOS_Invoices' => 'Factures',
        'AOS_Contracts' => 'Contrats',
    ),
    'issue_priority_default_key' => 'Moyenne',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepté',
        'Duplicate' => 'Dupliquer',
        'Closed' => 'Fermé',
        'Out of Date' => 'Périmé',
        'Invalid' => 'Invalide',
    ),

    'issue_status_default_key' => 'Nouveau',
    'issue_status_dom' => array(
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Closed' => 'Fermé',
        'Pending' => 'En attente',
        'Rejected' => 'Rejeté',
    ),

    'bug_priority_default_key' => 'Moyenne',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepté',
        'Duplicate' => 'Doublon',
        'Fixed' => 'Fixé',
        'Out of Date' => 'Périmé',
        'Invalid' => 'Invalide',
        'Later' => 'Reporté',
    ),
    'bug_status_default_key' => 'Nouveau',
    'bug_status_dom' => array(
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Closed' => 'Fermé',
        'Pending' => 'En attente',
        'Rejected' => 'Rejeté',
    ),
    'bug_type_default_key' => 'Suivi bugs',
    'bug_type_dom' => array(
        'Defect' => 'Défaut',
        'Feature' => 'Fonctionnalité',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administration',
        'Product' => 'Produits',
        'User' => 'Utilisateur',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interne',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'E-mail',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Comptes',
        'Activities' => 'Activités',
        'Bugs' => 'Anomalies',
        'Calendar' => 'Calendrier',
        'Calls' => 'Appels',
        'Campaigns' => 'Campagnes',
        'Cases' => 'Tickets',
        'Contacts' => 'Contacts',
        'Currencies' => 'Devises',
        'Dashboard' => 'Tableau de bord',
        'Documents' => 'Documents',
        'Emails' => 'E-mails',
        'Feeds' => 'Flux',
        'Forecasts' => 'Prévisions',
        'Help' => 'Aide',
        'Home' => 'Accueil',
        'Leads' => 'Prospects',
        'Meetings' => 'Réunions',
        'Notes' => 'Notes',
        'Opportunities' => 'Affaires',
        'Outlook Plugin' => 'Plugin Outlook',
        'Projects' => 'Projets',
        'Quotes' => 'Devis',
        'Releases' => 'Versions',
        'RSS' => 'Flux RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Mise à Jour',
        'Users' => 'Utilisateurs',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planifiée',
        'Active' => 'Activé',
        'Inactive' => 'Désactivé',
        'Complete' => 'Terminée',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Téléprospection',
        'Mail' => 'Courrier',
        'Email' => 'E-mail',
        'Print' => 'Impression',
        'Web' => 'Web',
        'Radio' => 'Bouton Radio',
        'Television' => 'Télévision',
        'NewsLetter' => 'Newsletter',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Hebdomadaire',
        'Monthly' => 'Mensuel',
        'Quarterly' => 'Trimestrielle',
        'Annually' => 'Annuelle',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Janvier',
        '2' => 'Février',
        '3' => 'Mars',
        '4' => 'Avril',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juillet',
        '8' => 'Août',
        '9' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Fév',
        '3' => 'Mars',
        '4' => 'Avr',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juil',
        '8' => 'Août',
        '9' => 'Sept',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Déc',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Le dimanche',
        '2' => 'Le lundi',
        '3' => 'Le mardi',
        '4' => 'Le mercredi',
        '5' => 'Le jeudi',
        '6' => 'Le vendredi',
        '7' => 'Le samedi',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dim',
        '2' => 'Lun',
        '3' => 'Mar',
        '4' => 'Mer',
        '5' => 'Jeu',
        '6' => 'Ven',
        '7' => 'Sam',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_email_types' => array(
        'out' => 'Envoyé',
        'archived' => 'Archivé',
        'draft' => 'Brouillon',
        'inbound' => 'Entrant',
        'campaign' => 'Campagne',
    ),
    'dom_email_status' => array(
        'archived' => 'Archivé',
        'closed' => 'Fermé',
        'draft' => 'Brouillon',
        'read' => 'Lu',
        'replied' => 'Répondu',
        'sent' => 'Envoyé',
        'send_error' => 'Erreur Envoi',
        'unread' => 'Non Lu',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archivé',
    ),

    'dom_email_server_type' => array(
        '' => '--Aucun(e)--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-- Aucun --',
        'createcase' => 'Créer un Ticket',
        'bounce' => 'Gestion des Rebonds',
    ),
    'dom_email_distribution' => array(
        '' => '--Aucun(e)--',
        'direct' => 'Assignation directe',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Moins chargé',
    ),
    'dom_email_errors' => array(
        1 => 'Ne sélectionner qu’un seul utilisateur lors de l’affectation directe des éléments.',
        2 => 'Vous devez affecter uniquement des éléments contrôlés lors de l’affectation directe des éléments.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Oui',
        'bool_false' => 'Non',
    ),
    'dom_int_bool' => array(
        1 => 'Oui',
        0 => 'Non',
    ),
    'dom_switch_bool' => array(
        'on' => 'Sur',
        'off' => 'Non',
        '' => '--Aucun(e)--',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Client de messagerie SuiteCRM',
        'mailto' => 'Client E-mail Externe',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Format d\'E-mail par défaut',
        'html' => 'E-mail HTML',
        'plain' => 'E-mail Texte Brut',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Temps d&#39;execution dépassé, Non Executé',
        'ready' => 'Prêt',
        'in progress' => 'En cours',
        'failed' => 'Echec',
        'completed' => 'Réalisée',
        'no curl' => 'Non exécuté : cURL non disponible',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Activé',
        'Inactive' => 'Désactivé',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minutes',
        'hour' => 'Heures',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Base de connaissance',
        'Sales' => 'Ventes',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archivé',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketing Secondaire',
        'Product Brochures' => 'Brochures des produits',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Activé',
        'Draft' => 'Brouillon',
        'FAQ' => 'FAQ',
        'Expired' => 'Périmé',
        'Under Review' => 'En cours de révision',
        'Pending' => 'En attente',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Fusion d\'E-mails',
        'eula' => 'Licence d\'utilisation',
        'nda' => 'Accord de confidentialité',
        'license' => 'Termes de Licence',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Accepter',
        'decline' => 'Décliner',
        'tentative' => 'Incertain',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Accepté',
        'decline' => 'Refusé',
        'tentative' => 'Incertain',
        'none' => 'Sans Pièce Jointe',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => '--Aucun(e)--',
        'Daily' => 'Quotidien',
        'Weekly' => 'Hebdomadaire',
        'Monthly' => 'Mensuel',
        'Yearly' => 'Annuel',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'jour(s)',
        'Weekly' => 'semaine(s)',
        'Monthly' => 'mois',
        'Yearly' => 'année(s)',
    ),

    'duration_dom' => array(
        '' => '--Aucun(e)--',
        '900' => '15 minutes',
        '1800' => '30 minutes',
        '2700' => '45 minutes',
        '3600' => '1 heure',
        '5400' => '1.5 heures',
        '7200' => '2 heures',
        '10800' => '3 heures',
        '21600' => '6 heures',
        '86400' => '1 jour',
        '172800' => '2 jours',
        '259200' => '3 jours',
        '604800' => '1 semaine',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Défaut',
        'seed' => 'Financement',
        'exempt_domain' => 'Liste d\'exclusion par domaine',
        'exempt_address' => 'Liste d\'exclusion par adresses E-mails',
        'exempt' => 'Liste d\'exclusion par ID',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Activé',
        'inactive' => 'Désactivé',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Messages envoyés / tentés',
        'send error' => 'Rebonds, Autres',
        'invalid email' => 'Rebonds, E-mails invalides',
        'link' => 'Liens cliqués',
        'viewed' => 'Message lus',
        'removed' => 'Désinscrit',
        'lead' => 'Prospects créés',
        'contact' => 'Contacts créés',
        'blocked' => 'Supprimés par adresse ou domaine',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contacts',
        'Users' => 'Utilisateurs',
        'Prospects' => 'Cibles',
        'Leads' => 'Prospects',
        'Accounts' => 'Comptes',
    ),
    'merge_operators_dom' => array(
        'like' => 'contient',
        'exact' => 'est exactement',
        'start' => 'commence par',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Oui',
        'false' => 'Non',
        'required' => 'Requis',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Désactivé',
        1 => 'Activé',
    ),

    'projects_priority_options' => array(
        'high' => 'Haut',
        'medium' => 'Moyen',
        'low' => 'Bas',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Non démarré',
        'inprogress' => 'En cours',
        'completed' => 'Réalisée',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Afficher la légende',
        'collapselegend' => 'Cacher la légende',
        'clickfordrilldown' => 'Cliquer pour développer',
        'detailview' => 'Vue détaillée...',
        'piechart' => 'Graphique en camembert',
        'groupchart' => 'Groupe de graphique',
        'stackedchart' => 'Graphique empilé',
        'barchart' => 'Histogramme',
        'horizontalbarchart' => 'Diagramme horizontal',
        'linechart' => 'Graphique courbe',
        'noData' => 'Donnée non disponible',
        'print' => 'Imprimer',
        'pieWedgeName' => 'sections',
    ),
    'release_status_dom' => array(
        'Active' => 'Activé',
        'Inactive' => 'Désactivé',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Apostrophe (&#39;)',
        '"' => 'Guillemet double (&#34;)',
        '' => '--Aucun(e)--',
        'other' => 'Autre :',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Autre :',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nouvelle fenêtre',
        '_self' => 'Fenêtre courante',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => '-1',
        '30' => 'Toutes les 30 secondes',
        '60' => 'Toutes les minutes',
        '180' => 'Toutes les 3 minutes',
        '300' => 'Toutes les 5 minutes',
        '600' => 'Toutes les 10 minutes',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => '- jamais -',
        '30' => 'Toutes les 30 secondes',
        '60' => 'Toutes les minutes',
        '180' => 'Toutes les 3 minutes',
        '300' => 'Toutes les 5 minutes',
        '600' => 'Toutes les 10 minutes',
    ),
    'date_range_search_dom' => array(
        '=' => 'Le',
        'not_equal' => 'Différent du',
        'greater_than' => 'Après le',
        'less_than' => 'Avant le',
        'last_7_days' => 'Dans les 7 derniers jours',
        'next_7_days' => 'Dans les 7 prochains jours',
        'last_30_days' => 'Dans les 30 derniers jours',
        'next_30_days' => 'Dans les 30 prochains jours',
        'last_month' => 'Le mois dernier',
        'this_month' => 'Ce mois-ci',
        'next_month' => 'Le mois prochain',
        'last_year' => 'L&#39;année dernière',
        'this_year' => 'Cette année',
        'next_year' => 'L&#39;année prochaine',
        'between' => 'Entre',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Le',
        'not_equal' => 'Différent de',
        'greater_than' => 'Supérieur à',
        'greater_than_equals' => 'Supérieur ou égal à',
        'less_than' => 'Inférieur à',
        'less_than_equals' => 'Inférieur ou égal à',
        'between' => 'Entre',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Copier',
        'move' => 'Déplacer',
        'donothing' => 'Ne rien faire',
    ),
);

$app_strings = array(
    'LBL_EMAIL_CODE' => 'Code email:',
    'LBL_SEND' => 'Envoyer',
    'LBL_LOGOUT' => 'Déconnexion',
    'LBL_TOUR_NEXT' => 'Suivant',
    'LBL_TOUR_SKIP' => 'Passer',
    'LBL_TOUR_BACK' => 'Précédent',
    'LBL_TOUR_TAKE_TOUR' => 'Faire le tour',
    'LBL_MOREDETAIL' => 'Plus de détails' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editer à la volée' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Voir' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtre' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Ajouter une adresse E-mail' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Masquer/Afficher' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Effacer' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Supprimer l’adresse E-mail' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Désinscription',
    'LBL_ID_FF_OPT_IN' => 'Opt-In',
    'LBL_ID_FF_INVALID' => 'Rendre non-valide',
    'LBL_ADD' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo société' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Popups des connecteurs',
    'LBL_CLOSEINLINE' => 'Fermer',
    'LBL_VIEWINLINE' => 'Voir',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Imprimer',
    'LBL_HELP' => 'Aide',
    'LBL_ID_FF_SELECT' => 'Sélectionner',
    'DEFAULT' => 'Défaut', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => 'Trier',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Activer SMTP au travers de SSL ou TLS ?',
    'LBL_NO_ACTION' => 'Aucune action avec ce nom : %s',
    'LBL_NO_SHORTCUT_MENU' => 'Aucune action n’est disponible.',
    'LBL_NO_DATA' => 'Aucune donnée',

    'LBL_ERROR_UNDEFINED_BEHAVIOR' => 'Une erreur inattendue s\'est produite.', //PR 3669
    'LBL_ERROR_UNHANDLED_VALUE' => 'Une valeur n’a pas été manipulée correctement et empêche un processus de s\'exécuter.', //PR 3669
    'LBL_ERROR_UNUSABLE_VALUE' => 'Une valeur inutilisable a été trouvée qui empêche un processus de s\'exécuter.', //PR 3669
    'LBL_ERROR_INVALID_TYPE' => 'Le type d\'une valeur est différent de ce qui est attendu.', //PR 3669

    'LBL_ROUTING_FLAGGED' => 'Ajouter un drapeau',
    'LBL_NOTIFICATIONS' => 'Notifications',

    'LBL_ROUTING_TO' => 'à',
    'LBL_ROUTING_TO_ADDRESS' => 'à l&#39;adresse',
    'LBL_ROUTING_WITH_TEMPLATE' => 'avec le modèle',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Vous avez des valeurs pour les champs numéro de téléphone et adresse. Pour remplacer ces valeurs avec celles du compte que vous avez sélectionné, cliquez sur OK. Pour garder les valeurs actuelles, cliquez sur Annuler.',
    'LBL_DROP_HERE' => '[Posez ici]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Mettre Gmail par défaut',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nom',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Mot de passe SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Port SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Utilisateur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Défaut',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Vous avez oublié de définir l\'utilisateur et le mot de passe SMTP',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Définissez les paramètres des comptes E-mails que vous souhaitez visualiser dans votre CRM.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Définissez les paramètres des serveurs SMTP disponibles pour les envois d\'E-mails depuis votre CRM.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Terminé',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Vider',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'A :',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc :',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Cci :',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'A / Cc / Cci',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Adresse E-mail',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtre',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nom',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Aucune adresse trouvée',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Sauvegarder et ajouter au carnet d\'adresse',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Carnet d\'adresses',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Carnet d\'adresses',
    'LBL_EMAIL_REPORTS_TITLE' => 'Rapports',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Attention, le SMTP que vous voulez supprimer est asssocié à un compte E-mail. Voulez-vous continuer ?',
    'LBL_EMAIL_ADDRESSES' => 'E-mail',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Adresse E-mail',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Importer dans SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Assignation',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENT' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENTS' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENTS2' => 'A partir des documents SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Modèles d\'attachements',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fichier',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
    'LBL_EMAIL_BCC' => 'CCI',
    'LBL_EMAIL_CANCEL' => 'Annuler',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Encodage',
    'LBL_EMAIL_CHECK' => 'Relever les E-mails',
    'LBL_EMAIL_CHECKING_NEW' => 'Relever les nouveaux E-mails',
    'LBL_EMAIL_CHECKING_DESC' => 'Le premier contrôle des nouveaux comptes peut prendre un certain temps. Veuillez patienter.',
    'LBL_EMAIL_CLOSE' => 'Fermer',
    'LBL_EMAIL_COFFEE_BREAK' => 'Recherche de nouveaux E-mails. Le traitement de boîtes E-mails volumineuses prend plus de temps. Veuillez patienter.',

    'LBL_EMAIL_COMPOSE' => 'Composer un E-mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Votre E-mail est sans destinataire.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Le contenu du mail est vide. Envoyer tout de même ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Le sujet de votre E-mail est vide. Envoyer tout de même ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(Aucun sujet)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Veuillez saisir une adresse E-mail valide pour les champs A, CC et CCI',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Supprimer cet E-mail?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Voulez-vous vraiment supprimer cette signature ?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-mail envoyé',

    'LBL_EMAIL_CREATE_NEW' => '-- Créer depuis --',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multiples',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vide',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Date d\'envoi',
    'LBL_EMAIL_DATE_TODAY' => 'Aujourd\'hui',
    'LBL_EMAIL_DELETE' => 'Supprimer',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer le(s) message(s) sélectionné(s) ?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-mail(s) supprimé(s) avec succès.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Suppression des messages',
    'LBL_EMAIL_DETAILS' => 'Détails',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Seule l\'adresse principale est utilisée quand vous travaillez avec les contacts.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Vider la poubelle',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Suppression des messages envoyés',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Vidage des fichiers du cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Aucun E-mail à afficher.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Aucune adresse E-mail à afficher.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Le nom du dossier doit être unique et non vide. Veuillez essayer à nouveau.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Impossible de supprimer le dossier. Ce dossier où l\'un de ses sous-dossier est associé à une boîte E-mail.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ne peut pas déterminer le dossier lié au contexte. Essayer de nouveau.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Vérifiez vos paramètres.',
    'LBL_EMAIL_ERROR_DESC' => 'Erreurs détectées : ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Vous n&#39;avez pas accès à cette section. Veuillez contacter votre administrateur système pour obtenir un accès.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Les noms de dossier de SuiteCRM doivent être uniques.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Veuillez saisir des critères de recherche.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Une erreur est survenue',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Message supprimé du serveur',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Chaque message est supprimé du serveur ou déplacé vers un dossier différent',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Impossible d&#39;accéder au Serveur Mail. Veuillez contacter un administrateur du Serveur Mail.',
    'LBL_EMAIL_ERROR_MOVE' => 'Le déplacement des E-mails entre serveurs et / ou comptes n\'est pas encore supporté.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Erreur lors du déplacement',
    'LBL_EMAIL_ERROR_NAME' => 'Nom requis',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Adresse émetteur requise. Veuillez saisir une adresse valide.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Veuillez ajouter un fichier',
    'LBL_EMAIL_ERROR_SERVER' => 'L\'adresse du serveur E-mail est requise.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Le compte mail n&#39;a pas pu être sauvegardé.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Le serveur de mail a mis trop de temps à répondre',
    'LBL_EMAIL_ERROR_USER' => 'Identifiant de connexion requis',
    'LBL_EMAIL_ERROR_PORT' => 'Port du serveur mail requis',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protocole du serveur mail requis',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Dossier monitoré requis',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Dossier Poubelle requis',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Information indisponible',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Le SMTP n&#39;est pas configuré.',
    'LBL_EMAIL_ERROR_SENDING' => 'Erreur envoi d’E-mail. S’il vous plaît contactez votre administrateur pour assistance.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0',        null, null, '.gif', '') . 'Dossiers',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder',        'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Ajouter',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Ajouter un dossier',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Renommer un dossier',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Sauvegarder',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Dossier Parent',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ce dossier ne peut être modifié',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce dossier ?\nCeci est irréversible.\nLa suppression d&#39;un dossier entraîne la suppression de tous ses sous-dossiers !',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nom du Dossier',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Veuillez sélectionner un dossier pour effectuer cette action.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Gestion des dossiers',

    'LBL_EMAIL_FORWARD' => 'Transférer',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Téléchargement de l\'E-mail [[count]] sur [[total]]',
    'LBL_EMAIL_FROM' => 'De',
    'LBL_EMAIL_GROUP' => 'Groupe',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Groupe',
    'LBL_EMAIL_HOME_FOLDER' => 'Accueil',
    'LBL_EMAIL_IE_DELETE' => 'Suppression du compte',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Effacement de la signature',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce compte ?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Suppression effectuée.',
    'LBL_EMAIL_IE_SAVE' => 'Sauvegarde des infos',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importer l\'E-mail',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importer dans SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Import',
    'LBL_EMAIL_INVALID' => 'Invalide',
    'LBL_EMAIL_LOADING' => 'Chargement en cours...',
    'LBL_EMAIL_MARK' => 'Marquer',
    'LBL_EMAIL_MARK_FLAGGED' => '"avec Drapeau"',
    'LBL_EMAIL_MARK_READ' => '"lu"',
    'LBL_EMAIL_MARK_UNFLAGGED' => '"sans Drapeau"',
    'LBL_EMAIL_MARK_UNREAD' => '"non-lu"',
    'LBL_EMAIL_ASSIGN_TO' => 'Assigné à',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Créer un dossier',
    'LBL_EMAIL_MENU_COMPOSE' => 'Envoyé à',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Supprimer le dossier',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Corbeille vide',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchroniser',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Nettoyer les fichiers de cache',
    'LBL_EMAIL_MENU_REMOVE' => 'Supprimer',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Renommer le dossier',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Renommer le dossier',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Veuillez effectuer une sélection pour réaliser cette action.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Créer un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Supprimer un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Vider toutes les corbeilles de ce compte',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Marquer ces E-mails comme lus',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Enlever les Drapeaux de ces E-mails',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Renommer un dossier (distant ou dans SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'messages',

    'LBL_EMAIL_ML_NAME' => 'Nom de liste de diffusion',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Sélectionner l\'adresse d\'une liste de diffusion',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Adresse de liste de diffusion disponible',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Clic</b> pour une sélection multiple<br />(Pour Mac utiliser <b>CMD-Clic</b>)',

    'LBL_EMAIL_NO' => 'Non',
    'LBL_EMAIL_NOT_SENT' => 'Le système est ne peut pas traiter votre demande. Veuillez contacter l\'administrateur.',

    'LBL_EMAIL_OK' => 'Ok',
    'LBL_EMAIL_ONE_MOMENT' => 'Veuillez patienter...',
    'LBL_EMAIL_OPEN_ALL' => 'Ouvrir dans un onglet',
    'LBL_EMAIL_OPTIONS' => 'Options',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Création rapide',
    'LBL_EMAIL_OPT_OUT' => 'Désinscrit',
    'LBL_EMAIL_OPT_IN' => 'Activé',
    'LBL_EMAIL_OPT_IN_AND_INVALID' => 'Activé et Invalide',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Désinscrit et adresses invalides',
    'LBL_EMAIL_PERFORMING_TASK' => 'Action en cours...',
    'LBL_EMAIL_PRIMARY' => 'Principal',
    'LBL_EMAIL_PRINT' => 'Imprimer',

    'LBL_EMAIL_QC_BUGS' => 'Suivi bugs',
    'LBL_EMAIL_QC_CASES' => 'Ticket',
    'LBL_EMAIL_QC_LEADS' => 'Prospect',
    'LBL_EMAIL_QC_CONTACTS' => 'Contacts',
    'LBL_EMAIL_QC_TASKS' => 'Tâches',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Affaire',
    'LBL_EMAIL_QUICK_CREATE' => 'Création rapide',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Mise à jour des dossiers',
    'LBL_EMAIL_RELATE_TO' => 'Relatif à',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Enregistrement(s) lié(s)',
    'LBL_EMAIL_RECORD' => 'Enregistrement de l\'E-mail',
    'LBL_EMAIL_REMOVE' => 'Supprimer',
    'LBL_EMAIL_REPLY' => 'Répondre',
    'LBL_EMAIL_REPLY_ALL' => 'Répondre à tous',
    'LBL_EMAIL_REPLY_TO' => 'Répondre à',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Récupérer le message',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Récupération de l\'E-mail enregistré',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Merci de sélectionner un seul enregistrement !',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Retourner au module précédent ?',
    'LBL_EMAIL_REVERT' => 'Revenir',
    'LBL_EMAIL_RELATE_EMAIL' => 'E-mail relié',

    'LBL_EMAIL_RULES_TITLE' => 'Gestion des règles',

    'LBL_EMAIL_SAVE' => 'Sauvegarder',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Sauvegarder &amp; Refaire',
    'LBL_EMAIL_SAVE_DRAFT' => 'Sauvegarder le brouillon',
    'LBL_EMAIL_DRAFT_SAVED' => 'Le brouillon a été sauvegardé',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Date de début',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Date de fin',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Aucun résultat pour vos critères de recherche.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Résultats de recherche',

    'LBL_EMAIL_SELECT' => 'Sélectionner',

    'LBL_EMAIL_SEND' => 'Envoyer',
    'LBL_EMAIL_SENDING_EMAIL' => 'Envoi en cours...',

    'LBL_EMAIL_SETTINGS' => 'Paramètres',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Comptes E-mail',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Effacer le formulaire',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Vérifier les nouveaux E-mails',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'De (adresse)',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adresse E-mail de réception :',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'De (nom)',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Répondre',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchroniser tout les comptes',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Un E-mail a été envoyé. Vérifiez si vous avez bien reçu cet E-mail.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Voir le journal SMTP complet',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Voulez-vous effectuer une synchronisation complète ? Pour les comptes volumineux cela peut prendre plusieurs minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Maintenez enfoncée la touche Shift ou la touche Ctrl pour sélectionner plusieurs dossiers',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Général',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Créer un "dossier de groupe"',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Éditer le "dossier de groupe"',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nom du compte E-mail',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Définir le nombre d\'E-mails par page. Un rafraichissement de la page est nécessaire pour visualiser la modification.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Récupére les infos',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Vos paramètres ont été enregistrés.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Envoyer les E-mails en texte brut uniquement',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Nombre d\'E-mails par page',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Affichage',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Préférences',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dossier(s) "Perso" disponible(s)',
    'LBL_EMAIL_ERROR_PREPEND' => 'Erreur :',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Serveur SMTP sélectionné invalide pour votre compte E-mail. Configurer le serveur SMTP ou en choisir un autre',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Vous n\'avez pas configuré le serveur SMTP pour votre compte E-mail. Configurez ou choisissez un serveur SMTP pour le compte E-mail.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Signature par défaut',
    'LBL_EMAIL_SIGNATURES' => 'Signatures',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Autre',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Dossiers distants ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[dossiers SuiteCRM]',
    'LBL_EMAIL_SUBJECT' => 'Sujet',
    'LBL_EMAIL_SUCCESS' => 'Succès',
    'LBL_EMAIL_SUGAR_FOLDER' => 'Dossier SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Le modèle d\'E-mail est vide',
    'LBL_EMAIL_TEMPLATES' => 'Modèles',
    'LBL_EMAIL_TO' => 'A',
    'LBL_EMAIL_VIEW' => 'Voir',
    'LBL_EMAIL_VIEW_HEADERS' => 'Voir l\'en-tête',
    'LBL_EMAIL_VIEW_RAW' => 'Voir format brut',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Cette fonctionnalité n\'est pas supportée quand vous utilisez le protocole POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Lien texte par défaut.',
    'LBL_EMAIL_YES' => 'Oui',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Envoyer un E-mail de test',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'E-mail de test envoyé !',
    'LBL_EMAIL_MESSAGE_NO' => 'Message N°', // Counter. Message number xx
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import terminé',
    'LBL_EMAIL_IMPORT_FAIL' => 'Échec de l\'import. Le message est peut être déjà importé, ou bien il a été supprimé du serveur',

    'LBL_LINK_NONE' => 'Aucun',
    'LBL_LINK_ALL' => 'Tous',
    'LBL_LINK_RECORDS' => 'Enregister',
    'LBL_LINK_SELECT' => 'Sélectionner',
    'LBL_LINK_ACTIONS' => 'Actions', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Confirmation',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Souhaitez-vous vous terminer cette activité (#module#) ?',
    'LBL_INVALID_FILE_EXTENSION' => 'Extension de fichier invalide',

    'ERR_AJAX_LOAD' => 'Une erreur a été recontrée :',
    'ERR_AJAX_LOAD_FAILURE' => 'Il y a eu une erreur lors du traitement de votre demande, veuillez réessayer ultérieurement.',
    'ERR_AJAX_LOAD_FOOTER' => 'Si cette erreur persiste, veuillez demander à votre administrateur de désactiver Ajax pour ce module',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Le séparateur des décimales ne peut pas être le même que celui des milliers.\n\n  Merci de modifier ces valeurs.',
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
    'ERR_EXPORT_DISABLED' => 'Exports Désactivés.',
    'ERR_EXPORT_TYPE' => 'Erreur d&#39;exportation',
    'ERR_INVALID_EMAIL_ADDRESS' => 'ce n\'est pas une adresse E-mail valide.',
    'ERR_INVALID_FILE_REFERENCE' => 'Référence Fichier Invalide',
    'ERR_NO_HEADER_ID' => 'Cette fonctionnalité n&#39;est pas supportée dans ce thème.',
    'ERR_NOT_ADMIN' => 'Accès non autorisé à l&#39;administration.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) :',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) invalide(s) :',
    'ERR_INVALID_VALUE' => 'Valeur incorrecte :',
    'ERR_NO_SUCH_FILE' => 'Le fichier n&#39;existe pas sur le système',
    'ERR_NO_SINGLE_QUOTE' => 'Impossible d&#39;utiliser le simple guillemet pour',
    'ERR_NOTHING_SELECTED' => 'Merci de sélectionner un élément pour continuer.',
    'ERR_SELF_REPORTING' => 'Un utilisateur ne peut pas se reporter à lui-même.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Pas de correspondance pour le champ : ',
    'ERR_SQS_NO_MATCH' => 'Pas de correspondance',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Veuillez spécifier une &#39;clé&#39; d&#39;index dans les paramètres d&#39;affichage pour les Meta-données',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Erreur : Le nom du portail est déjà assigné à un autre contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'La valeur du champ n&#39;est pas compatible avec le format défini',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Une erreur s&#39;est produite lorsque vous tentez de sauvegarder lien externe.',
    'ERR_NO_DB' => 'Connexion impossible à la base de données. Veuillez consulter suitecrm.log pour plus de détails.',
    'ERR_DB_FAIL' => 'Défaillance de la base de données. Veuillez consulter suitecrm.log pour plus de détails.',
    'ERR_DB_VERSION' => 'Les fichiers SuiteCRM {0} sont utilisables uniquement avec une base de données SuiteCRM {1}.',

    'LBL_ACCOUNT' => 'Compte',
    'LBL_ACCOUNTS' => 'Comptes',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Voir résumé',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Voir résumé',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_DOCUMENT' => 'Ajouter un Document',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Ajouter à la liste des cibles',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Ajouter des Contacts à la liste des cibles',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Cliquer pour Fermer',
    'LBL_ADDITIONAL_DETAILS' => 'Informations complémentaires',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiver',
    'LBL_ASSIGNED_TO_USER' => 'Assigné à l\'utilisateur',
    'LBL_ASSIGNED_TO' => 'Assigné à :',
    'LBL_BACK' => 'Retour',
    'LBL_BILLING_ADDRESS' => 'Adresse de Facturation',
    'LBL_QUICK_CREATE_TITLE' => 'Création rapide', // PR 4605
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM Open Source',
    'LBL_BUGS' => 'Bugs',
    'LBL_BY' => 'par',
    'LBL_CALLS' => 'Appels',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Envoyer les E-mails en file d\'attente',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Envoyer',
    'LBL_CASE' => 'Ticket',
    'LBL_CASES' => 'Tickets',
    'LBL_CHANGE_PASSWORD' => 'Changer le mot de passe',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Cocher tout',
    'LBL_CITY' => 'Ville',
    'LBL_CLEAR_BUTTON_LABEL' => 'Vider',
    'LBL_CLEAR_BUTTON_TITLE' => 'Effacer',
    'LBL_CLEARALL' => 'Tout décocher',
    'LBL_CLOSE_BUTTON_TITLE' => 'Fermer', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Fermer et créer un nouveau', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Fermer et créer un nouveau', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Non clos :',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Rédiger E-mail',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Rédiger E-mail',
    'LBL_SEARCH_DROPDOWN_YES' => 'Oui',
    'LBL_SEARCH_DROPDOWN_NO' => 'Non',
    'LBL_CONTACT_LIST' => 'Liste des Contacts',
    'LBL_CONTACT' => 'Contacts',
    'LBL_CONTACTS' => 'Contacts',
    'LBL_CONTRACT' => 'Contrat',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_CREATE_BUTTON_LABEL' => 'Créer', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'Créé par',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_CREATED' => 'Créé par',
    'LBL_CURRENT_USER_FILTER' => 'Ne montrer que mes éléments :',
    'LBL_CURRENCY' => 'Devise :',
    'LBL_DOCUMENTS' => 'Documents',
    'LBL_DATE_ENTERED' => 'Date de création :',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_EDIT_BUTTON' => 'Éditer',
    'LBL_DUPLICATE_BUTTON' => 'Dupliquer',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_DELETE' => 'Supprimer',
    'LBL_DELETED' => 'Supprimé',
    'LBL_DIRECT_REPORTS' => 'Rapports directs',
    'LBL_DONE_BUTTON_LABEL' => 'Terminé',
    'LBL_DONE_BUTTON_TITLE' => 'Terminé',
    'LBL_FAVORITES' => 'Favoris',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Veuillez sélectionner un fichier vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ne dispose pas de tous les champs requis pour ce module. Veuillez vous référer à suitecrm.log pour plus de détails.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Le fichier envoyé dépasse la limite de 30000 bytes spécifiée dans le formulaire HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Une erreur s\'est produite lors de l\'envoi du fichier vCard. Veuillez-vous référer à suitecrm.log pour plus de détails.',
    'LBL_IMPORT_VCARD' => 'Importer une vCard :',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importer une vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importer une vCard',
    'LBL_VIEW_BUTTON' => 'Voir',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-mail en PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-mail en PDF',
    'LBL_EMAILS' => 'E-mails',
    'LBL_EMPLOYEES' => 'Employés',
    'LBL_ENTER_DATE' => 'Préciser la date',
    'LBL_EXPORT' => 'Exporter',
    'LBL_FAVORITES_FILTER' => 'Mes favoris :',
    'LBL_GO_BUTTON_LABEL' => 'Démarrer',
    'LBL_HIDE' => 'Masquer',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importer',
    'LBL_IMPORT_STARTED' => 'Import démarrée : ',
    'LBL_LAST_VIEWED' => 'Dernières consultations',
    'LBL_LEADS' => 'Prospects',
    'LBL_LESS' => 'Moins',
    'LBL_CAMPAIGN' => 'Campagne :',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGNLOG' => 'Log des campagnes',
    'LBL_CAMPAIGN_CONTACT' => 'Campagnes',
    'LBL_CAMPAIGN_ID' => 'Campagne (ID)',
    'LBL_CAMPAIGN_NONE' => 'Sans Pièce Jointe',
    'LBL_THEME' => 'Thème :',
    'LBL_FOUND_IN_RELEASE' => 'Trouvé dans la Release',
    'LBL_FIXED_IN_RELEASE' => 'Corrigé dans la Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom du Compte',
    'LBL_LIST_ASSIGNED_USER' => 'Utilisateur',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_CONTACT_ROLE' => 'Rôle Contact',
    'LBL_LIST_DATE_ENTERED' => 'Date de création',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_OF' => 'sur',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_RELATED_TO' => 'Rattachée à',
    'LBL_LIST_USER_NAME' => 'Nom Utilisateur',
    'LBL_LISTVIEW_NO_SELECTED' => 'Vous devez sélectionner au moins 1 enregistrement.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Vous devez sélectionner au moins 2 enregistrements.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Enregistrements Sélectionnés',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Sélectionné(s) : ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Antoine',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Dupont',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Mr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Annuler',
    'LBL_VERIFY' => 'Vérification',
    'LBL_RESEND' => 'Renvoyer',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Fusion d\'E-mails',
    'LBL_MASS_UPDATE' => 'Mise à jour globale',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Il n&#39;y a pas de champs disponibles pour la mise à jour globale',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt-out E-mail principal',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Activer l\'e-mail principal',
    'LBL_MEETINGS' => 'Réunions',
    'LBL_MEETING_GO_BACK' => 'Retourner à la réunion',
    'LBL_MEMBERS' => 'Membres',
    'LBL_MEMBER_OF' => 'Membre de',
    'LBL_MODIFIED_BY_USER' => 'Modifié Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_MORE' => 'plus',
    'LBL_MY_ACCOUNT' => 'Mon Compte',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Créer',
    'LBL_NEW_BUTTON_TITLE' => 'Créer',
    'LBL_NEXT_BUTTON_LABEL' => 'Suivant',
    'LBL_NONE' => '-aucun-',
    'LBL_NOTES' => 'Notes',
    'LBL_OPPORTUNITIES' => 'Affaires',
    'LBL_OPPORTUNITY_NAME' => 'Nom Affaire',
    'LBL_OPPORTUNITY' => 'Affaire',
    'LBL_OR' => 'OU',
    'LBL_PANEL_OVERVIEW' => 'Vue d\'ensemble', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'Autre', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => 'Plus d&#39;informations', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => 'Type de Parent',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ville (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Code postal (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Région (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rue 2 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rue 3 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rue (adresse principale) :',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCTS' => 'Produits',
    'LBL_PROJECT_TASKS' => 'Tâches du Projet',
    'LBL_PROJECTS' => 'Projets',
    'LBL_QUOTES' => 'Devis',

    'LBL_RELATED' => 'Rattaché',
    'LBL_RELATED_RECORDS' => 'Enregistrements rattachés',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_REPORTS_TO' => 'Rend compte à',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indique les champs obligatoires',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Terminé',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Vue Complète',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Vue Complète',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Enregistrer et créer un nouveau',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Enregistrer et créer un nouveau',
    'LBL_SAVE_OBJECT' => 'Sauvegarder {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Rechercher',
    'LBL_SEARCH_BUTTON_TITLE' => 'Rechercher',
    'LBL_FILTER' => 'Filtre',
    'LBL_SEARCH' => 'Rechercher',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'suivant(s)',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Format de fichier invalide, seules des images peuvent être téléchargées.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Sélectionner',
    'LBL_SELECT_BUTTON_TITLE' => 'Sélectionner',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Parcourir',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Parcourir',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Sélectionner Contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Sélectionner Contact',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Sélectionner depuis un Rapport',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Sélectionner Rapports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Sélectionner Utilisateur',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Sélectionner Utilisateur',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Sélectionner Utilisateur',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Sélectionner Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Vider Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Vider Utilisateur',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressources utilisées pour construire cette page (requêtes, fichiers)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secondes.',
    'LBL_SERVER_RESPONSE_TIME' => 'Temps de réponse du serveur :',
    'LBL_SERVER_MEMORY_BYTES' => 'octets',
    'LBL_SERVER_MEMORY_USAGE' => 'Utilisation de la mémoire serveur : {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Utilisation de la mémoire : - module : {0} - action {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Utilisation maximale de la mémoire serveur : {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresse de livraison',
    'LBL_SHOW' => 'Afficher',
    'LBL_STATE' => 'État :', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => 'Votre statut pour cet évènement a été mis à jour !',
    'LBL_STATUS' => 'Statut :',
    'LBL_STREET' => 'Rue',
    'LBL_SUBJECT' => 'Sujet',

    'LBL_INBOUNDEMAIL_ID' => 'Compte E-mail (ID)',

    'LBL_SCENARIO_SALES' => 'Ventes',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finance',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Gestion de projet',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Ce scénario facilite la gestion des articles en vente',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés au marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés à la finance',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés aux services',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés aux projets',

    'LBL_SYNC' => 'Synchronisation',
    'LBL_TABGROUP_ALL' => 'Tous',
    'LBL_TABGROUP_ACTIVITIES' => 'Activités',
    'LBL_TABGROUP_COLLABORATION' => 'Collaboration',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Autre',
    'LBL_TABGROUP_SALES' => 'Ventes',
    'LBL_TABGROUP_SUPPORT' => 'Assistance',
    'LBL_TASKS' => 'Tâches',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiver E-mail',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiver E-mail',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Restaurer',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Restaurer',
    'LBL_UNDELETE_BUTTON' => 'Restaurer',
    'LBL_UNDELETE' => 'Restaurer',
    'LBL_UNSYNC' => 'Dessynchroniser',
    'LBL_UPDATE' => 'Enregistrer',
    'LBL_USER_LIST' => 'Liste des Utilisateurs',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Vérification parmi les E-mails existants ...',
    'LBL_VERIFY_PORTAL_NAME' => 'Vérification parmi les noms de portail existants...',
    'LBL_VIEW_IMAGE' => 'voir',

    'LNK_ABOUT' => 'A propos',
    'LNK_ADVANCED_FILTER' => 'Filtre avancé',
    'LNK_BASIC_FILTER' => 'Filtre rapide',
    'LBL_ADVANCED_SEARCH' => 'Filtre avancé',
    'LBL_QUICK_FILTER' => 'Filtre rapide',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Voir tous',
    'LNK_CLOSE' => 'Fermer',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modifier le filtre en cours',
    'LNK_SAVED_VIEWS' => 'Options',
    'LNK_DELETE' => 'Supprimer',
    'LNK_EDIT' => 'Éditer',
    'LNK_GET_LATEST' => 'Obtenir le dernier',
    'LNK_GET_LATEST_TOOLTIP' => 'Remplacer par la dernière version',
    'LNK_HELP' => 'Aide',
    'LNK_CREATE' => 'Créer',
    'LNK_LIST_END' => 'Fin',
    'LNK_LIST_NEXT' => 'Suivant',
    'LNK_LIST_PREVIOUS' => 'Précédent',
    'LNK_LIST_RETURN' => 'Retour à la Liste',
    'LNK_LIST_START' => 'Début',
    'LNK_LOAD_SIGNED' => 'Signé',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Remplacer par le document signé',
    'LNK_PRINT' => 'Imprimer',
    'LNK_BACKTOTOP' => 'Retour en Haut',
    'LNK_REMOVE' => 'Supprimer',
    'LNK_RESUME' => 'Reprise',
    'LNK_VIEW_CHANGE_LOG' => 'Voir Journal des modifications',

    'NTC_CLICK_BACK' => 'Merci de cliquer sur le bouton "Précédent" de votre navigateur et de corriger le problème.',
    'NTC_DATE_FORMAT' => '(aaaa-mm-jj)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Voulez-vous vraiment supprimer les enregistrements sélectionnés ?',
    'NTC_TEMPLATE_IS_USED' => 'Ce modèle est utilisé par au moins un E-mail lié aux Campagnes. Êtes-vous sûr(e) de vouloir le supprimer ?',
    'NTC_TEMPLATES_IS_USED' => 'Les modèles suivants sont utilisés par des E-mails liés aux Campagnes. Êtes-vous sûr(e) de vouloir les supprimer ?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cet enregistrement ?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Voulez-vous vraiment supprimer les ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Voulez-vous vraiment mettre à jour tous les enregistrements sélectionnés (',
    'NTC_DELETE_SELECTED_RECORDS' => ' enregistrement(s) sélectionné(s) ?',
    'NTC_LOGIN_MESSAGE' => 'Merci de vous authentifier.',
    'NTC_NO_ITEMS_DISPLAY' => 'Aucun',
    'NTC_REMOVE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cette relation?',
    'NTC_REQUIRED' => 'Indique les champs obligatoires',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Bienvenue',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'WARN_UNSAVED_CHANGES' => 'Vous êtes sur le point de quitter cet enregistrement sans sauvegarder vos modifications. Etes-vous sûr de vouloir quitter cet enregistrement ?',
    'ERROR_NO_RECORD' => 'Erreur de récupération de l&#39;enregistrement. Cet enregistrement est peut être supprimé ou vous n&#39;avez pas le droit de le visualiser.',
    'WARN_BROWSER_VERSION_WARNING' => '<p><b>Attention :</b>Le navigateur ou la version du navigateur que vous utilisez n&#39;est pas supporté.</p><p>Les navigateurs suivants sont recommandés :</p><ul><li>Internet Explorer 9</li><li>Mozilla Firefox 14, 15 </li><li>Safari 6</li><li>Google Chrome 22 (ou dernière version)</li></ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Attention :</b> Votre navigateur est en mode de compatibilité ce qui n&#39;est pas supporté.',
    'ERROR_TYPE_NOT_VALID' => 'Erreur. Ce type n&#39;est pas valide.',
    'ERROR_NO_BEAN' => 'Echec pour obtenir un bean.',
    'LBL_DUP_MERGE' => 'Recherche de doublons',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Abonnement aux Newsletters',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Gestion des Newsletters de',
    // Ajax status strings
    'LBL_LOADING' => 'chargement ...',
    'LBL_SEARCHING' => 'Recherche en cours...',
    'LBL_SAVING_LAYOUT' => 'Sauvegarde de la disposition ...',
    'LBL_SAVED_LAYOUT' => 'Nouvelle disposition sauvegardée.',
    'LBL_SAVED' => 'Sauvegardé',
    'LBL_SAVING' => 'Sauvegarde en cours',
    'LBL_DISPLAY_COLUMNS' => 'Colonnes affichées',
    'LBL_HIDE_COLUMNS' => 'Colonnes masquées',
    'LBL_SEARCH_CRITERIA' => 'Critère de recherche',
    'LBL_SAVED_VIEWS' => 'Vues sauvegardées',
    'LBL_PROCESSING_REQUEST' => 'Traitement..',
    'LBL_REQUEST_PROCESSED' => 'Terminé',
    'LBL_AJAX_FAILURE' => 'Erreur Ajax',
    'LBL_MERGE_DUPLICATES' => 'Fusionner',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mes filtres',
    'LBL_SEARCH_POPULATE_ONLY' => 'Lancer une recherche en utilisant le formulaire de recherche ci-dessus',
    'LBL_DETAILVIEW' => 'Vue Détail',
    'LBL_LISTVIEW' => 'Vue Liste',
    'LBL_EDITVIEW' => 'Vue Edition',
    'LBL_BILLING_STREET' => 'Rue (adresse facturation) :',
    'LBL_SHIPPING_STREET' => 'Rue (adresse livraison) :',
    'LBL_SEARCHFORM' => 'Formulaire de recherche',
    'LBL_SAVED_SEARCH_ERROR' => 'Merci de fournir un nom pour cette vue.',
    'LBL_DISPLAY_LOG' => 'Afficher les Logs',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Système',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Expirée',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Votre session va expirer dans 2 minutes. Veuillez sauvegarder votre travail.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Votre session a expiré.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda : ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Réunion',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Appel',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Heure : ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Emplacement : ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Description : ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Statut : ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Relatif à : ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "Cliquez sur OK pour afficher cet appel ou cliquez sur Annuler pour fermer ce message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "Cliquez sur OK pour afficher cette réunion ou cliquez sur Annuler pour fermer ce message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evènement',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'L’événement n\'est pas configuré.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'L\'emplacement n\'est pas défini.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'La date de début n\'est pas définie.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Aucun résultat.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Aucun résultat trouvé... Peut-être en changeant un critère de recherche et essayer à nouveau ?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Aucun résultat pour <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Créé <item1> comme un nouveau <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'ou modifier vos critères de recherche',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Vous n&#39;avez aucun résultat accessible. <item2> ou réalisez un <item3> maintenant.',

    'LBL_CLICK_HERE' => 'Cliquer ici',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Ajouter à mes favoris',
    'LBL_CREATE_CONTACT' => 'Créer un Contact',
    'LBL_CREATE_CASE' => 'Créé un Ticket',
    'LBL_CREATE_NOTE' => 'Créer une Note',
    'LBL_CREATE_OPPORTUNITY' => 'Créer une Affaire',
    'LBL_SCHEDULE_CALL' => 'Planifier un Appel',
    'LBL_SCHEDULE_MEETING' => 'Planifier une Réunion',
    'LBL_CREATE_TASK' => 'Créer une Tache',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Afficher le Formulaire',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Enregistrer le formulaire Web',
    'LBL_AVAILABLE_FIELDS' => 'Champs disponibles',
    'LBL_FIRST_FORM_COLUMN' => 'Première colonne du formulaire',
    'LBL_SECOND_FORM_COLUMN' => 'Seconde colonne du formulaire',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Champ obligatoire manquant : assigné à',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Champ obligatoire manquant : campagne associée',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Formulaire web à créer ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Envoyer ce formulaire créera ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Ajouter tous les champs',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Réinitialiser tous les champs',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Supprimer tous les champs',
    'LBL_NEXT_BTN' => 'Suivant',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Seuls les fichiers de type image peuvent être joints : JPG, PNG.',
    'LBL_TRAINING' => 'Forum d\'Aide',
    'ERR_MSSQL_DB_CONTEXT' => 'modification du contexte de la base de données en',
    'ERR_MSSQL_WARNING' => 'Attention :',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Erreur : Fichier [[file]] manquant.  Impossible de le créer car il n&#39;y a pas de fichier HTML correspondant.',
    'ERR_CANNOT_FIND_MODULE' => 'Erreur : Ce Module [module] n&#39;existe pas.',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Erreur : Le nombre d&#39;arguments est différent entre les éléments &#39;key&#39; et &#39;copy&#39; dans le tableau des paramètres d&#39;affichage.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Général',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtrer',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Mes éléments seulement',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titre',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Afficher les lignes',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Vous avez atteint le nombre maximal de dashlets autorisés par votre administrateur. Merci de supprimer un dashlet pour en ajouter d\'autres.',
    'LBL_ADDING_DASHLET' => 'Ajout de Dashlet ...',
    'LBL_ADDED_DASHLET' => 'Dashlet ajouté',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Etes-vous sûr(e) de vouloir supprimer le Dashlet ?',
    'LBL_REMOVING_DASHLET' => 'Suppression du Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'Dashlet supprimé',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Chargement en cours, veuillez patienter...',

    'LBL_RELOAD_PAGE' => 'Veuillez <a href="javascript: window.location.reload()"> recharger la fenêtre</a> pour utiliser ce Dashlet.',
    'LBL_ADD_DASHLETS' => 'Ajouter un Dashlet',
    'LBL_CLOSE_DASHLETS' => 'Fermer',
    'LBL_OPTIONS' => 'Options',
    'LBL_1_COLUMN' => '1 colonne',
    'LBL_2_COLUMN' => '2 colonnes',
    'LBL_3_COLUMN' => '3 colonnes',
    'LBL_PAGE_NAME' => 'Nom de l&#39;onglet',

    'LBL_SEARCH_RESULTS' => 'Résultats de recherche',
    'LBL_SEARCH_MODULES' => 'Modules',
    'LBL_SEARCH_TOOLS' => 'Outils',
    'LBL_SEARCH_HELP_TITLE' => 'Conseils de recherche',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Pas d&#39;image',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copier l&#39;adresse depuis la gauche :',
    'LBL_SAVE_AND_CONTINUE' => 'Sauvegarder et aller au suivant',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Gestion des Multi-sélections</strong></p><ul><li>Cliquer sur les valeurs pour sélectionner les attributs.</li><li>Ctrl-clic pour faire une sélection multiple. Pour les utilisateurs Mac utiliser CMD-clic.</li><li>Pour sélectionner toutes les valeurs entres deux attributs cliquer sur la première valeur et cliquer sur la dernière valeur en maintenant la touche shift enfoncée.</li></ul><p><strong>Recherche avancée &amp; options de mise en page</strong><br><br>Utiliser les <b>Options</b> afin de sauvegarder un jeu de paramètres de recherche et/ou une mise en page personnalisée en vue Liste pour obtenir rapidement la recherche désirée les prochaines fois. Vous pouvez sauvegarder un nombre illimité de recherches et mises en page personnalisées. Le nom de toutes les recherches sauvegardées apparaît dans la liste des recherches sauvegardées, avec la dernière recherche en haut de la liste.<br><br>Pour personnaliser la mise en page de la Vue Liste, utiliser les colonnes cachées &amp; colonnes visibles afin de sélectionner les champs à afficher dans les résultats de recherche. Par exemple, vous pouvez afficher ou cacher des détails comme le nom de l&#39;enregistrement, l&#39;utilisateur assigné et l&#39;équipe assignée dans les résultats de recherche. Pour ajouter une colonne à la vue Liste, sélectionner les champs dans la liste colonnes cachées et utiliser la flèche gauche pour le déplacer dans la liste colonnes visibles. Pour supprimer une colonne de la vue Liste, sélectionnez-la dans la liste des colonnes affichées et utiliser la flèche droite pour la déplacer dans la liste des colonnes cachées.<br><br>Si vous sauvegardez les paramètres de mise en page, vous pourrez les charger à tout moment pour voir les résultats de recherche dans la mise en page personnalisée.<br><br>Pour sauvegarder et mettre à jour une recherche et/ou une mise en page:<ol><li>Entrer un nom pour les résultats de recherche dans le champ <b>Sauvegarder cette recherche comme</b> et cliquer sur <b>Sauvegarder</b>. Le nom apparaît maintenant dans la liste des Recherches Sauvegardées adjacente au bouton <b>Vider</b>.</li><li>Pour voir une recherche sauvegardée, sélectionnez-en une dans le liste des Recherches Sauvegardées. Les résultats de recherche sont affichés dans la Vue Liste.</li><li>Pour mettre à jour les propriétés d&#39;une recherche sauvegardée, sélectionnez là dans la liste, entrer le nouveau critère de recherche et/ou les options de mise en page dans la zone de Recherche Avancée, et cliquer sur <b>Mettre à jour</b> puis sur <b>Modifier la Recherche Courante</b>.</li><li>Pour supprimer une recherche sauvegardée, sélectionner-la dans la liste des Recherches Sauvegardées, cliquer sur <b>Supprimer</b> puis sur <b>Modifier la Recherche Courante</b>, et ensuite cliquer sur <b>OK</b> pour confirmer la suppression.</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Erreur : Le nombre limite de requêtes ($limit) a été atteint pour le module $module .',
    'ERROR_NOTIFY_OVERRIDE' => 'Erreur : ResourceObserver->notify() doit être surchargé.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Erreur : Impossible de faire un suivi car le fichier metadata est vide ou n&#39;existe pas.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Erreur : Aucun suivi n&#39;a été configuré pour le nom demandé',
    'ERR_UNDEFINED_METRIC' => 'Erreur : Impossible de positionner une valeur pour une métrique indéfinie',
    'ERR_STORE_FILE_MISSING' => 'Erreur : Impossible de trouver le fichier de stockage de l&#39;implémentation',

    'LBL_MONITOR_ID' => 'Identifiant de Suivi',
    'LBL_USER_ID' => 'Utilisateur (ID)',
    'LBL_MODULE_NAME' => 'Nom du module',
    'LBL_ITEM_ID' => 'Identifiant Enregistrement',
    'LBL_ITEM_SUMMARY' => 'Description Enregistrement',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Identifiant Session',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack crée pour &#39;id utilisateur {0}',
    'LBL_VISIBLE' => 'Enregistrement Visible',
    'LBL_DATE_LAST_ACTION' => 'Date de dernière action',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'n&#39;est pas avant',
    'MSG_IS_MORE_THAN' => 'est plus grand que',
    'MSG_IS_LESS_THAN' => 'est plus petit que',
    'MSG_SHOULD_BE' => 'devrait être',
    'MSG_OR_GREATER' => 'ou plus grand que',

    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Créé un Bug',

    'LBL_OBJECT_IMAGE' => 'Image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Sélectionner une date',

    'LBL_VALIDATE_RANGE' => 'n&#39;est pas dans la plage valide',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Veuillez choisir à la fois une date de début et de fin',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Veuillez choisir à la fois des valeurs de début et de fin',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tous',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Erreur : Le nombre d&#39;entrées paramétrées dans l&#39;objet ne correspond pas avec le nomdre d&#39;entrées présentes dans le résultat obtenu depuis le connecteur.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Erreur : Le mapping des champs pour ce module est manquant.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Erreur : Impossible de récupérer les données pour le connecteur {0}. Le Service tiers est peut être inaccessible ou la paramètre de configuration que vous avez spécifiés sont peut être invalide. Message d&#39;erreur du connecteur: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Pour une utilisation optimale de IIS/FastCGI, positionnez le paramètre fastcgi.logging à 0 dans votre fichier php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nom complet',
    'LBL_COLLECTION_PRIMARY' => 'Principale',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Champ obligatoire',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_DESCRIPTION' => 'Description',

    'LBL_YESTERDAY' => 'hier',
    'LBL_TODAY' => 'aujourd&#39;hui',
    'LBL_TOMORROW' => 'demain',
    'LBL_NEXT_WEEK' => 'prochaine semaine',
    'LBL_NEXT_MONDAY' => 'prochain lundi',
    'LBL_NEXT_FRIDAY' => 'prochain vendredi',
    'LBL_TWO_WEEKS' => '2 semaines',
    'LBL_NEXT_MONTH' => 'prochain mois',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'premier jour du mois prochain',
    'LBL_THREE_MONTHS' => '3 mois',
    'LBL_SIXMONTHS' => '6 mois',
    'LBL_NEXT_YEAR' => 'année prochaine',

    //Datetimecombo fields
    'LBL_HOURS' => 'Heures',
    'LBL_MINUTES' => 'Minutes',
    'LBL_MERIDIEM' => 'Méridien',
    'LBL_DATE' => 'Date',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Rafraîchissement automatique',

    'LBL_DURATION_DAY' => 'jour',
    'LBL_DURATION_HOUR' => 'heure',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'jours',
    'LBL_DURATION_HOURS' => 'Durée (heures)',
    'LBL_DURATION_MINUTES' => 'Durée (minutes)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Choisir le mois',
    'LBL_ENTER_YEAR' => 'Entrer l&#39;année',
    'LBL_ENTER_VALID_YEAR' => 'Veuillez saisir une année valide',

    //File write error label
    'ERR_FILE_WRITE' => 'Erreur : impossible d&#39;écrire le fichier {0}. Veuillez vérifier les droits et permissions sur les fichiers.',
    'ERR_FILE_NOT_FOUND' => 'Erreur : impossible de charger le fichier {0}. Veuillez vérifier les droits et permissions sur les fichiers.',

    'LBL_AND' => 'et',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fichier issu d\'une source externe',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sécurité',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Ceci est un fichier d&#39;import basique qui fournit un exemple du contenu attendu d&#39;un fichier prêt à être importé."<br />"Ce fichier est un fichier .csv délimité par un point-virgule utilisant des guillemets comme qualificateur de champ."<br /><br />"La ligne d&#39;entête est la toute première ligne du fichier et elle contient le nom des champs tels que vous les verriez dans l&#39;application."<br />"Ces libellés sont utilisés pour le mapping de données du fichier avec les données de votre SuiteCRM."<br /><br />"Remarques: Le noms des champs en base de données peuvent aussi être utilisés en ligne d&#39;entête. Ceci est pratique si vous utilisez phpMyAdmin ou un autre outil de gestion de base de données pour fournir des données à importer."<br />"L&#39;ordre des champs n&#39;est pas critique puisque le process d&#39;import fait correspondre les données à partir des champs définis dans la ligne d&#39;entête."<br /><br /><br />"Pour utiliser ce modèle de fichier, faites les choses suivantes:"<br />"1. Enlever les données d&#39;exemple"<br />"2. Enlever le texte d&#39;aide que vous êtes en train de lire"<br />"3. Insérer vos propres données dans les colonnes appropriées"<br />"4. Sauvegarder le fichier sur votre ordinateur local"<br />"5. Cliquez sur les options d&#39;import du menu d&#39;actions dans l&#39;application et choisissez le fichier à transmettre"',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Aucune notification',
    'LBL_ALT_SORT_DESC' => 'Tri descendant',
    'LBL_ALT_SORT_ASC' => 'Tri Ascendant',
    'LBL_ALT_SORT' => 'Tri',
    'LBL_ALT_SHOW_OPTIONS' => 'Afficher options',
    'LBL_ALT_HIDE_OPTIONS' => 'Masquer options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Déplacer l&#39;entrée vers la liste de gauche',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Déplacer l&#39;entrée vers la liste de droite',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Déplacer l&#39;entrée vers le haut de la liste',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Déplacer l&#39;entrée vers le bas de la liste',
    'LBL_ALT_INFO' => 'Information',
    'MSG_DUPLICATE' => 'L&#39;enregistrement {0} que vous allez créer est probablement un doublon d&#39;un enregistrement {0} existant. Les enregistrements {1} contenant le même nom sont listés ci-dessous.<br>Cliquez sur Créer {1} pour créer cet enregistrement {0}, ou sélectionnez un enregistrement {0} listé ci-dessous.',
    'MSG_SHOW_DUPLICATES' => 'L&#39;enregistrement {0} que vous allez créer est probablement un doublon d&#39;un enregistrement {0} existant. Les enregistrements {1} contenant le même nom sont listés ci-dessous.  Cliquez sur Sauvegarder pour créer cet enregistrement {0}, ou sur Annuler pour retourner au module sans créer cet enregistrement.',
    'LBL_EMAIL_TITLE' => 'adresse E-mail',
    'LBL_EMAIL_OPT_TITLE' => 'adresse E-mail désinscrite',
    'LBL_EMAIL_INV_TITLE' => 'adresse E-mail invalide',
    'LBL_EMAIL_PRIM_TITLE' => 'Transformer en adresse E-mail principale',
    'LBL_SELECT_ALL_TITLE' => 'Sélectionner tous',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Sélectionner cette ligne',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERREUR : Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERREUR : Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}. La variable PHP upload_maxsize a pour valeur {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERREUR : Une erreur est survenue pendant votre transfert, veuillez contacter un administrateur pour obtenir de l&#39;aide.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'La taille de l&#39;upload ({0} octets) dépasse le maximum autorisé : {1} octets',
    'UPLOAD_REQUEST_ERROR' => 'Une erreur est survenue. Veuillez rafraîchir cette page et essayer de nouveau',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Éditer',
    'LBL_EDIT_BUTTON_TITLE' => 'Éditer',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dupliquer',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dupliquer',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Supprimer',
    'LBL_DELETE_BUTTON_TITLE' => 'Supprimer',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Actions par lot', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Action', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Sauvegarder',
    'LBL_SAVE_BUTTON_TITLE' => 'Sauvegarder',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Annuler',
    'LBL_CANCEL_BUTTON_TITLE' => 'Annuler',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'tableau du connecteur dans {0} défini incorrectement ou est vide et ne peut être utilisé.',
    'ERR_SUHOSIN' => 'Le flux d&#39;upload est bloqué par Suhosin, veuillez ajouter &quot;upload&quot; au paramètre suhosin.executor.include.whitelist (cf. suitecrm.log pour plus d&#39;informations)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Réponse erronée du serveur',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Devis',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prix de vente',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuellement',
        '5' => 'Toutes les 5 minutes',
        '15' => 'Toutes les 15 minutes',
        '30' => 'Toutes les 30 minutes',
        '60' => 'Toutes les heures',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Erreur un rappel est vide ou incorrect',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Rappel par popup ou par E-mail non défini.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Aucun invité pour ce rappel.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Le rappel n’inclut pas les invités, vous souhaitez supprimer le rappel ?',
    'LBL_DELETE_REMINDER' => 'Supprimer le rappel',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choisissez les colonnes',
    'LBL_COLUMN_CHOOSER' => 'Sélecteur de colonne',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Enregistrer les modifications',
    'LBL_DISPLAYED' => 'Affiché',
    'LBL_HIDDEN' => 'Caché',
    'ERR_EMPTY_COLUMNS_LIST' => 'Au moins, un élément nécessaire',

    'LBL_FILTER_HEADER_TITLE' => 'Filtre',

    'LBL_CATEGORY' => 'Catégorie',
    'LBL_LIST_CATEGORY' => 'Catégorie',
    'ERR_FACTOR_TPL_INVALID' => 'Message de facteur d’authentification n’est pas valide, veuillez contacter votre administrateur.', // PR 4580
    'LBL_SUBTHEMES' => 'Style',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Aurore',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Jour',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Crépuscule',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Nuit',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Midi', // Theme for WCAG color contrast compliant. see issues 4776
    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Ignorer ce brouillon',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Cette opération supprimera le contenu de l\'E-mail, voulez-vous continuer ?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Appliquer un modèle d\'E-mail',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Cette opération remplacera le corps de l’E-mail, voulez-vous continuer ?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Activation confirmée',
    'LBL_OPT_IN_TITLE' => 'Opt-In',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Date de confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Date d\'envoi de confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Confirmed Opt In Fail Date',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Le modèle de mail pour l\'activation n\'est pas défini. Veuillez le configurer dans les paramètres de messagerie.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'L\'activation nécessite l\'email lié au Compte / Contact / Prospect / Cible',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Groupe non héritable',
    'LBL_PRIMARY_GROUP' => "Groupe primaire",

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Ignorer ce brouillon',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Cette opération supprimera le contenu de l\'E-mail, voulez-vous continuer ?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Appliquer un modèle d\'E-mail',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Cette opération remplacera le corps de l’E-mail, voulez-vous continuer ?',

    // footer
    'LBL_SUITE_TOP' => 'Retour en Haut',
    'LBL_SUITE_SUPERCHARGED' => 'Suralimenté par SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Propulsé par SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM a été écrit et monté par <a href="https://salesagility.com"> SalesAgility</a>.  Le programme est fourni tel quel, sans garantie.  Sous licence AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ce programme est un logiciel libre; vous pouvez le redistribuer et / ou le modifier selon les termes de la GNU Affero General Public License version 3 publiée par Free Software Foundation, y compris l\'autorisation supplémentaire indiqué dans l\'en-tête de code source.',
    'LBL_SUITE_DESC3' => 'SuiteCRM est une marque déposée de SalesAgility Ltd. Tous les autres noms de produits et de la société peuvent être des marques déposées des sociétés respectives auxquels ils sont associés.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Réinitialiser le Mot de passe',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Envoyer le mail de confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirmer les emails uniquement pour les comptes/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Librairie';
$app_list_strings['moduleList']['EmailAddresses'] = 'Adresse E-mail';
$app_list_strings['project_priority_default'] = 'Moyenne';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Haute',
    'Medium' => 'Moyenne',
    'Low' => 'Basse',
);

$app_list_strings['moduleList']['KBDocuments'] = 'Base de connaissance';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIE',
    'ALGERIA' => 'ALGÉRIE',
    'AMERICAN SAMOA' => 'SAMOA AMÉRICAINES',
    'ANDORRA' => 'ANDORRE',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTIQUE',
    'ANTIGUA' => 'ANTIGUA-ET-BARBUDA',
    'ARGENTINA' => 'ARGENTINE',
    'ARMENIA' => 'ARMÉNIE',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIE',
    'AUSTRIA' => 'AUTRICHE',
    'AZERBAIJAN' => 'AZERBAÏDJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHREÏN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADE',
    'BELARUS' => 'BÉLARUS',
    'BELGIUM' => 'BELGIQUE',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BÉNIN',
    'BERMUDA' => 'BERMUDES',
    'BHUTAN' => 'BHOUTAN',
    'BOLIVIA' => 'BOLIVIE',
    'BOSNIA' => 'BOSNIE-HERZÉGOVINE',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET, ÎLE',
    'BRAZIL' => 'BRÉSIL',
    'BRITISH ANTARCTICA TERRITORY' => 'TERRITOIRE BRITANNIQUE DE L\'ANTARCTIQUE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'OCÉAN INDIEN, TERRITOIRE BRITANNIQUE',
    'BRITISH VIRGIN ISLANDS' => 'ÎLES VIERGES BRITANNIQUES',
    'BRITISH WEST INDIES' => 'ANTILLES BRITANNIQUES',
    'BRUNEI' => 'BRUNÉI DARUSSALAM',
    'BULGARIA' => 'BULGARIE',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODGE',
    'CAMEROON' => 'CAMEROUN',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'Fuseaux horaires',
    'CANARY ISLAND' => 'ÎLES CANARIES',
    'CAPE VERDI ISLANDS' => 'CAP-VERT',
    'CAYMAN ISLANDS' => 'CAÏMANES, ÎLES',
    'CHAD' => 'TCHAD',
    'CHANNEL ISLAND UK' => 'ÎLES ANGLO-NORMANDES GB',
    'CHILE' => 'CHILI',
    'CHINA' => 'CHINE',
    'CHRISTMAS ISLAND' => 'CHRISTMAS, ÎLE',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING), ÎLES',
    'COLOMBIA' => 'COLOMBIE',
    'COMORO ISLANDS' => 'COMORES',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO, RÉPUBLIQUE DÉMOCRATIQUE DU',
    'COOK ISLANDS' => 'COOK, ÎLES',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIE',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CHYPRE',
    'CZECH REPUBLIC' => 'TCHÈQUE, RÉPUBLIQUE',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANEMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINIQUE',
    'DOMINICAN REPUBLIC' => 'DOMINICAINE, RÉPUBLIQUE',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ÉQUATEUR',
    'EGYPT' => 'ÉGYPTE',
    'EL SALVADOR' => 'Salvador',
    'EQUATORIAL GUINEA' => 'GUINÉE ÉQUATORIALE',
    'ESTONIA' => 'ESTONIE',
    'ETHIOPIA' => 'ÉTHIOPIE',
    'FAEROE ISLANDS' => 'FÉROÉ, ÎLES',
    'FALKLAND ISLANDS' => 'FALKLAND, ÎLES (MALVINAS)',
    'FIJI' => 'FIDJI',
    'FINLAND' => 'FINLANDE',
    'FRANCE' => 'France',
    'FRENCH GUIANA' => 'GUYANE FRANÇAISE',
    'FRENCH POLYNESIA' => 'POLYNÉSIE FRANÇAISE',
    'GABON' => 'Gabon',
    'GAMBIA' => 'GAMBIE',
    'GEORGIA' => 'GÉORGIE',
    'GERMANY' => 'ALLEMAGNE',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GRÈCE',
    'GREENLAND' => 'GROENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINÉE',
    'GUYANA' => 'GUYANE',
    'HAITI' => 'HAÏTI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG-KONG',
    'HUNGARY' => 'HONGRIE',
    'ICELAND' => 'ISLANDE',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDE',
    'INDONESIA' => 'INDONÉSIE',
    'IRAN' => 'IRAN, RÉPUBLIQUE ISLAMIQUE',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLANDE',
    'ISRAEL' => 'ISRAËL',
    'ITALY' => 'ITALIE',
    'IVORY COAST' => 'CÔTE D IVOIRE',
    'JAMAICA' => 'JAMAÏQUE',
    'JAPAN' => 'JAPON',
    'JORDAN' => 'JORDANIE',
    'KAZAKHSTAN' => 'KASAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'CORÉE, RÉPUBLIQUE POPULAIRE DÉMOCRATIQUE DE',
    'KOREA, SOUTH' => 'CORÉE, RÉPUBLIQUE DE',
    'KUWAIT' => 'KOWEÏT',
    'KYRGYZSTAN' => 'KIRGHIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETTONIE',
    'LEBANON' => 'LIBAN',
    'LEEWARD ISLANDS' => 'ÎLES SOUS-LE-VENT',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYENNE, JAMAHIRIYA ARABE',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITUANIE',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACÉDOINE, EX-RÉPUBLIQUE YOUGOSLAVE',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAISIE',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTE',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIE',
    'MAURITIUS' => 'MAURICE',
    'MELANESIA' => 'MÉLANÉSIE',
    'MEXICO' => 'MEXIQUE',
    'MOLDOVIA' => 'MOLDOVA, RÉPUBLIQUE DE',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIE',
    'MOROCCO' => 'MAROC',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMIBIE',
    'NEPAL' => 'NÉPAL',
    'NETHERLANDS' => 'PAYS-BAS',
    'NETHERLANDS ANTILLES' => 'ANTILLES NÉERLANDAISES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ZONE NEUTRE DES ANTILLES HOLLANDAISES',
    'NEW CALADONIA' => 'NOUVELLE-CALÉDONIE',
    'NEW HEBRIDES' => 'NOUVELLES-HÉBRIDES',
    'NEW ZEALAND' => 'NOUVELLE-ZÉLANDE',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGÉRIA',
    'NORFOLK ISLAND' => 'NORFOLK, ÎLE',
    'NORWAY' => 'NORVÈGE',
    'OMAN' => 'OMAN',
    'OTHER' => 'AUTRE',
    'PACIFIC ISLAND' => 'ILES DU PACIFIQUE',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPOUASIE-NOUVELLE-GUINÉE',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PÉROU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLOGNE',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'TIMOR ORIENTAL',
    'PUERTO RICO' => 'PORTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'BÉLARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'REUNION' => 'RÉUNION',
    'ROMANIA' => 'ROUMANIE',
    'RUSSIA' => 'RUSSIE',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'ÎLES RYŪKYŪ',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAINT-MARIN',
    'SAUDI ARABIA' => 'ARABIE SAOUDITE',
    'SENEGAL' => 'SÉNÉGAL',
    'SERBIA' => 'SERBIE',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPOUR',
    'SLOVAKIA' => 'SLOVAQUIE',
    'SLOVENIA' => 'SLOVÉNIE',
    'SOMALILIAND' => 'SOMALIE',
    'SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'SOUTH YEMEN' => 'YÉMEN DU SUD',
    'SPAIN' => 'ESPAGNE',
    'SPANISH SAHARA' => 'SAHARA ESPAGNOL',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT-KITTS-ET-NEVIS',
    'ST. LUCIA' => 'SAINTE-LUCIE',
    'SUDAN' => 'SOUDAN',
    'SURINAM' => 'SURINAME',
    'SW AFRICA' => 'NAMIBIE',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SUÈDE',
    'SWITZERLAND' => 'SUISSE',
    'SYRIA' => 'SYRIENNE, RÉPUBLIQUE ARABE',
    'TAIWAN' => 'TAÏWAN, PROVINCE DE CHINE',
    'TAJIKISTAN' => 'TADJIKISTAN',
    'TANZANIA' => 'TANZANIE, RÉPUBLIQUE-UNIE DE',
    'THAILAND' => 'THAÏLANDE',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINITÉ-ET-TOBAGO',
    'TUNISIA' => 'TUNISIE',
    'TURKEY' => 'TURQUIE',
    'UGANDA' => 'OUGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'ÉMIRATS ARABES UNIS',
    'UNITED KINGDOM' => 'ROYAUME-UNI',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'ILES DU PACIFIQUE (US)',
    'US VIRGIN ISLANDS' => 'ÎLES VIERGES DES ÉTATS-UNIS',
    'USA' => 'ÉTATS-UNIS',
    'UZBEKISTAN' => 'OUZBÉKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'SAINT-SIÈGE (ÉTAT DE LA CITÉ DU VATICAN)',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIET NAM',
    'WAKE ISLAND' => 'ÎLE DE WAKE',
    'WEST INDIES' => 'WEST INDIES',
    'WESTERN SAHARA' => 'SAHARA OCCIDENTAL',
    'YEMEN' => 'YÉMEN',
    'ZAIRE' => 'REP. DEM. CONGO',
    'ZAMBIA' => 'ZAMBIE',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taïwan et Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'Cp1251 (MS Cyrillique)',
    'CP1252' => 'CP1252 (MS Europe occidentale et États-Unis)',
    'EUC-CN' => 'EUC-CN (GB2312 Chinois simplifié)',
    'EUC-JP' => 'EUC-JP (Japonais Unix)',
    'EUC-KR' => 'EUC-KR (Corée)',
    'EUC-TW' => 'EUC-TW (Taiwanais)',
    'ISO-2022-JP' => 'ISO-2022-JP (japonais)',
    'ISO-2022-KR' => 'ISO-2022-KR (Coréen)',
    'ISO-8859-1' => 'ISO-8859-1 (Europe occidentale et États-Unis)',
    'ISO-8859-2' => 'ISO-8859-2 (Europe centrale et orientale)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillique)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabe)',
    'ISO-8859-7' => 'ISO-8859-7 (Grec)',
    'ISO-8859-8' => 'ISO-8859-8 (Hébreu)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (7 Latin)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Russe Cyrillique)',
    'KOI8-U' => 'KOI8-U (Cyrillique Ukrainien)',
    'SJIS' => 'SJIS (MS japonais)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrique/Alger',
    'Africa/Luanda' => 'Afrique/Luanda',
    'Africa/Porto-Novo' => 'Afrique / Porto-Novo',
    'Africa/Gaborone' => 'Afrique / Gaborone',
    'Africa/Ouagadougou' => 'Afrique / Ouagadougou',
    'Africa/Bujumbura' => 'Afrique / Bujumbura',
    'Africa/Douala' => 'Afrique/Douala',
    'Atlantic/Cape_Verde' => 'Atlantique/Cap-Vert',
    'Africa/Bangui' => 'Afrique/Bangui',
    'Africa/Ndjamena' => 'Afrique/Ndjamena',
    'Indian/Comoro' => 'Océan Indien/Comorres',
    'Africa/Kinshasa' => 'Afrique/Kinshasa',
    'Africa/Lubumbashi' => 'Afrique / Lubumbashi',
    'Africa/Brazzaville' => 'Afrique/Brazzaville',
    'Africa/Abidjan' => 'Afrique/Abidjan',
    'Africa/Djibouti' => 'Afrique/Djibouti',
    'Africa/Cairo' => 'Afrique/Le Caire',
    'Africa/Malabo' => 'Afrique/Malabo',
    'Africa/Asmera' => 'Afrique/Asmera',
    'Africa/Addis_Ababa' => 'Afrique/Addis-Abeba',
    'Africa/Libreville' => 'Afrique/Libreville',
    'Africa/Banjul' => 'Afrique/Banjul',
    'Africa/Accra' => 'Afrique/Accra',
    'Africa/Conakry' => 'Afrique/Conakry',
    'Africa/Bissau' => 'Afrique/Bissau',
    'Africa/Nairobi' => 'Afrique/Nairobi',
    'Africa/Maseru' => 'Afrique / Maseru',
    'Africa/Monrovia' => 'Afrique / Monrovia',
    'Africa/Tripoli' => 'Afrique/Tripoli',
    'Indian/Antananarivo' => 'Océan Indien/Antananarivo',
    'Africa/Blantyre' => 'Afrique / Blantyre',
    'Africa/Bamako' => 'Afrique/Bamako',
    'Africa/Nouakchott' => 'Afrique / Nouakchott',
    'Indian/Mauritius' => 'Océan Indien/Maurice',
    'Indian/Mayotte' => 'Océan Indien/Mayotte',
    'Africa/Casablanca' => 'Afrique/Casablanca',
    'Africa/El_Aaiun' => 'Afrique / El Aaiun',
    'Africa/Maputo' => 'Afrique / Maputo',
    'Africa/Windhoek' => 'Afrique / Windhoek',
    'Africa/Niamey' => 'Afrique/Niamey',
    'Africa/Lagos' => 'Afrique/Lagos',
    'Indian/Reunion' => 'Océan Indien/La Réunion',
    'Africa/Kigali' => 'Afrique/Kigali',
    'Atlantic/St_Helena' => 'Atlantique/Sainte-Hélène',
    'Africa/Sao_Tome' => 'Afrique/Sao Tomé',
    'Africa/Dakar' => 'Afrique/Dakar',
    'Indian/Mahe' => 'Inde/Mahé',
    'Africa/Freetown' => 'Afrique/Libreville',
    'Africa/Mogadishu' => 'Afrique/Mogadicio',
    'Africa/Johannesburg' => 'Afrique/Johannesburg',
    'Africa/Khartoum' => 'Afrique / Khartoum',
    'Africa/Mbabane' => 'Afrique / Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrique/Dar es Salaam',
    'Africa/Lome' => 'Afrique/Lomé',
    'Africa/Tunis' => 'Afrique/Tunis',
    'Africa/Kampala' => 'Afrique / Kampala',
    'Africa/Lusaka' => 'Afrique / Lusaka',
    'Africa/Harare' => 'Afrique/Hararé',
    'Antarctica/Casey' => 'Antartique / Casey',
    'Antarctica/Davis' => 'Antartique / Davis',
    'Antarctica/Mawson' => 'Antartique / Mawson',
    'Indian/Kerguelen' => 'Inde / Kerguelen',
    'Antarctica/DumontDUrville' => 'Antartique/DumontDUrville',
    'Antarctica/Syowa' => 'Antartique / Syowa',
    'Antarctica/Vostok' => 'Antartique / Vostok',
    'Antarctica/Rothera' => 'Antartique / Rothera',
    'Antarctica/Palmer' => 'Antartique / Palmer',
    'Antarctica/McMurdo' => 'Antartique / McMurdo',
    'Asia/Kabul' => 'Asie / Kabul',
    'Asia/Yerevan' => 'Asie /Yerevan',
    'Asia/Baku' => 'Asie/Baku',
    'Asia/Bahrain' => 'Asie/Bahrain',
    'Asia/Dhaka' => 'Asie /Dhaka',
    'Asia/Thimphu' => 'Asie /Thimphu',
    'Indian/Chagos' => 'Inde/Chagos',
    'Asia/Brunei' => 'Asie/Brunei',
    'Asia/Rangoon' => 'Asie /Rangoon',
    'Asia/Phnom_Penh' => 'Asie /Phnom Penh',
    'Asia/Beijing' => 'Asie/Pékin',
    'Asia/Harbin' => 'Asie /Harbin',
    'Asia/Shanghai' => 'Asie/Shanghai',
    'Asia/Chongqing' => 'Asie /Chongqing',
    'Asia/Urumqi' => 'Asie /Urumqi',
    'Asia/Kashgar' => 'Asie/Kashgar',
    'Asia/Hong_Kong' => 'Asie/Hong Kong',
    'Asia/Taipei' => 'Asie/Taipei',
    'Asia/Macau' => 'Asie/Macao',
    'Asia/Nicosia' => 'Asie/Nicosie',
    'Asia/Tbilisi' => 'Asie/Tbilisi',
    'Asia/Dili' => 'Asie/Dili',
    'Asia/Calcutta' => 'Asie/Calcutta',
    'Asia/Jakarta' => 'Asie/Jakarta',
    'Asia/Pontianak' => 'Asie/Pontianak',
    'Asia/Makassar' => 'Asie/Makassar',
    'Asia/Jayapura' => 'Asie/Jayapura',
    'Asia/Tehran' => 'Asie/Téhéran',
    'Asia/Baghdad' => 'Asie/Bagdad',
    'Asia/Jerusalem' => 'Asie/Jérusalem',
    'Asia/Tokyo' => 'Asie/Tokyo',
    'Asia/Amman' => 'Asie/Amman',
    'Asia/Almaty' => 'Asie/Almaty',
    'Asia/Qyzylorda' => 'Asie/Kyzylorda',
    'Asia/Aqtobe' => 'Asie/Aqtobe',
    'Asia/Aqtau' => 'Asie/Aqtaū',
    'Asia/Oral' => 'Asie/Oral',
    'Asia/Bishkek' => 'Asie/Bishkek',
    'Asia/Seoul' => 'Asie/Séoul',
    'Asia/Pyongyang' => 'Asie/Pyongyang',
    'Asia/Kuwait' => 'Asie/Kuwait',
    'Asia/Vientiane' => 'Asie/Vientiane',
    'Asia/Beirut' => 'Asie/Beyrouth',
    'Asia/Kuala_Lumpur' => 'Asie/Kuala Lumpur',
    'Asia/Kuching' => 'Asie/Kuching',
    'Indian/Maldives' => 'Océan Indien/Les Maldives',
    'Asia/Hovd' => 'Asie/Hovd',
    'Asia/Ulaanbaatar' => 'Asie/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asie/Choybalsan',
    'Asia/Katmandu' => 'Asie/Katmandu',
    'Asia/Muscat' => 'Asie/Muscat',
    'Asia/Karachi' => 'Asie/Karachi',
    'Asia/Gaza' => 'Asie/Gaza',
    'Asia/Manila' => 'Asie/Manille',
    'Asia/Qatar' => 'Asie/Qatar',
    'Asia/Riyadh' => 'Asie/Riyadh',
    'Asia/Singapore' => 'Asie/Singapour',
    'Asia/Colombo' => 'Asie/Colombo',
    'Asia/Damascus' => 'Asie/Damas',
    'Asia/Dushanbe' => 'Asie/Dushanbe',
    'Asia/Bangkok' => 'Asie/Bangkok',
    'Asia/Ashgabat' => 'Asie/Ashgabat',
    'Asia/Dubai' => 'Asie/Dubaï',
    'Asia/Samarkand' => 'Asie/Samarkand',
    'Asia/Tashkent' => 'Asie/Tashkent',
    'Asia/Saigon' => 'Asie/Saigon',
    'Asia/Aden' => 'Asie/Aden',
    'Australia/Darwin' => 'Australie/Darwin',
    'Australia/Perth' => 'Australie / Perth',
    'Australia/Brisbane' => 'Australie / Brisbane',
    'Australia/Lindeman' => 'Australie / Lindeman',
    'Australia/Adelaide' => 'Australie / Adelaide',
    'Australia/Hobart' => 'Australie / Hobart',
    'Australia/Currie' => 'Australie / Currie',
    'Australia/Melbourne' => 'Australie / Melbourne',
    'Australia/Sydney' => 'Australie / Sydney',
    'Australia/Broken_Hill' => 'Australie / Broken Hill',
    'Indian/Christmas' => 'Inde/Christmas',
    'Pacific/Rarotonga' => 'Pacifique/Rarotonga',
    'Indian/Cocos' => 'Inde/Cocos',
    'Pacific/Fiji' => 'Pacifique/Fidji',
    'Pacific/Gambier' => 'Pacifique/Gambier',
    'Pacific/Marquesas' => 'Pacifique/Marquesas',
    'Pacific/Tahiti' => 'Pacifique/Tahiti',
    'Pacific/Guam' => 'Pacifique/Guam',
    'Pacific/Tarawa' => 'Pacifique/Tarawa',
    'Pacific/Enderbury' => 'Pacifique/Enderbury',
    'Pacific/Kiritimati' => 'Pacifique/Kiritimati',
    'Pacific/Saipan' => 'Pacifique/Saipan',
    'Pacific/Majuro' => 'Pacifique/Majuro',
    'Pacific/Kwajalein' => 'Pacifique/Kwajalein',
    'Pacific/Truk' => 'Pacifique/Truk',
    'Pacific/Pohnpei' => 'Pacifique/Ponape',
    'Pacific/Kosrae' => 'Pacifique/Kosrae',
    'Pacific/Nauru' => 'Pacifique/Nauru',
    'Pacific/Noumea' => 'Pacifique/Noumea',
    'Pacific/Auckland' => 'Pacifique/Auckland',
    'Pacific/Chatham' => 'Pacifique/Chatham',
    'Pacific/Niue' => 'Pacifique/Niue',
    'Pacific/Norfolk' => 'Pacifique/Norfolk',
    'Pacific/Palau' => 'Pacifique/Palau',
    'Pacific/Port_Moresby' => 'Pacifique/Port Moresby',
    'Pacific/Pitcairn' => 'Pacifique/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacifique/Pago Pago',
    'Pacific/Apia' => 'Pacifique/Apia',
    'Pacific/Guadalcanal' => 'Pacifique/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacifique/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifique/Tongatapu',
    'Pacific/Funafuti' => 'Pacifique/Funafuti',
    'Pacific/Johnston' => 'Pacifique/Johnston',
    'Pacific/Midway' => 'Pacifique/Midway',
    'Pacific/Wake' => 'Pacifique/Wake',
    'Pacific/Efate' => 'Pacifique/Efate',
    'Pacific/Wallis' => 'Pacifique/Wallis',
    'Europe/London' => 'Europe/Londres',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirana',
    'Europe/Andorra' => 'Europe/Andorre',
    'Europe/Vienna' => 'Europe/Vienne',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Bruxelles',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhague',
    'Atlantic/Faeroe' => 'Atlantique/Féroé',
    'America/Danmarkshavn' => 'Amérique/Danmarkshavn',
    'America/Scoresbysund' => 'Amérique/Scoresbysund',
    'America/Godthab' => 'Amérique/Godthab',
    'America/Thule' => 'Amérique/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athènes',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantique/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malte',
    'Europe/Chisinau' => 'Europe/Chișinău',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Varsovie',
    'Europe/Lisbon' => 'Europe/Lisbone',
    'Atlantic/Azores' => 'Atlantique/Açores',
    'Atlantic/Madeira' => 'Atlantique/Madère',
    'Europe/Bucharest' => 'Europe/Bucarest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscou',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asie/Yekaterinburg',
    'Asia/Omsk' => 'Asie/Omsk',
    'Asia/Novosibirsk' => 'Asie/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asie/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asie/Irkutsk',
    'Asia/Yakutsk' => 'Asie/Yakutsk',
    'Asia/Vladivostok' => 'Asie/Vladivostok',
    'Asia/Sakhalin' => 'Asie/Sakhalin',
    'Asia/Magadan' => 'Asie/Magadan',
    'Asia/Kamchatka' => 'Asie/Kamchatka',
    'Asia/Anadyr' => 'Asie/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Afrique / Ceuta',
    'Atlantic/Canary' => 'Atlantique/Canaries',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Oujhorod',
    'Europe/Zaporozhye' => 'Europe/Zaporijia',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'Amérique / New York',
    'America/Chicago' => 'Amérique / Chicago',
    'America/North_Dakota/Center' => 'Amérique/Dakota du Nord/Centre',
    'America/Denver' => 'Amérique / Denver',
    'America/Los_Angeles' => 'Amérique / Los Angeles',
    'America/Juneau' => 'Amérique / Juneau',
    'America/Yakutat' => 'Amérique / Yakutat',
    'America/Anchorage' => 'Amérique / Anchorage',
    'America/Nome' => 'Amérique/Nome',
    'America/Adak' => 'Amérique/Adak',
    'Pacific/Honolulu' => 'Pacifique/Honolulu',
    'America/Phoenix' => 'Amérique / Phoenix',
    'America/Boise' => 'Amérique/Boise',
    'America/Indiana/Indianapolis' => 'Amérique/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amérique/Indiana/Marengo',
    'America/Indiana/Knox' => 'Amérique/Indiana/Knox',
    'America/Indiana/Vevay' => 'Amérique/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Amérique/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amérique/Kentucky/Monticello',
    'America/Detroit' => 'Amérique/Détroit',
    'America/Menominee' => 'Amérique/Menominee',
    'America/St_Johns' => 'Amérique/St. Johns',
    'America/Goose_Bay' => 'Amérique/Goose Bay',
    'America/Halifax' => 'Amérique/Halifax',
    'America/Glace_Bay' => 'Amérique/Glace Bay',
    'America/Montreal' => 'Amérique/Montréal',
    'America/Toronto' => 'Amérique/Toronto',
    'America/Thunder_Bay' => 'Amérique/Thunder Bay',
    'America/Nipigon' => 'Amérique/Nipigon',
    'America/Rainy_River' => 'Amérique/Rainy River',
    'America/Winnipeg' => 'Amérique/Winnipeg',
    'America/Regina' => 'Amérique/Regina',
    'America/Swift_Current' => 'Amérique/Swift Current',
    'America/Edmonton' => 'Amérique/Edmonton',
    'America/Vancouver' => 'Amérique / Vancouver',
    'America/Dawson_Creek' => 'Amérique/Dawson Creek',
    'America/Pangnirtung' => 'Amérique/Pangnirtung',
    'America/Iqaluit' => 'Amérique/Iqaluit',
    'America/Coral_Harbour' => 'Amérique/Coral Harbour',
    'America/Rankin_Inlet' => 'Amérique/Rankin Inlet',
    'America/Cambridge_Bay' => 'Amérique/Cambridge Bay',
    'America/Yellowknife' => 'Amérique/Yellowknife',
    'America/Inuvik' => 'Amérique/Inuvik',
    'America/Whitehorse' => 'Amérique/Whitehorse',
    'America/Dawson' => 'Amérique/Dawson',
    'America/Cancun' => 'Amérique/Cancun',
    'America/Merida' => 'Amérique/Merida',
    'America/Monterrey' => 'Amérique/Monterrey',
    'America/Mexico_City' => 'Amérique/Mexique ville',
    'America/Chihuahua' => 'Amérique/Chihuahua',
    'America/Hermosillo' => 'Amérique/Hermosillo',
    'America/Mazatlan' => 'Amérique/Mazatlan',
    'America/Tijuana' => 'Amérique/Tijuana',
    'America/Anguilla' => 'Amérique/Anguilla',
    'America/Antigua' => 'Amérique/Antigua',
    'America/Nassau' => 'Amérique/Nassau',
    'America/Barbados' => 'Amérique/Barbados',
    'America/Belize' => 'Amérique/Bélize',
    'Atlantic/Bermuda' => 'Atlantique/Bermudes',
    'America/Cayman' => 'Amérique/Cayman',
    'America/Costa_Rica' => 'Amérique/Costa Rica',
    'America/Havana' => 'Amérique/La Havane',
    'America/Dominica' => 'Amérique/Dominica',
    'America/Santo_Domingo' => 'Amérique/Saint-Domingue',
    'America/El_Salvador' => 'Amérique/El Salvador',
    'America/Grenada' => 'Amérique/Grenada',
    'America/Guadeloupe' => 'Amérique/Guadeloupe',
    'America/Guatemala' => 'Amérique/Guatemala',
    'America/Port-au-Prince' => 'Amérique/Port-au-Prince',
    'America/Tegucigalpa' => 'Amérique/Tegucigalpa',
    'America/Jamaica' => 'Amérique / Jamaïque',
    'America/Martinique' => 'Amérique/Martinique',
    'America/Montserrat' => 'Amérique/Montserrat',
    'America/Managua' => 'Amérique/Managua',
    'America/Panama' => 'Amérique/Panama',
    'America/Puerto_Rico' => 'Amérique/Puerto Rico',
    'America/St_Kitts' => 'Amérique/St Kitts',
    'America/St_Lucia' => 'Amérique/Ste Lucia',
    'America/Miquelon' => 'Amérique/Miquelon',
    'America/St_Vincent' => 'Amérique/Saint-Vincent',
    'America/Grand_Turk' => 'Amérique/Grand Turk',
    'America/Tortola' => 'Amérique/Tortola',
    'America/St_Thomas' => 'Amérique/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'Amérique/Argentine/Buenos Aires',
    'America/Argentina/Cordoba' => 'Amérique/Argentine/Cordoba',
    'America/Argentina/Tucuman' => 'Amérique/Argentine/Tucuman',
    'America/Argentina/La_Rioja' => 'Amérique/Argentine/La_Rioja',
    'America/Argentina/San_Juan' => 'Amérique/Argentine/San Juan',
    'America/Argentina/Jujuy' => 'Amérique/Argentine/Jujuy',
    'America/Argentina/Catamarca' => 'Amérique/Argentine/Catamarca',
    'America/Argentina/Mendoza' => 'Amérique/Argentine/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amérique/Argentine/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Amérique/Argentine/Ushuaïa',
    'America/Aruba' => 'Amérique/Aruba',
    'America/La_Paz' => 'Amérique/La Paz',
    'America/Noronha' => 'Amérique/Noronha',
    'America/Belem' => 'Amérique/Belem',
    'America/Fortaleza' => 'Amérique/Fortaleza',
    'America/Recife' => 'Amérique/Recife',
    'America/Araguaina' => 'Amérique/Araguaina',
    'America/Maceio' => 'Amérique/Maceio',
    'America/Bahia' => 'Amérique/Bahia',
    'America/Sao_Paulo' => 'Amérique/São Paulo',
    'America/Campo_Grande' => 'Amérique/Campo Grande',
    'America/Cuiaba' => 'Amérique/Cuiaba',
    'America/Porto_Velho' => 'Amérique/Porto Velho',
    'America/Boa_Vista' => 'Amérique/Boa Vista',
    'America/Manaus' => 'Amérique/Manaus',
    'America/Eirunepe' => 'Amérique/Eirunepe',
    'America/Rio_Branco' => 'Amérique/Rio Branco',
    'America/Santiago' => 'Amérique/Santiago',
    'Pacific/Easter' => 'Pacifique/Easter',
    'America/Bogota' => 'Amérique/Bogota',
    'America/Curacao' => 'Amérique/Curacao',
    'America/Guayaquil' => 'Amérique/Guayaquil',
    'Pacific/Galapagos' => 'Pacifique/Galapagos',
    'Atlantic/Stanley' => 'Atlantique/Stanley',
    'America/Cayenne' => 'Amérique / Cayenne',
    'America/Guyana' => 'Amérique/Guyana',
    'America/Asuncion' => 'Amérique/Asuncion',
    'America/Lima' => 'Amérique / Lima',
    'Atlantic/South_Georgia' => 'Atlantique/Georgie du Sud',
    'America/Paramaribo' => 'Amérique/Paramaribo',
    'America/Port_of_Spain' => 'Amérique/Port d\'Espagne',
    'America/Montevideo' => 'Amérique/Montevideo',
    'America/Caracas' => 'Amérique/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contacts Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Demande',
    2 => 'Accès',
    3 => 'Invalide',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'E-mail',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campagne',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'E-mail',
    'system' => 'Système',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Base de connaissance'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Catégories'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = 'Brouillon';
$app_list_strings['aok_status_list']['Expired'] = 'Périmé';
$app_list_strings['aok_status_list']['In_Review'] = 'En relecture';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privée';
$app_list_strings['aok_status_list']['published_public'] = 'Public';

$app_list_strings['moduleList']['FP_events'] = 'Évènements';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Localisations';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invité';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Pas invité';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'A participé';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'N\'a pas participé';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accepté';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Refusé';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Pas de réponse';

$app_strings['LBL_STATUS_EVENT'] = 'Statut de l\'invitation';
$app_strings['LBL_ACCEPT_STATUS'] = 'Statut acceptation';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Page courante';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Liste Complète';
$app_strings['LBL_LISTVIEW_NONE'] = 'Aucun';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index des évènements';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Événements du Cas';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Mises à jour du cas';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Veuillez répondre au-dessus de cette ligne ===';



//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Ouvert',
        'Closed' => 'Fermé',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nouveau',
        'Open_Assigned' => 'Assigné',
        'Closed_Closed' => 'Fermé',
        'Open_Pending Input' => 'En attente',
        'Closed_Rejected' => 'Rejeté',
        'Closed_Duplicate' => 'Dupliquer',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Utilisateur unique',
        'Account' => 'Compte utilisateur',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Utiliser les paramètres AOP par défaut',
    'singleUser' => 'Utilisateur unique',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Moins chargé',
    'random' => 'Aléatoire',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rapports';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Critères du Rapport';
$app_list_strings['moduleList']['AOR_Charts'] = 'Graphique de rapport';
$app_list_strings['moduleList']['AOR_Fields'] = 'Champs du Rapport';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Rapports planifiés';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Egal à';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Différent de';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Supérieur à';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Inférieur à';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Supérieur ou égal à';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Inférieur ou égal à';
$app_list_strings['aor_operator_list']['Contains'] = 'contient';
$app_list_strings['aor_operator_list']['Not_Contains'] = 'Ne contient pas';
$app_list_strings['aor_operator_list']['Starts_With'] = 'commence par';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Fini par';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'A-m-j';
$app_list_strings['aor_format_options']['Ymd'] = 'Amj';
$app_list_strings['aor_format_options']['Y-m'] = 'A-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'j/m/A';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_condition_operator_list']['And'] = 'et';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aor_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aor_condition_type_list']['Date'] = 'Date';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aor_condition_type_list']['Period'] = 'Période';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Utilisateur courant';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aor_date_type_list']['hour'] = 'Heures';
$app_list_strings['aor_date_type_list']['day'] = 'Jours';
$app_list_strings['aor_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aor_date_type_list']['month'] = 'Mois';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Heures ouvrées';
$app_list_strings['aor_date_options']['now'] = 'Maintenant';
$app_list_strings['aor_date_options']['field'] = 'Ce champ';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Croissant';
$app_list_strings['aor_sort_operator']['DESC'] = 'Décroissant';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Décompte';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Total';
$app_list_strings['aor_function_list']['AVG'] = 'Moyenne';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Décompte';
$app_list_strings['aor_total_options']['SUM'] = 'Total';
$app_list_strings['aor_total_options']['AVG'] = 'Moyenne';
$app_list_strings['aor_chart_types']['bar'] = 'Histogramme';
$app_list_strings['aor_chart_types']['line'] = 'Graphique courbe';
$app_list_strings['aor_chart_types']['pie'] = 'Graphique en camembert';
$app_list_strings['aor_chart_types']['radar'] = 'Graphique en radar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Barres empilées';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Barres groupées';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensuel';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Hebdomadaire';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Quotidien';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Activé';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Désactivé';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aor_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aor_assign_options']['all'] = 'TOUS les utilisateurs';
$app_list_strings['aor_assign_options']['role'] = 'TOUS les utilisateurs de rôle';
$app_list_strings['aor_assign_options']['security_group'] = 'TOUS les utilisateurs du groupe de sécurité';
$app_list_strings['date_time_period_list']['today'] = 'Aujourd\'hui';
$app_list_strings['date_time_period_list']['yesterday'] = 'Hier';
$app_list_strings['date_time_period_list']['this_week'] = 'Cette semaine';
$app_list_strings['date_time_period_list']['last_week'] = 'Dernière Semaine';
$app_list_strings['date_time_period_list']['last_month'] = 'Le mois dernier';
$app_list_strings['date_time_period_list']['this_month'] = 'Ce mois-ci';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ce trimestre';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Le trimestre dernier';
$app_list_strings['date_time_period_list']['this_year'] = 'Cette année';
$app_list_strings['date_time_period_list']['last_year'] = 'Année dernière';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'le';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'le';
$app_strings['LBL_CRON_AT'] = 'à';
$app_strings['LBL_CRON_RAW'] = 'Avancé';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Heure';
$app_strings['LBL_CRON_DAY'] = 'Jour';
$app_strings['LBL_CRON_MONTH'] = 'Mois';
$app_strings['LBL_CRON_DOW'] = 'Jour de la semaine';
$app_strings['LBL_CRON_DAILY'] = 'Quotidien';
$app_strings['LBL_CRON_WEEKLY'] = 'Hebdomadaire';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensuel';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contrats';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Factures';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - modèles';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produits- catégories';
$app_list_strings['moduleList']['AOS_Products'] = 'Produits';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Lignes de produits';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Groupes de lignes produits';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Devis';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analyste';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Concurrent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Intégrateur';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investisseur';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partenaire';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Revendeur';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Autre';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Brouillon';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Négociation';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Délivré';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Suspendu';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmé';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Clos Accepté';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Perdu';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Clos Abandonné';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15 jours';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30 jours';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Validé';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Non validé';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pourcent';
$app_list_strings['discount_list']['Amount'] = 'Montant';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analyste';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Concurrent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Intégrateur';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investisseur';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partenaire';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Revendeur';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Autre';
$app_list_strings['invoice_status_dom']['Paid'] = 'Payé';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Non payé';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Annulé';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Non facturé';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Facturé';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Ordinateurs portables';
$app_list_strings['product_category_dom']['Desktops'] = 'Ordinateurs de bureau';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Bon';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Comptes';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contacts';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Prospects';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Non démarré';
$app_list_strings['contract_status_list']['In Progress'] = 'En cours';
$app_list_strings['contract_status_list']['Signed'] = 'Signé';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_PRINT_AS_PDF'] = 'Imprimer en PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Veuillez sélectionner un Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERREUR\nAucun template trouvé\nVeuillez aller à la section PDF Templates et créez en un';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flux d\'activité';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Critères du WorkFlow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Analyse du processus';
$app_list_strings['moduleList']['AOW_Actions'] = 'Actions du WorkFlow';
$app_list_strings['aow_status_list']['Active'] = 'Activé';
$app_list_strings['aow_status_list']['Inactive'] = 'Désactivé';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Egal à';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Différent de';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Supérieur à';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Inférieur à';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Supérieur ou égal à';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Inférieur ou égal à';
$app_list_strings['aow_operator_list']['Contains'] = 'contient';
$app_list_strings['aow_operator_list']['Starts_With'] = 'commence par';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Fini par';
$app_list_strings['aow_operator_list']['is_null'] = 'Vide';
$app_list_strings['aow_process_status_list']['Complete'] = 'Terminée';
$app_list_strings['aow_process_status_list']['Running'] = 'En cours d\'exécution';
$app_list_strings['aow_process_status_list']['Pending'] = 'En attente';
$app_list_strings['aow_process_status_list']['Failed'] = 'Echec';
$app_list_strings['aow_condition_operator_list']['And'] = 'et';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Tout changement';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Dans le groupe de sécurité';
$app_list_strings['aow_condition_type_list']['Date'] = 'Date';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aow_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_action_type_list']['Date'] = 'Date';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'A tour de rôle';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Moins chargé';
$app_list_strings['aow_action_type_list']['Random'] = 'Aléatoire';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aow_date_type_list']['hour'] = 'Heures';
$app_list_strings['aow_date_type_list']['day'] = 'Jours';
$app_list_strings['aow_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aow_date_type_list']['month'] = 'Mois';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Heures ouvrées';
$app_list_strings['aow_date_options']['now'] = 'Maintenant';
$app_list_strings['aow_date_options']['today'] = 'Aujourd\'hui';
$app_list_strings['aow_date_options']['field'] = 'Ce champ';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'TOUS les utilisateurs';
$app_list_strings['aow_assign_options']['role'] = 'TOUS les utilisateurs de rôle';
$app_list_strings['aow_assign_options']['security_group'] = 'TOUS les utilisateurs du groupe de sécurité';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Enregistrer l\'E-mail';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Champ lié';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aow_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aow_email_type_list']['Record Field'] = 'Champ';
$app_list_strings['aow_email_to_list']['to'] = 'A';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Cci';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tous les enregistrements';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nouveaux enregistrements';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Enregistrements modifiés';
$app_list_strings['aow_run_when_list']['Always'] = '- toujours -';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Seulement à l\'enregistrement';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Seulement dans le planificateur';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projets - modèles';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Modèles de tâches';
$app_list_strings['relationship_type_list']['FS'] = 'Finaliser pour démarrer';
$app_list_strings['relationship_type_list']['SS'] = 'Démarrer pour commencer';
$app_list_strings['duration_unit_dom']['Days'] = 'Jours';
$app_list_strings['duration_unit_dom']['Hours'] = 'Heures';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Voir le Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Voir le détail';
$app_strings['LBL_CREATE_PROJECT'] = 'Créer Projet';

//gmaps
$app_strings['LBL_MAP'] = 'Carte';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status Géocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Cartes';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Cartes - Marqueurs';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Cartes - zones';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Cartes - cache des adresses';

$app_list_strings['moduleList']['jjwp_Partners'] = 'Partenaires JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'Km';
$app_list_strings['map_unit_type_list']['km'] = 'Kilomètres';

$app_list_strings['map_module_type_list']['Accounts'] = 'Comptes';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_module_type_list']['Cases'] = 'Tickets';
$app_list_strings['map_module_type_list']['Leads'] = 'Prospects';
$app_list_strings['map_module_type_list']['Meetings'] = 'Réunions';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Affaires';
$app_list_strings['map_module_type_list']['Project'] = 'Projets';
$app_list_strings['map_module_type_list']['Prospects'] = 'Cibles';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Comptes';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_relate_type_list']['Cases'] = 'Tickets';
$app_list_strings['map_relate_type_list']['Leads'] = 'Prospect';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Réunions';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Affaires';
$app_list_strings['map_relate_type_list']['Project'] = 'Projets';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Cible';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administration';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Petit Avion';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avion Tourisme';
$app_list_strings['marker_image_list']['airport'] = 'Aéroport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphithéâtre';
$app_list_strings['marker_image_list']['apartment'] = 'Appartement';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arche';
$app_list_strings['marker_image_list']['atm'] = 'DAB';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banque';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banque Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banque Livre';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plage';
$app_list_strings['marker_image_list']['beautiful'] = 'Belle';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Stationnement pour vélos';
$app_list_strings['marker_image_list']['big_city'] = 'Grande ville';
$app_list_strings['marker_image_list']['bridge'] = 'Pont';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Pont moderne';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Téléphérique';
$app_list_strings['marker_image_list']['car'] = 'Voiture';
$app_list_strings['marker_image_list']['car_rental'] = 'Location voiture';
$app_list_strings['marker_image_list']['carrepair'] = 'Garage';
$app_list_strings['marker_image_list']['castle'] = 'Château';
$app_list_strings['marker_image_list']['cathedral'] = 'Cathédrale';
$app_list_strings['marker_image_list']['chapel'] = 'Chapelle';
$app_list_strings['marker_image_list']['church'] = 'Église';
$app_list_strings['marker_image_list']['city_square'] = 'Place de la ville';
$app_list_strings['marker_image_list']['cluster'] = 'Groupe';
$app_list_strings['marker_image_list']['cluster_2'] = 'Groupe 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Groupe 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Groupe 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Groupe 5';
$app_list_strings['marker_image_list']['coffee'] = 'Café';
$app_list_strings['marker_image_list']['community_centre'] = 'Centre communautaire';
$app_list_strings['marker_image_list']['company'] = 'Société';
$app_list_strings['marker_image_list']['conference'] = 'Conférence';
$app_list_strings['marker_image_list']['construction'] = 'Construction - BTP';
$app_list_strings['marker_image_list']['convenience'] = 'Magasin';
$app_list_strings['marker_image_list']['court'] = 'Cour';
$app_list_strings['marker_image_list']['cruise'] = 'Croisière';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Bureau de change';
$app_list_strings['marker_image_list']['customs'] = 'Douanes';
$app_list_strings['marker_image_list']['cycling'] = 'Cyclisme';
$app_list_strings['marker_image_list']['dam'] = 'Barrage';
$app_list_strings['marker_image_list']['days_dim'] = 'Jours Dim ';
$app_list_strings['marker_image_list']['days_dom'] = 'Jours Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Jours Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Jours Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Jours Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Jours Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Jours Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Jours Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Jours Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Jours Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Jours Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Jours Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Jours Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Jours Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Jours Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Jours Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Jours Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Dentiste';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Grand magasin';
$app_list_strings['marker_image_list']['disability'] = 'Handicap';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parking handicapé';
$app_list_strings['marker_image_list']['doctor'] = 'Médecin';
$app_list_strings['marker_image_list']['dog_leash'] = 'Laisse chien';
$app_list_strings['marker_image_list']['down'] = 'Vers le bas';
$app_list_strings['marker_image_list']['down_left'] = 'Bas gauche';
$app_list_strings['marker_image_list']['down_right'] = 'Bas à droite';
$app_list_strings['marker_image_list']['down_then_left'] = 'Vers le bas puis gauche';
$app_list_strings['marker_image_list']['down_then_right'] = 'Vers le bas puis à droite';
$app_list_strings['marker_image_list']['drugs'] = 'Médicaments';
$app_list_strings['marker_image_list']['elevator'] = 'Ascenseur';
$app_list_strings['marker_image_list']['embassy'] = 'Ambassade';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Usine';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Chutes de pierres';
$app_list_strings['marker_image_list']['fast_food'] = 'Restauration rapide';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forêt';
$app_list_strings['marker_image_list']['fountain'] = 'Fontaine';
$app_list_strings['marker_image_list']['friday'] = 'Le vendredi';
$app_list_strings['marker_image_list']['garden'] = 'Jardin';
$app_list_strings['marker_image_list']['gas_station'] = 'Pompe à essence';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Cadeaux';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Épicerie';
$app_list_strings['marker_image_list']['hairsalon'] = 'Salon de coiffure';
$app_list_strings['marker_image_list']['helicopter'] = 'Hélicoptère';
$app_list_strings['marker_image_list']['highway'] = 'Autoroute';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Quartier Historique';
$app_list_strings['marker_image_list']['home'] = 'Accueil';
$app_list_strings['marker_image_list']['hospital'] = 'Hôpital';
$app_list_strings['marker_image_list']['hostel'] = 'Hôtel';
$app_list_strings['marker_image_list']['hotel'] = 'Hôtel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hôtel 1 étoile';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hôtel 2 étoiles';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hôtel 3 étoiles';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hôtel 4 étoiles';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hôtel 5 étoiles';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lac';
$app_list_strings['marker_image_list']['laundromat'] = 'Laverie automatique';
$app_list_strings['marker_image_list']['left'] = 'Gauche';
$app_list_strings['marker_image_list']['left_then_down'] = 'Gauche puis Bas';
$app_list_strings['marker_image_list']['left_then_up'] = 'Gauche puis Haut';
$app_list_strings['marker_image_list']['library'] = 'Librairie';
$app_list_strings['marker_image_list']['lighthouse'] = 'Phare';
$app_list_strings['marker_image_list']['liquor'] = 'Alcool';
$app_list_strings['marker_image_list']['lock'] = 'Serrure';
$app_list_strings['marker_image_list']['main_road'] = 'Route principale';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Antenne Relais Mobile';
$app_list_strings['marker_image_list']['modern_tower'] = 'Tour moderne';
$app_list_strings['marker_image_list']['monastery'] = 'Monastère';
$app_list_strings['marker_image_list']['monday'] = 'Le lundi';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosquée';
$app_list_strings['marker_image_list']['motorcycle'] = 'Moto';
$app_list_strings['marker_image_list']['museum'] = 'Musée';
$app_list_strings['marker_image_list']['music_live'] = 'Concert Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Chevalet de pompage';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Palais';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramique';
$app_list_strings['marker_image_list']['park'] = 'Parc';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parc relais';
$app_list_strings['marker_image_list']['parking'] = 'Stationnement';
$app_list_strings['marker_image_list']['photo'] = 'Photo';
$app_list_strings['marker_image_list']['picnic'] = 'Pic-Nic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Endroits inconnus';
$app_list_strings['marker_image_list']['places_visited'] = 'Endroits visités';
$app_list_strings['marker_image_list']['playground'] = 'Terrain de jeux';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Boîte aux lettres';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Poteau électrique';
$app_list_strings['marker_image_list']['power_plant'] = 'Centrale électrique';
$app_list_strings['marker_image_list']['power_substation'] = 'Poste électrique';
$app_list_strings['marker_image_list']['public_art'] = 'Art public';
$app_list_strings['marker_image_list']['rain'] = 'Pluie';
$app_list_strings['marker_image_list']['real_estate'] = 'Immobilier';
$app_list_strings['marker_image_list']['regroup'] = 'Regroupement';
$app_list_strings['marker_image_list']['resort'] = 'Station';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant Africain';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant grill';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinois';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant de poisson';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish and Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant gastronomique';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant grec';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant indien';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant italien';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant japonais';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant coréen';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant méditerranéen';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant mexicain';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant romantique';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant turc';
$app_list_strings['marker_image_list']['right'] = 'À droite';
$app_list_strings['marker_image_list']['right_then_down'] = 'À droite et en bas';
$app_list_strings['marker_image_list']['right_then_up'] = 'À droite et en haut';
$app_list_strings['marker_image_list']['saturday'] = 'Le samedi';
$app_list_strings['marker_image_list']['school'] = 'Ecole';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centre Commercial';
$app_list_strings['marker_image_list']['shore'] = 'Rivage';
$app_list_strings['marker_image_list']['sight'] = 'Vue';
$app_list_strings['marker_image_list']['small_city'] = 'Village';
$app_list_strings['marker_image_list']['snow'] = 'Neige';
$app_list_strings['marker_image_list']['spaceport'] = 'Base de lancement';
$app_list_strings['marker_image_list']['speed_100'] = 'Vitesse à 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Vitesse à 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Vitesse à 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Vitesse à 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Vitesse à 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Vitesse à 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Vitesse à 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Vitesse à 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Vitesse à 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Vitesse à 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Vitesse à 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Vitesse à 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Ralentisseur';
$app_list_strings['marker_image_list']['stadium'] = 'Stade';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Train à vapeur';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Feu';
$app_list_strings['marker_image_list']['subway'] = 'Métro';
$app_list_strings['marker_image_list']['sun'] = 'Dim';
$app_list_strings['marker_image_list']['sunday'] = 'Le dimanche';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarché';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Voie réservée aux taxis';
$app_list_strings['marker_image_list']['teahouse'] = 'Salon de Thé';
$app_list_strings['marker_image_list']['telephone'] = 'Téléphone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindou';
$app_list_strings['marker_image_list']['terrace'] = 'Terrasse';
$app_list_strings['marker_image_list']['text'] = 'Texte';
$app_list_strings['marker_image_list']['theater'] = 'Théâtre';
$app_list_strings['marker_image_list']['theme_park'] = 'Parc d\'Attractions';
$app_list_strings['marker_image_list']['thursday'] = 'Le jeudi';
$app_list_strings['marker_image_list']['toilets'] = 'Toilettes';
$app_list_strings['marker_image_list']['toll_station'] = 'Péage';
$app_list_strings['marker_image_list']['tower'] = 'Tour';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Caméra de surveillance routière';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tramway';
$app_list_strings['marker_image_list']['truck'] = 'Camion';
$app_list_strings['marker_image_list']['tuesday'] = 'Le mardi';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Tourner à Gauche';
$app_list_strings['marker_image_list']['turn_right'] = 'Tourner à Droite';
$app_list_strings['marker_image_list']['university'] = 'Université';
$app_list_strings['marker_image_list']['up'] = 'En haut';
$app_list_strings['marker_image_list']['up_left'] = 'Haut gauche';
$app_list_strings['marker_image_list']['up_right'] = 'Haut droit';
$app_list_strings['marker_image_list']['up_then_left'] = 'En haut et à gauche';
$app_list_strings['marker_image_list']['up_then_right'] = 'En haut et à droite';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Vidéo';
$app_list_strings['marker_image_list']['villa'] = 'Maison';
$app_list_strings['marker_image_list']['water'] = 'Eau';
$app_list_strings['marker_image_list']['waterfall'] = 'Chute d\'eau';
$app_list_strings['marker_image_list']['watermill'] = 'Moulin à Eau';
$app_list_strings['marker_image_list']['waterpark'] = 'Parc Aquatique';
$app_list_strings['marker_image_list']['watertower'] = 'Château d\'eau';
$app_list_strings['marker_image_list']['wednesday'] = 'Le mercredi';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Eolienne';
$app_list_strings['marker_image_list']['windmill'] = 'Moulin à vent';
$app_list_strings['marker_image_list']['winery'] = 'Chai';
$app_list_strings['marker_image_list']['work_office'] = 'Bureau';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Site du patrimoine mondial';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Absent du bureau';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'En réunion';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Merci de saisir les informations de la replanification';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Date :';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motif :';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Veuillez sélectionner une date valide';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Merci de choisir la cause';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Historique des tentatives d\'appel';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Tentatives d\'appel';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gestion des groupes de securité';
$app_strings['LBL_SECURITYGROUP'] = 'Groupes de sécurité';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Comptes d\'E-mails sortants';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Détails des flux sociaux';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtre';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Créer une Société';
$app_strings['LBL_QUICK_CONTACT'] = 'Créer un Contact';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Créer une Affaire';
$app_strings['LBL_QUICK_LEAD'] = 'Créer un prospect';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Créer Document';
$app_strings['LBL_QUICK_CALL'] = 'Planifier un Appel';
$app_strings['LBL_QUICK_TASK'] = 'Créer une Tache';
$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Ajouter un onglet';
$app_strings['LBL_EDIT_TAB'] = 'Editer les onglets';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Tableau de bord SuiteCRM'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Entrer le nom du tableau de bord :';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Nombre de colonnes :';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Etes-vous sûr de vouloir effacer ce';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'tableau de bord ?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Ajouter une page au tableau de bord';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Supprimer la page du tableau de bord en cours';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Renommer la page du tableau de bord';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Actions'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Tâches',
    'Meetings' => 'Réunions',
    'Calls' => 'Appels',
    'Notes' => 'Notes',
    'Emails' => 'E-mails'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editeur de modèles';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Vous avez cliqué en dehors du champ que vous éditiez sans l’enregistrer. Cliquez sur ok si vous voulez perdre vos modifications, ou sur annuler si vous souhaitez continuer l’édition";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Il y a eu une erreur lors du chargement du champ. Votre session peut avoir expiré. Veuillez vous connecter à nouveau pour résoudre ce problème";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Ventes',
    'getAccountsSpotsData' => 'Comptes',
    'getLeadsSpotsData' => 'Prospects',
    'getServiceSpotsData' => 'Service',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Activité marketing',
    'getActivitiesSpotsData' => 'Activités',
    'getQuotesSpotsData' => 'Devis'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Heures ouvrées';
$app_list_strings['business_hours_list']['0'] = '12:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '00:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Le lundi';
$app_list_strings['day_list']['Tuesday'] = 'Le mardi';
$app_list_strings['day_list']['Wednesday'] = 'Le mercredi';
$app_list_strings['day_list']['Thursday'] = 'Le jeudi';
$app_list_strings['day_list']['Friday'] = 'Le vendredi';
$app_list_strings['day_list']['Saturday'] = 'Le samedi';
$app_list_strings['day_list']['Sunday'] = 'Le dimanche';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Lettres';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Légal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Photo';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Paysage';
$app_list_strings['LBL_REPORTS_RESTRICTED'] = 'Un rapport que vous avez sélectionné concerne un module auquel vous n’avez pas accès. Veuillez sélectionner un rapport d\'un module accessible.';


$app_list_strings['moduleList']['SurveyResponses'] = 'Réponses au sondage';
$app_list_strings['moduleList']['Surveys'] = 'Sondages';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Réponses aux questions du sondage';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Questions du sondage';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Options de la question du sondage';
$app_list_strings['survey_status_list']['Draft'] = 'Brouillon';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'Fermé';
$app_list_strings['surveys_question_type']['Text'] = 'Texte';
$app_list_strings['surveys_question_type']['Textbox'] = 'TextBox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Case à cocher';
$app_list_strings['surveys_question_type']['Radio'] = 'Bouton Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Liste déroulante';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Sélection multiple';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrice';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Date';
$app_list_strings['surveys_question_type']['Scale'] = 'Échelle';
$app_list_strings['surveys_question_type']['Rating'] = 'Evaluation';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfait';
$app_list_strings['surveys_matrix_options'][1] = 'Ni satisfait ni insatisfait';
$app_list_strings['surveys_matrix_options'][2] = 'Insatisfait (e)';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Pending Confirm opt in, Confirm opt in not sent';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Pending Confirm opt in, Confirm opt in sent';
$app_strings['LBL_OPT_IN'] = 'Activé';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Activation confirmée';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Désinscrit';
$app_strings['LBL_OPT_IN_INVALID'] = 'Invalide';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Désactivé',
    'opt-in' => 'Opt-In',
    'confirmed-opt-in' => 'Activation confirmée'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Non Opt-In',
    'opt-in' => 'Opt-In',
    'confirmed-opt-in' => 'Activation confirmée'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'The confirm opt in email has been added to the email queue for %s email address(es). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Impossible d’envoyer des email à %s d\'adresse(s) email, parce qu’elles ne sont pas activées. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s d\'adresse mail sans id valide. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Échec de l’authentification en deux étapes';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Code envoyé pour l’authentification en deux étapes.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Merci pour votre intérêt.';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'client_credentials' => 'Client Credentials',
    'implicit' => 'Implicite',
    'authorization_code' => 'Code d\'autorisation'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutes',
    'hour' => 'heures',
    'day' => 'jours',
    'week' => 'semaines',
    'month' => 'mois',
];
