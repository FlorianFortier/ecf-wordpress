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
define( 'DB_NAME', 'mes_recettes' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'f%LHLVK_KivH39B xGa>boWi&$$tMTNJ$n_$}6?%6y36>b<k1n-q[jI;eWRxDPiC' );
define( 'SECURE_AUTH_KEY',  '#xJ^kJQ:D_D(g=>2uso{!VMtTfLg3J@Bk/N4e}9zZ613%y%%(t9;>eh8Lg3)XNk6' );
define( 'LOGGED_IN_KEY',    '&yYPK*S+zYMdAO)Ie[Ot(i(.IkL4yyB?A%=#AK{wid;zU7#@Q2Dp/+3f?;5St;?h' );
define( 'NONCE_KEY',        'lJioJR;] 8F6[{Jt1&)xY|}!hK .;%FH)t:v&-,QJ0~GDwyMt}^v]-;vq8$Z*%)/' );
define( 'AUTH_SALT',        '-lwTzQ?/hsO/2TwzBmQm^}>W_Y(mmz80UyH?H:^KTewB,Y1#w_kC+~aQTF2w__,R' );
define( 'SECURE_AUTH_SALT', 'i HqEt:4^Pm;.A5V:K|CV]Nq95|]# m]W6G [|F,MF>>jP%6^^BKCM!7,j>v-KIC' );
define( 'LOGGED_IN_SALT',   '`>sTP}a_:kM5562UZ5``[2v{xmvB%6P$/yrT&4s>O*$mSCc-Iws-4w0Etm~4T~!b' );
define( 'NONCE_SALT',       'nYM)j1#3g}]vtccj=H<$Q7%/WG%>2|7Ye>fK25~dlD~B)^#gIBm;u3|WkL&iUs?6' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_ecf_';

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
