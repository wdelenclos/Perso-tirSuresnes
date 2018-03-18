<?php
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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/wdelenclos/Projets/Esperance de Suresnes/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'tirsuresnes');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`oH<1Ok)e+vE`KfQ`GUx3mgr.>yk_NfRe%wWaGYg.ov^R+g Z+gl=SeLL.DobjOW');
define('SECURE_AUTH_KEY',  '.+;VT[If_qQ/6J}SR[wSn=KOUzCAvurP#vv}!P*TMR0bI2}_p,Tx=~,d>LXHZ4!>');
define('LOGGED_IN_KEY',    '{CI+e2bneqWL_*!)*^py[[zfB jZJ+n^r|nfonc{G2=.QJ1C.Nl:{zodIQ|PIHqL');
define('NONCE_KEY',        '78c<yLq5DmqO%5IX`?t/RP$3GbML^Qy0W8uk> 8{1yj!qBuF~{.Cpks6/+nBnH0>');
define('AUTH_SALT',        'I`!Y!q9nP6bctfw]Or&C@,5rjji2)@=`*nfn:@JVi}k!h?h1MMCj79i5=wvXqOcq');
define('SECURE_AUTH_SALT', 'b2$}t|ScD00(sl:$Iu?Dg/F%(d;viI @oK-4H:Bz=5W)Fu_we;8s>@!F5t%`|SQ8');
define('LOGGED_IN_SALT',   '5<c+lbrDh&/bD@.~6L4Of!)#@H8C i-ggL<Q0c0}=5;AGuLD3z2a)hzugybH*n|h');
define('NONCE_SALT',       'vZ$d^Og(x>=]0ELgRZ*q=b>Rv%V-V;Ma@kX1,WJM3mT.M&IVXVG~J:E{W;e#o7TW');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');