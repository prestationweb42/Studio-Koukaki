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
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*Tifo.,8>IaU</f9Qgx$qG]NgyU[]vKlTbB[JGS*>,@Xr}ljIcA|GfpoH&AT5q2a' );
define( 'SECURE_AUTH_KEY',  '9:yrC*Z)d{4U%*IOTi*?1fq^>ZB!gUSEk[ae0@%VmR!%fGOaaM2%UWVWNC$U}Z/V' );
define( 'LOGGED_IN_KEY',    'Bi4lJ/T%d{<2Wf!_/#[$(vm_xjU:j[Bc|:n*kZX[$IX_{bVXH@^7TDP$.NhCI08I' );
define( 'NONCE_KEY',        '2I9DG_9D$7yS*}Ui&38Ofby}1*Yyrov [3Y_--F(`PwO-4aIQz~BKJ7C~61EnmDz' );
define( 'AUTH_SALT',        'bPkAy~5!Mp+]Vah^Ooz{I0&{sus-*%cBhRS2a$H@Cj&#6v,H0fi%?@;!cJ,G~}|c' );
define( 'SECURE_AUTH_SALT', 'PFftAk%,h(Yued:w;C-LW&;(SmJ);Tu^Qf7lnP Qf3vA!bI=3b<U;#fohig4Esy{' );
define( 'LOGGED_IN_SALT',   'e-$;}T/fUxq%z1la^.BS>n$sCrg;BMz(AsUSzXKkJR@O[:~=A8K<_ro^P)oB(lpL' );
define( 'NONCE_SALT',       '=P+^f9U2)|Smq r4#^zU1.K6Z >U8N2-VFFuJ16$f<foV0ly2kGt{MQBSf#~K98R' );
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
