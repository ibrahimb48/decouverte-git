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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wordpress' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '.cqt_Nyt69tkA@sFKX<y2y<=]m*J)5#8G@EkNO<nJqAS:0,>5Lqz^bk{$)VF:8a8' );
define( 'SECURE_AUTH_KEY',  '.:JSq3~IB*`Ob*.$$<.qxS.bH1Tkivx//O@{Ubipfpz?T_+iRK=$bnD_}Ozid/X`' );
define( 'LOGGED_IN_KEY',    'x/X(=1+dDk [J%*v`a|zgpow+or(Ogj8!V*.Krnim],}-bx.MZ14]:GxEYAtX;.f' );
define( 'NONCE_KEY',        '1_Brf 1HwF4nVs6slL5RRh5pbii*v~0ixRa4#B-Hw<@xfy_.B4h[q[IVNgb9nhoY' );
define( 'AUTH_SALT',        ',UM=?-Gq9WS126cBCQ_h?voG[ /@^3PE|PIMx.xCY@=)FMm1vT?4GFNJ<RLHP05x' );
define( 'SECURE_AUTH_SALT', 'Xn6CtnP]1;Lp:-wHNgWrW3{37Nwc4w0_)W`UINdXeZjc%`*3fAJT+X3/4.?4>.DU' );
define( 'LOGGED_IN_SALT',   'iO|EPe@6]>EiMWyW{65y~>TBpx-m1D7d[K>]JC{Kgf>Q2Ia+jEj:9lkiL.WJ{non' );
define( 'NONCE_SALT',       '6aY[t<[71#tD7+*0#o9jIMiNqAvA`i+o?]o8M B5{6e/|2``BJu>NJJG :1A`J]v' );
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
