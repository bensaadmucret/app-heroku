<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
if(isset($_ENV[`JAWSDB_MARIA_URL`])) { 
  $db = parse_url($_ENV[`CLEARDB_DATABASE_URL`]); 
  définir('DB_NAME', trim($db[`path`],`/`)); 
  définir('DB_USER', $db[`user`]); 
  définir('DB_PASSWORD', $db[`pass`]); 
  définir('DB_HOST', $db[`hôte`]); 
  définir('DB_CHARSET', 'utf8'); 
  définir('DB_COLLATE', ''); 
} else { 
  die("Pas d'informations d'identification de base de données !"); 
}

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F!H1 !-N2k:q]X;fy$h9#?UsX7{+k)^$^$6I(IP3OT[Vgq(`#sOd0ue:TF.?{+E6');
  define('SECURE_AUTH_KEY',  'OYP@?oHS,;1{S$V}e|$a8v_O>4|]2vMv*XD^q6IVl=5@hPyc>S8(/-xt^Ura^zeJ');
  define('LOGGED_IN_KEY',    'ZkpBnnEy*)L$x%XY.jqZ*jF_Qi_IfL>U!x+Hqr?nA5-2#EX-_iPuTi+y,7i<Fq|S');
  define('NONCE_KEY',        'YBFkVvDG>D;<nQ056kv}TT%<y@W//#)RVv3y<<UXj]l:Sf~-jp{g7=q2O;hqq>eH');
  define('AUTH_SALT',        ' ma6cn[C;Y5t2doFlAmhe1d~Rw7=b;u:a9gzf+5A5!5_y]~hgE(mT>(Hs8BCcC9#');
  define('SECURE_AUTH_SALT', 'E]xue.+V5T?t+o2FCpZG~u4d;@|K)c5y6z65BwA],a(5|@-`_`ryi,%!at|7lEMS');
  define('LOGGED_IN_SALT',   'FNjSvdNflX1!+ua[H6Adg0mGZ$5[30p^8a40lBmMTKP<~GRgLrsMoksvc+CZg2R)');
  define('NONCE_SALT',       ';0*+,0o%?B_a}}uJq;wg.![X=t/.]9Q`]F|K s&/+e1kbXCej>TQABy=;U|c%lHc');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
