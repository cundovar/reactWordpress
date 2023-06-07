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
define( 'DB_NAME', 'wp-testback' );

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
define( 'AUTH_KEY',         '/)5&9s26A$^82ud;^DJE;0 j<68 @VFD&qiF6`J|Z:MDk&&n>qz KOwRH8z}%jp4' );
define( 'SECURE_AUTH_KEY',  'M8B^M|9<P#ka5[X2}+M~L(FR:02;^^KHA[*kv_b)Ynrs}h?*huLnxR)?X;m$#0Tk' );
define( 'LOGGED_IN_KEY',    'zG*G+zjf,EWp68`t9hc96NCX;huFsH)e}o45A~!?bmytQ}47f^?._G[.=WKYH#Vs' );
define( 'NONCE_KEY',        'y!PTo)>soa4n.b,e}feS;bMdrTv<FlgH3m|53LO+V4T%0VBR2 Y`<k^xG4x=)|!0' );
define( 'AUTH_SALT',        'v/ORebGsw:1@L+NT`BagyB>1bu7Z]m*_L,#3(M~i@Ai#{/OEk2vJ1]P7|Fv*v6Dz' );
define( 'SECURE_AUTH_SALT', 'r6a%[+GzvnPC`rawUeE,$J?3HAg-IVnpSWN+`)hQd=R&$$,bPP9)6SqSvoyPZ8{!' );
define( 'LOGGED_IN_SALT',   '?p[`|b{=|*g_p[`W*N&F/$[iXg^rVy|`Dyl`1x18QB$2/=vQVZO5W$pJ]-hB018U' );
define( 'NONCE_SALT',       'tT&tdB=S?_qm*c(+r}N}d9EBEN~pwfYb((~UodFdIwFL,;t6+/89sbj/,!QrGMS$' );
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
