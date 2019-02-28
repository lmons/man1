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
    'LBL_SEND_DATE_TIME' => 'Envoyé à partir de',
    'LBL_IN_QUEUE' => 'En cours',
    'LBL_IN_QUEUE_DATE' => 'Date d&#39;entrée dans la file',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Seulement des valeurs numériques entières sont autorisées pour les E-mails par lot',

    'LBL_ATTACHMENT_AUDIT' => ' a été envoyé. Il n&#39;a pas été dupliqué localement pour conserver l&#39;utilisation du disque.',
    'LBL_CONFIGURE_SETTINGS' => 'Configurer les paramètres E-mails',
    'LBL_CUSTOM_LOCATION' => 'Defini par l&#39;Utilisateur',
    'LBL_DEFAULT_LOCATION' => 'Défaut',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Lors de la suppression d\'un E-mail, supprimer les pièces jointes et Notes qui lui sont rattachées.',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Réglages Opt-In',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Configuration SMTP',
    'LBL_EMAILS_PER_RUN' => 'Nombre d\'E-mails envoyés par lot :',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Campagne',
    'LBL_LIST_FORM_TITLE' => 'File d&#39;attente',
    'LBL_LIST_FROM_NAME' => 'Nom de',
    'LBL_LIST_IN_QUEUE' => 'En cours',
    'LBL_LIST_MESSAGE_NAME' => 'Message Marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'E-mail du destinataire',
    'LBL_LIST_RECIPIENT_NAME' => 'Nom du destinataire',
    'LBL_LIST_SEND_ATTEMPTS' => 'Tentative(s) d&#39;envoi',
    'LBL_LIST_SEND_DATE_TIME' => 'Envoyé à partir de',
    'LBL_LIST_USER_NAME' => 'Nom Utilisateur',
    'LBL_LOCATION_ONLY' => 'Localisation',
    'LBL_LOCATION_TRACK' => 'Localisation du "tracker" (campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Garder une copie des messages envoyés via les Campagnes :',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Voulez-vous stocker une copie complète de <bold>CHAQUE</bold> E-mail envoyé durant toutes les campagnes ?  <bold>Par défaut cette valeur est positionné à Non, c"est aussi ce que nous recommandons</bold>. En choisissant Non, uniquement le modèle du mail sera stocké et les variables seront nécessaires pour re-créer les messages individuels.',
    'LBL_MAIL_SENDTYPE' => 'Agent de Transfert Mail :',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l&#39;authentification&nbsp;SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe :',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP :',
    'LBL_MAIL_SMTPSERVER' => 'Serveur de messagerie SMTP :',
    'LBL_MAIL_SMTPUSER' => 'Nom d\'utilisateur :',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail - E-mail',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe',
    'LBL_GMAIL_SMTPUSER' => 'Adresse E-mail Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur',
    'LBL_EMAIL_LINK_TYPE' => 'Client E-mail utilisé',
    'LBL_MARKETING_ID' => 'ID Marketing',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Paramétrages des E-mails',
    'LBL_MODULE_TITLE' => 'Gestion de la file d\'attente des "Envois en Masse" (Campagnes de Type E-mail ou Newsletter)',
    'LBL_NOTIFICATION_ON_DESC' => 'Envoyer un E-mail de notification lorsque un enregistrement est assigné.',
    'LBL_NOTIFY_FROMADDRESS' => 'E-mail de l\'expéditeur :',
    'LBL_NOTIFY_FROMNAME' => 'Nom de l\'expéditeur des E-mails :',
    'LBL_NOTIFY_ON' => 'Activer les Notifications',
    'LBL_NOTIFY_TITLE' => 'Options de l\'E-mail',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Options des E-mails sortants',
    'LBL_RELATED_ID' => 'Enregistrement lié (ID)',
    'LBL_RELATED_TYPE' => 'Enregistrement de l&#39;enregistrement lié',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher dans la file d&#39;attente',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valeur du paramètre site_url dans le fichier config.php',
    'TXT_REMOVE_ME_ALT' => 'Pour vous retirer de cette liste d\'E-mail',
    'TXT_REMOVE_ME_CLICK' => 'cliquez ici',
    'TXT_REMOVE_ME' => 'Si vous ne souhaitez plus recevoir d\'E-mail de notre part',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'L&#39;expéditeur des notifications est l&#39;utilisateur qui assigne',

    'LBL_SECURITY_TITLE' => 'Paramètres de sécurité',
    'LBL_SECURITY_DESC' => 'Les tags sélectionnés dans la liste ci-dessous ne seront PAS acceptés ni affichés dans les E-mails entrants ou dans le module "E-mails".',
    'LBL_SECURITY_APPLET' => 'Balise applet',
    'LBL_SECURITY_BASE' => 'Balise de base',
    'LBL_SECURITY_EMBED' => 'Balise d\'intégration',
    'LBL_SECURITY_FORM' => 'Balise Formulaire',
    'LBL_SECURITY_FRAME' => 'Balise Frame',
    'LBL_SECURITY_FRAMESET' => 'Balise Frameset',
    'LBL_SECURITY_IFRAME' => 'balise iFrame',
    'LBL_SECURITY_IMPORT' => 'Balise d’importation',
    'LBL_SECURITY_LAYER' => 'Balise de couche',
    'LBL_SECURITY_LINK' => 'Balise de lien',
    'LBL_SECURITY_OBJECT' => 'Balise Object',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Sélectionner les options de sécurité minimum selon Outlook.',
    'LBL_SECURITY_STYLE' => 'Balise de style',
    'LBL_SECURITY_TOGGLE_ALL' => 'Sélectionner/Désélectionner toutes les options',
    'LBL_SECURITY_XMP' => 'Balise Xmp',
    'LBL_YES' => 'Oui',
    'LBL_NO' => 'Non',
    'LBL_PREPEND_TEST' => '[Test] : ',
    'LBL_SEND_ATTEMPTS' => 'Tentatives d&#39;envoi',
    'LBL_OUTGOING_SECTION_HELP' => 'Paramètres du serveur SMTP pour les notifications et les alertes.',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Autoriser les utilisateurs à utiliser ces paramètres pour l\'envoi d\'E-mails :',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quand cette option est activée, tous les utilisateurs utilisent le même serveur SMTP<br>pour les notifications et les alertes. Sinon chaque utilisateur peut<br>définir et choisir son propre serveur SMTP.',
    'LBL_FROM_ADDRESS_HELP' => 'Si activé, le nom de l\'utilisateur assigné ainsi que son E-mail seront utilisés pour le champ "De" de l\'E-mail. Cela ne peut fonctionner que si le serveur SMTP utilisé autorise la surcharge de cette information, pas Gmail par exemple.',
    'LBL_HELP' => 'Aide' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Voir les comptes de messagerie sortants',
);
