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
define( 'DB_NAME', 'mysql' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '{]7e_)_q1QbX1b!G$y=wW^pQVgkfiD|iC?+<XsZPB>RBDVY(xvUtnh@= uD]*NeG' );
define( 'SECURE_AUTH_KEY',  '4%a?+Z>l?T~l4oJ}MLzj9Q=;I/;5#h|C~VVj_? KreN-Gh<jhYOHxZ<:cTefyUp:' );
define( 'LOGGED_IN_KEY',    'fI>vz!?m+bMQ03M~AC6!OK.g3!C}l]0raD35Ry!v`:>v++jz=LLDr~XB+KNo,$2C' );
define( 'NONCE_KEY',        '@m]:Js&Lv=1=!PWiAmVI+Ig,1IndaVdNBd|((*H$-d-S!QN+yruCA)]<m?o.B>ys' );
define( 'AUTH_SALT',        'qsJK AX2}RGe(QTiDlxil<t>+]P01F_ j7d3,h]zIYK33=8bT&g;fm&Y?<D]8sS9' );
define( 'SECURE_AUTH_SALT', 'V@eJg6)g-%Uf(6ETUQ[&Q*#A@27*x`J:gOXsheB2[De,yFF[`m5kPtk,B(>LIvy_' );
define( 'LOGGED_IN_SALT',   '*hWi|O~lI2JSYFqGP><C)|U6=X1Wmb#Kr>}avQ8p+XL*T*:R>cOm]3oxrtu]f~(T' );
define( 'NONCE_SALT',       'x_H=e9Pemx@azF=@Pl|{fIh*ke>7iqj{GTPP nV{FBI_PlB!{[V$sXVYD@pg${Es' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = '_wp';

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
