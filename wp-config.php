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
define( 'DB_NAME', 'portfolio_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.5vw20A+3&D{SE/C@e77Q>susXr-4%z7(km_$MnlAZD_q0[{ZD^=|4&#T+&T>Kw]' );
define( 'SECURE_AUTH_KEY',  'v7|y[zU1H=5JH*v7*njm8;J{m-tACs^LTpVMU,ty@K5,aB;F[CD9873lDPk5,I5*' );
define( 'LOGGED_IN_KEY',    '2/q@$(c_IYwIRY/bhW=C)2>+vM).%/rj2lN>H?}@rm4Og<tNyN~H<@f}9h2U23Q?' );
define( 'NONCE_KEY',        'C3}B*4~V1J@|+*Ev>0o,ZWUZ`$?284{v>%t<toWU|@jY3gHU=, _bOwC1{CB)fhl' );
define( 'AUTH_SALT',        'UG!F-oBp]#+{0G@/![]7m|7`(Jzp:w/ MkF:`=J$@<_c+P$,$dX{IVl/.EVd[CU&' );
define( 'SECURE_AUTH_SALT', 'rBK5cJV1&A{9dE7hJk2r;[<:JGIqJKqcVLaW03%J:PAQ,L8{A`Ot]!C7.w71,guc' );
define( 'LOGGED_IN_SALT',   'ham-S7d8nh=NCC0d,=kIEMP7bH./gh!jn6%a1M%k*MRaDsOY#S8YUvl(u/KsMa7U' );
define( 'NONCE_SALT',       'Knp4g0c_9CzG+NT0Rke--;)F>l[)b87(@Ze+tcJTu-~aq](6:iD4WJwl?t~Oqk1h' );
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
