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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Avancé',
    'DEFAULT_CURRENCY_ISO4217' => 'Code devise ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nom de la devise',
    'DEFAULT_CURRENCY_SYMBOL' => 'Symbole de la devise',
    'DEFAULT_DATE_FORMAT' => 'Format de date par défaut',
    'DEFAULT_DECIMAL_SEP' => 'Symbole décimal',
    'DEFAULT_LANGUAGE' => 'Langue par défault language',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interface Utilisateur',
    'DEFAULT_THEME' => 'Thème par défaut',
    'DEFAULT_TIME_FORMAT' => 'Format de l\'heure par défaut',
    'DISPLAY_RESPONSE_TIME' => 'Afficher les temps de réponse serveur',
    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Autoriser les utilisateurs à masquer les onglets',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configuration',
    'LBL_LOGVIEW' => 'Accéder aux Logs',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l\'authentification SMTP ?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP :',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP :',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP :',
    'LBL_MAIL_SMTPUSER' => 'Utilisateur SMTP :',
    'LBL_MAIL_SMTP_SETTINGS' => 'Configuration SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie :',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe :',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail - E-mail :',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe :',
    'LBL_GMAIL_SMTPUSER' => 'Adresse E-mail Gmail :',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe :',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur :',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP :',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur :',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Autoriser les utilisateurs à utiliser ces paramètres pour l\'envoi d\'E-mails :',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Lorsque cette option est sélectionnée, tous les utilisateurs seront en mesure d\'envoyer des E-mails en utilisant le même serveur d\'envoi d\'E-mails, ces paramètres sont aussi utilisé pour envoyer les notifications et les alertes du système. Si cette option n\'est pas sélectionnée, les utilisateurs pourront toujours utiliser le serveur d\'envoi d\'E-mails de leurs choix après avoir fourni leurs informations dans leur compte utilisateur.',
    'LBL_MAILMERGE' => 'Publipostage',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalle minimal de rafraîchissement des Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Il s\'agit de la valeur minimale possible pour le rafraîchissement automatique des Dashlets. Configurer cette valeur à "Jamais" désactive entièrement le rafraîchissement automatique des Dashlets.',
    'LBL_MODULE_FAVICON' => 'Afficher l\'îcone du module comme favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Si vous êtes dans un module ayant une îcone, cela affiche l\'îcone du module comme favicon, à la place du favicon du thème, dans la barre d\'adresse du navigateur.',
    'LBL_MODULE_NAME' => 'Paramètres de configuration',
    'LBL_MODULE_ID' => 'Configurateur',
    'LBL_MODULE_TITLE' => 'Interface Utilisateur',
    'LBL_NOTIFY_FROMADDRESS' => 'E-mail de l\'expéditeur :',
    'LBL_NOTIFY_SUBJECT' => 'Sujet E-mail :',
    'LBL_PROXY_AUTH' => 'Le proxy nécessite-t-il une authentification ?',
    'LBL_PROXY_HOST' => 'Adresse du proxy',
    'LBL_PROXY_ON_DESC' => 'Définissez les paramètres du proxy.',
    'LBL_PROXY_ON' => 'Utiliser un serveur proxy ?',
    'LBL_PROXY_PASSWORD' => 'Mot de Passe',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Réglages proxy',
    'LBL_PROXY_USERNAME' => 'Nom Utilisateur',
    'LBL_RESTORE_BUTTON_LABEL' => 'Réinitialiser',
    'LBL_SYSTEM_SETTINGS' => 'Paramètres Système',
    'LBL_SKYPEOUT_ON_DESC' => 'Autorise les utilisateurs à cliquer sur les numéros de téléphone pour appeler les contacts par SkypeOut&reg;. Le numéro doit être formaté correctement pour utiliser cette fonctionnalité. Le format est "+" "Code Pays" "numéro de téléphone" (exemple pour la France : +33427705370).',
    'LBL_SKYPEOUT_ON' => 'Activez le click-to-call pour les numéros de téléphone',
    'LBL_SKYPEOUT_TITLE' => 'Click-To-Call',
    'LBL_USE_REAL_NAMES' => 'Par défaut voir le "Nom Complet" des utilisateurs et non pas leur login',
    'LBL_USE_REAL_NAMES_DESC' => 'Par défaut voir le "Nom Complet" des utilisateurs dans les champs Assigné à',
    'LBL_DISALBE_CONVERT_LEAD' => 'Désactiver l\'action de conversion de prospects pour les prospects convertis',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Si un prospect a déjà été converti, activer cette option supprimera l\'action de conversion de prospect.',
    'LBL_ENABLE_ACTION_MENU' => 'Afficher les actions dans les menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Sélectionnez pour afficher les actions dans une liste de menu. Si dé-sélectionné, les actions seront affichées dans des boutons indépendants.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Activer l\'édition en ligne sur l\'affichage de la liste',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Sélectionnez cette option pour activer l\'édition en ligne des champs de la vue de détail. Si non sélectionnée, l\'édition en ligne sera désactivée sur la vue de détail.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Activer l\'édition en ligne sur la vue de détail',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Sélectionnez cette option pour activer l\'édition en ligne des champs de la vue de détail. Si non sélectionnée, l\'édition en ligne sera désactivée sur la vue de détail.',
    'LBL_HIDE_SUBPANELS' => 'Sous-panneaux repliés',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Nombre maximum d\'élements affichés par page dans les vues "Liste"',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Nombre maximum d\'élements affichés dans les "Sous-Panels"',
    'LOG_MEMORY_USAGE' => 'Tracer l\'utilisation de la mémoire',
    'LOG_SLOW_QUERIES' => 'Tracer les requêtes considérées comme lentes',
    'CURRENT_LOGO' => 'Logo actuel :',
    'CURRENT_LOGO_HELP' => 'Ce logo est affiché dans le coin en haut à gauche de votre application SuiteCRM.',
    'NEW_LOGO' => 'Choisissez logo :',
    'NEW_LOGO_HELP' => 'L\'image doit être au format .png ou .jpg. La hauteur maximale est de 170px et la largeur maximale est de 450px. Toutes images aux dimensions supérieures à ces valeurs sera redimensionnée aux valeurs maximales indiquées.',
    'NEW_LOGO_HELP_NO_SPACE' => 'L\'image doit être au format .png ou .jpg. La hauteur maximale est de 170px et la largeur maximale est de 450px. Toutes images aux dimensions supérieures à ces valeurs sera redimensionnée aux valeurs maximales indiquées. Le nom du fichier image ne doit pas contenir d\'espace.',
    'SLOW_QUERY_TIME_MSEC' => 'Seuil des requêtes considérées comme lentes (en msec)',
    'STACK_TRACE_ERRORS' => 'Afficher les erreurs de trace de la pile',
    'UPLOAD_MAX_SIZE' => 'Taille maximale des "uploads" (vérifier aussi dans votre fichier php.ini)',
    'VERIFY_CLIENT_IP' => 'Valider l\'adresse IP utilisateur',
    'LOCK_HOMEPAGE' => 'Brider la personnalisation de la page d\'accueil',
    'LOCK_SUBPANELS' => 'Empêcher la modification de la position des sous-panels',
    'MAX_DASHLETS' => 'Nombre maximal de dashlets affichés sur la page d\'accueil',
    'SYSTEM_NAME' => 'Nom du système',
    'SYSTEM_NAME_WIZARD' => 'Nom :',
    'SYSTEM_NAME_HELP' => 'C\'est le nom qui s\'affiche dans la barre de titre de votre navigateur.',
    'LBL_LDAP_TITLE' => 'Authentification LDAP',
    'LBL_LDAP_ENABLE' => 'Activer le support de LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serveur :',
    'LBL_LDAP_SERVER_PORT' => 'Numéro du port :',
    'LBL_LDAP_ADMIN_USER' => 'Nom d\'utilisateur :',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Utilisé pour rechercher l’utilisateur LDAP. Peut-être à spécifier complètement.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Mot de passe :',
    'LBL_LDAP_AUTHENTICATION' => 'Authentification :',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Connecter au serveur LDAP avec les informations d\'identification d\'utilisateur spécifiques. Sinon l\'accès sera anonyme.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Création automatique des utilisateurs :',
    'LBL_LDAP_USER_DN' => 'DN Utilisateur :',
    'LBL_LDAP_GROUP_DN' => 'DN Groupe :',
    'LBL_LDAP_GROUP_DN_DESC' => 'Exemple : <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filtre Utilisateur :',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Membre du groupe :',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Les utilisateurs doivent être membre d\'un groupe spécifique',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Attribut Utilisateur :',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'L\'identifiant unique de personne qui sera utilisé pour vérifier si l\'utilisateur est membmre du groupe. Exemple : <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'L\'attribut de Groupe qui sera utilisé pour filtrer en plus de l\'attribut Utilisateur. Exemple : <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Attribut de Groupe :',
    'LBL_LDAP_USER_FILTER_DESC' => 'Appliquer les options de filtrage supplémentaire lors de la connexion d\'un utilisateur exemple <em>nis_suitecrm_user=1 ou (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Attribut du Login :',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Attribut de connexion :',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Exemples pour lier des utilisateurs LDAP : [<b>AD :</b>&nbsp;userPrincipalName] [<b>openLDAP :</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;x :</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemple : ldap.example.com ou ldaps://ldap.example.com pour une connexion SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exemple : <em>389 ou 636 pour du SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Nom du groupe :',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemple <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exemple : <em>ou=people,dc=example,dc=com</eM>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Si un utilisateur authentifié n\'est pas connu il sera automatiquement crée.',
    'LBL_LDAP_ENC_KEY' => 'Clé de cryptage :',
    'DEVELOPER_MODE' => 'Mode Développeur',

    'SHOW_DOWNLOADS_TAB' => 'Afficher l\'onglet "Téléchargement"',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Pour l\'authentification SOAP utilisant LDAP et les Plugins.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'L\'extension php_mcrypt doit être activée dans votre fichier php.ini.',
    'LBL_ALL' => 'Tous',
    'LBL_MARK_POINT' => 'Marqueur',
    'LBL_NEXT_' => 'Suivant >>',
    'LBL_REFRESH_FROM_MARK' => 'Rafraichir depuis le Marqueur',
    'LBL_SEARCH' => 'Rechercher :',
    'LBL_REG_EXP' => 'Reg Exp :',
    'LBL_IGNORE_SELF' => 'Ignorer :',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marquer l\'endroit où commancer les logs',
    'LBL_DISPLAYING_LOG' => 'Afficher les logs',
    'LBL_YOUR_PROCESS_ID' => 'Votre identifiant de process',
    'LBL_YOUR_IP_ADDRESS' => 'Votre adresse IP est',
    'LBL_IT_WILL_BE_IGNORED' => 'elle sera ignorée',
    'LBL_LOG_NOT_CHANGED' => 'Les logs n\'ont pas changé',
    'LBL_ALERT_JPG_IMAGE' => 'Le format de fichier image doit être JPEG. Uploader un nouveau fichier avec une extention .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Le format de fichier image doit être JPEG ou PNG. Uploader un nouveau fichier avec l\'extention .jpg ou .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Le ration d\'aspect de l\'image doit être compris entre 1:1 et 10:1. L\'image doit être retaillée.',
    'ERR_ALERT_FILE_UPLOAD' => 'Erreur durant l\'upload de l\'image.',
    'LBL_LOGGER' => 'Fichier de logs',
    'LBL_LOGGER_FILENAME' => 'Nom du fichier de logs',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension du fichier de logs',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Taille Maximum du fichier de logs',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Format de la date stockée dans le fichier de logs',
    'LBL_LOGGER_LOG_LEVEL' => 'Niveau des Logs',
    'LBL_LEAD_CONV_OPTION' => 'Options pour la conversion des prospects',
    'LEAD_CONV_OPT_HELP' => "<b>Copier</b> - Crée et lie les copies de toutes les activités du prospect aux nouveaux enregistrements sélectionnés par l'utilisateur durant la conversion du prospect. Les copies sont créées pour chacun des enregistrement sélectionnés.<br><br><b>Déplacer</b> - Déplace toutes les activités du prospect vers le nouvel enregistrement qui est sélectionné par l'utilisateur durant la conversion..<br><br><b>Ne rien faire</b> - Ne fais rien avec les activités du prospect durant la conversion. Les activités restent attachées seulement au prospect.",
    'LBL_CONFIG_AJAX' => 'Configurer l\'interface utilisateur en AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Activer ou désactiver l\'utilisation de l\'interface utilisateur en AJAX pour certains modules',
    'LBL_LOGGER_MAX_LOGS' => 'Nombre de fichiers de logs avant rotation',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Suffixe ajouté à la fin du nom de fichier de logs (B)',
    'LBL_VCAL_PERIOD' => 'Période de mise à jour vCal :',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Nombre maximum de lignes :',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Précise le nombre de lignes qui est autorisé pour les imports de fichiers.<br>Si le nombre de lignes dans un fichier à importer dépasse ce nombre, l\'utilisateur est alerté.<br>Si aucun nombre n\'est précisé il n\'y a pas de limite pour l\'import.',
    'vCAL_HELP' => 'Nombre de mois inclus dans la détermination de la disponiblité des utilisateurs<br />Pour ne pas utiliser cette fonctionnalité entrez 0. Le minimum étant 1 mois, le maximum 12 mois.',
    'LBL_PDFMODULE_NAME' => 'Paramètres PDF',
    'SUGARPDF_BASIC_SETTINGS' => 'Propriétés du document',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Paramètres avancés',
    'SUGARPDF_LOGO_SETTINGS' => 'Images',

    'PDF_AUTHOR' => 'Auteur',
    'PDF_AUTHOR_INFO' => 'L\'auteur apparait dans les propriétés du document PDF.',

    'PDF_HEADER_LOGO' => 'Logo pour les Devis PDF',
    'PDF_HEADER_LOGO_INFO' => 'Cette image apparait dans l\'en-tête des Devis en PDF.',

    'PDF_NEW_HEADER_LOGO' => 'Sélectionner une nouvelle image pour les Devis en PDF',
    'PDF_NEW_HEADER_LOGO_INFO' => 'Le format du fichier doit être .jpg ou .png. (Seulement .jpg pour EZPDF)<BR>La taille recommandée est de 867x74 pixels.',

    'PDF_SMALL_HEADER_LOGO' => 'Logo pour les Rapports en PDF',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Cette image s’affiche dans l’en-tête par défaut des Documents PDF de rapports. <br>Cette image apparaît également dans le coin supérieur gauche de l’application SuiteCRM.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Sélectionner une nouvelle image pour les rapports en PDF',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Le format du fichier doit être .jpg ou .png. (Seulement .jpg pour EZPDF)<br>La taille recommandée est de 450x17 px.',

    'PDF_FILENAME' => 'Nom du fichier',
    'PDF_FILENAME_INFO' => 'Nom par défaut des fichiers PDF générés',

    'PDF_TITLE' => 'Titre',
    'PDF_TITLE_INFO' => 'Champ Titre dans les propriétés du document.',

    'PDF_SUBJECT' => 'Sujet',
    'PDF_SUBJECT_INFO' => 'Champ Sujet dans les propriétés du document.',

    'PDF_KEYWORDS' => 'Mot(s) Clé(s)',
    'PDF_KEYWORDS_INFO' => 'Associer des mots clés au document (généralement de la forme "mot clé 1 mot clé 2...")',

    'PDF_COMPRESSION' => 'Compression',
    'PDF_COMPRESSION_INFO' => 'Activer ou désactiver la compression des pages. <br>Lorsque la compression est activée, la taille du document final est généralement divisée par 2.',

    'PDF_JPEG_QUALITY' => 'Qualité JPEG (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Positionner la valeur par défaut de la compression JPEG (1-100)',

    'PDF_PDF_VERSION' => 'Version de PDF',
    'PDF_PDF_VERSION_INFO' => 'Positionner la version de PDF (utiliser une des valeur possibles parmis les références de versions de PDF).',

    'PDF_PROTECTION' => 'Protection de Document',
    'PDF_PROTECTION_INFO' => 'Positionner la protection des documents générés<br>- copie: autorise la copie du texte et des images dans le presse papier<br>- impression : autorise l\'impression<br>- modification: autorise la modification (excepter les annotations et les formulaires)<br>- annotations/formulaires : autorise l\'ajout d&~39;annotation ou de formulaire<br>Note : la protection contre la modification est disponible uniquement pour les personnes ayant la version complète da#39;Acrobat.',

    'PDF_USER_PASSWORD' => 'Mot de passe Utilisateur',
    'PDF_USER_PASSWORD_INFO' => 'Si vous positionnez aucun mot de passe, le document pourra être ouvert par n\'importe quel utilisateur. <br>Si vous positionnez un mot de passe, le lecteur PDF demandera la saisi de celui-ci avant d\'afficher le document.. <br>Le mot de passe Maître, est différent du mot de passe standard car il donne les pleins droits sur le document.',

    'PDF_OWNER_PASSWORD' => 'Mot de passe Propriétaire',
    'PDF_OWNER_PASSWORD_INFO' => 'Si vous positionnez aucun mot de passe, le document pourra être ouvert par n\'importe quel utilisateur. <br>Si vous positionnez un mot de passe, le lecteur PDF demandera la saisi de celui-ci avant d\'afficher le document.. <br>Le mot de passe Maître, est différent du mot de passe standard car il donne les pleins droits sur le document.',

    'PDF_ACL_ACCESS' => 'Contrôle d\'accès',
    'PDF_ACL_ACCESS_INFO' => 'Contrôle d\'accès par défaut pour la génération de PDF.',

    'K_CELL_HEIGHT_RATIO' => 'Ratio pour la hauteur des cellules',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Si la hauteur d\'une cellule est plus petite que (Hauteur Police x Ration Hauteur Cellule), alors (Hauteur Police x Ratio Hauteur Cellule) est utilisé pour la hauteur de la cellule.<br>(Hauteur Police x Ration Hauteur Cellule) est aussi utilisé comme hautre de la cellule quand aucune hauteur de cellule n\'est définit.',

    'K_SMALL_RATIO' => 'Facteur pour les polices de petites tailles',
    'K_SMALL_RATIO_INFO' => 'Facteur de réduction pour les polices de petites tailles.',

    'PDF_IMAGE_SCALE_RATIO' => 'Ration d\'échelle pour les images',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ration utilisé pour les images',

    'PDF_UNIT' => 'Unité de mesure',
    'PDF_UNIT_INFO' => 'Unité de mesure du document',
    'PDF_GD_WARNING' => 'Vous n\'avez pas la librairie PHP GD installée. Sans la librairie GD, seuls les logos au format JPEG pourront être affichés dans les documents PDF.',
    'ERR_EZPDF_DISABLE' => 'Attention : La classe EZPDF est désactivée dans la table de configuration mais elle est définie comme la classe par défaut pour générer des PDFs. Veuillez "Sauvegarder" ce formulaire pour positionner TCPDF comme la classe de génération des PDFs et ainsi retourner à un état stable.',
    'LBL_IMG_RESIZED' => "(redimensionné à l'affichage)",


    'LBL_FONTMANAGER_BUTTON' => 'Gestionnaire de police pour les PDFs',
    'LBL_FONTMANAGER_TITLE' => 'Gestionnaire de police pour les PDFs',
    'LBL_FONT_BOLD' => 'Gras',
    'LBL_FONT_ITALIC' => 'Italique',
    'LBL_FONT_BOLDITALIC' => 'Gras/Italisque',
    'LBL_FONT_REGULAR' => 'Normal',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Core',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Nom',
    'LBL_FONT_LIST_FILENAME' => 'Nom du fichier',
    'LBL_FONT_LIST_TYPE' => 'Type',
    'LBL_FONT_LIST_STYLE' => 'Style',
    'LBL_FONT_LIST_STYLE_INFO' => 'Style de la police',
    'LBL_FONT_LIST_ENC' => 'Encodage',
    'LBL_FONT_LIST_EMBEDDED' => 'Inclure la police',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Cocher cette case pour inclure la police dans le fichier PDF',
    'LBL_FONT_LIST_CIDINFO' => 'Informations CID',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'Pour des exemples et davantage d\'aide : www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Taille de la police (KB)',
    'LBL_ADD_FONT' => 'Ajouter une Police',
    'LBL_BACK' => 'Revenir en arrière',
    'LBL_REMOVE' => 'suppr',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Etes-vous sûr(e) de vouloir supprimer cette Police ?',

    'LBL_ADDFONT_TITLE' => 'Ajouter une Police pour les PDFs',
    'LBL_PDF_ENCODING_TABLE' => 'Table d\'encodage',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Nom de la table d\'encodage.<br>Cette option est ignoré pour les polices TrueType Unicode, OpenType Unicode et symbolic.<br>L\'encodage définit l\'association entre un code (de 0 à 255) et le caractère contenu dans la police.<br>Les 128 premiers caractèressont fixe et correspdonde aux caractères ASCII.',
    'LBL_PDF_FONT_FILE' => 'Fichier pour la Police',
    'LBL_PDF_FONT_FILE_INFO' => 'fichier .ttf ou .otf ou .pfb',
    'LBL_PDF_METRIC_FILE' => 'Fichier pour l\'unité de mesure',
    'LBL_PDF_METRIC_FILE_INFO' => 'fichier .afm ou .ufm',
    'LBL_ADD_FONT_BUTTON' => 'Ajouter',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Ce fichier n\'a pas une extension autorisées.',

    'ERR_MISSING_CIDINFO' => 'Le champ Information CID Information ne peut être vide.',
    'LBL_ADDFONTRESULT_TITLE' => 'Résultat du processus d\'ajout de Police',
    'LBL_STATUS_FONT_SUCCESS' => 'SUCCÈS : La police a été ajoutée à SuiteCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERREUR : La police n\'a pas pu être ajoutée. Vous trouverez plus d\'informations dans les logs ci-dessous.',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Une erreur est survenue durant le téléchargement du fichier de la Police ou de son unité de mesure.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Vos scénarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Aucun scénario n’a été configuré',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choisir quels scénarios sont adaptés à votre installation.  Ces options peuvent être modifiées après installation.',

    'LBL_WIZARD_TITLE' => 'Assistant Administration',
    'LBL_WIZARD_WELCOME_TAB' => 'Bienvenue',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bienvenue dans SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Cliquez sur <b>suivant</b> pour logoter, localiser et configurer SuiteCRM. Si vous désirez configurer SuiteCRM plus tard, cliquez sur <b>Ignorer</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Suivant >',
    'LBL_WIZARD_BACK_BUTTON' => '< Précédent',
    'LBL_WIZARD_SKIP_BUTTON' => 'Passer',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuer',
    'LBL_WIZARD_FINISH_TITLE' => 'La configuration de base de votre application est terminée',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Identité visuelle',
    'LBL_WIZARD_SYSTEM_DESC' => 'Fournissez le nom et le logo de votre organisation afin de personnaliser votre SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Précisez comment vous souhaitez afficher vos données dans SuiteCRM, basé sur votre situation géographique. Les paramètres que vous fournissez ici seront les paramètres par défaut. Les utilisateurs pourront définir leurs propres préférences dans Mon compte.',
    'LBL_WIZARD_SMTP_DESC' => 'Fournissez le compte de messagerie qui sera utilisé pour envoyer des E-mails, tels que les notifications d\'assignations et les mots de passe des nouveaux utilisateurs. Les utilisateurs recevront les E-mails de SuiteCRM envoyés à partir du compte E-mail spécifié.',
    'LBL_LOADING' => 'Chargement...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Bienvenue' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Voir les E-mails des Contacts liés dans le sous panel historique des modules',

);
