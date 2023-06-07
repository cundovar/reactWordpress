<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-testBack' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'bY]ic-0hz?44U1u${Y5z&ag(5liPy1HjT guo?T=(0,F{/p/-,#;$qdLqui xn;_' );
define( 'SECURE_AUTH_KEY',  'oy2;T:W4(58c},@XwMpuLJY@EwZcH;*y -5rdcpvWcK!@5}@3<9bKH y{<|vvLcy' );
define( 'LOGGED_IN_KEY',    '~r}eL/L:Eg5XZB=kz63A^4-x_R;vWGn02{)T.4I(hn1sf4dFH5%d@V#FL1uc!JlG' );
define( 'NONCE_KEY',        '>z!=/J^3hnSHbXq7 Ovg:ovUIj!RlK22!bm6};xL/$<2gfAG<Hp?$,aWuNLA BVR' );
define( 'AUTH_SALT',        '1G8R@2ud*pFeSYZA3W!Bo5Aqi4tuwgiLqI/V,Nyqaz[eb<r)}s9giu@oUR)B7I`b' );
define( 'SECURE_AUTH_SALT', 'Cq(xk%:P&>Jz!(nuN-Ch/wN.RJa0S>D]x^wieUJhlnmZL]^%J7vB)r,u*YKR:v[g' );
define( 'LOGGED_IN_SALT',   'A/U1sHK$C)^a)I@w)i-/8(]^)s:e!]loPVuZ`%H;bJ!=|d/S&fFV],ZD%zeW4[ 8' );
define( 'NONCE_SALT',       '50u}HTdA?!!kU%PMW#|@`)IfNeucpmm#Cx@)4M9Vgu`%%}-C.WmX,nyL;5>LvX![' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_test';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
