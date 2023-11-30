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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'nathalie_mota' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0f%adFVao#OuO;-H$`^zr#Y{w7?Uc#@$(Y%i%SUN)IN8hFz+dwt,MB_{+-{7&@cT' );
define( 'SECURE_AUTH_KEY',  '%hx{eD_jLpGdKi|$h3v)c@kon~ePEL!slXD@-EXP jF:h@MbLRx!y.2vUQ4s0vqk' );
define( 'LOGGED_IN_KEY',    'Xd%UjedZ^kC/N[MzqNb]Wz%]ik#5OFF`TV~TIjb=:x5t$`Yx-5_RV*auWP$ES}Jy' );
define( 'NONCE_KEY',        '>XKhorF:eFjl|iBwjt:kT9I;L+?KA^h,l{w%,&hEl`{+q7g[Ue[&Svdw$B%NZ2o4' );
define( 'AUTH_SALT',        '7(GrRDTrVM}P<b$D$SQ)T.)~I)K)5sDvzm{^<iS/m}<t~q[!0u>4=Z2?.Z_p_<E%' );
define( 'SECURE_AUTH_SALT', 'JR%vJ-W4JVPXSzF4,OGtnw-uTfk;U8>*f(sv3hAE^VWnh)G|;32fT9NC2q@!SQDk' );
define( 'LOGGED_IN_SALT',   'UB/#VOu$W4^:17/u`mZ8]cwK~tgf?Gl_g?`}hx]PeW/2<od7zhb7Z2: )B4J?:UH' );
define( 'NONCE_SALT',       'qH)r?0tK%YvOW5M@Qh.C)`?~T$xS}9AoiaDxh&t1{l<a3OXa_RxYU8vC>s&IT:Jx' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'nm_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
