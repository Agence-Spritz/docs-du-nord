<?php

// BEGIN iThemes Security - Ne pas modifier ou supprimer cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactiver l’éditeur de fichier - Sécurité > Réglages > Modifications de WordPress > Éditeur de fichier
// END iThemes Security - Ne pas modifier ou supprimer cette ligne

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'docsdunodb17');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'docsdunodb17');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'f9kmhXAYLx');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'docsdunodb17.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rWhI*HZj}z2>bV;.(3@+A;w3v@Xbg26@Cj9?,Rz3u-&Wo_@`-A~&_zic/xq@5P I');
define('SECURE_AUTH_KEY',  '+Dn0`P-VtCqg=},1k4O!]%uM4e!=`JiO6bCOu|!80c=`13T6d2lZ=lM0;w-n-C=Q');
define('LOGGED_IN_KEY',    'm-9j?8xDF>~ekMIpO!f&2,hq$=Dgs+u(I:u+4nd@Jdr<|w.uR0k4Z3AyIW!*LNa#');
define('NONCE_KEY',        '@>[/~&gJ.[jTu-;p5yD&{6U|g/j_he*y50!VLenq;U|+Z(sANjo;#NhGxm#;W2xy');
define('AUTH_SALT',        'Mb]xCx.&^2LRriyD.&;+#`,-#4BlB+++OU$T^@-as-1A&[?X3/C1t2kJpSd n=T4');
define('SECURE_AUTH_SALT', 'wK:p^e!{}uh)rA)vm|[S*&iMz tifZXLu~`|-w56a[Ah-On{-;5Z-7^L->x[M=k6');
define('LOGGED_IN_SALT',   '>.B]`N3w{N--Zft&D4cPQ*fC5t4uM2P^QZAf>P`@VPz(ogv:40+kr<}JA/cXK/-l');
define('NONCE_SALT',       'q^!q>)_osy},H?!T>}}Z8Fs=y+ AQq1yeA1Aal1d$be:nmUdkpac ox7<sUrMS/%');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_ddn_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define(‘WP_LESS_COMPILATION’, ‘deep’);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');