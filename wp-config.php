<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'fraudeurs');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eJ~rIQ=7=bmGo@PG5hKc5peFnyRgm 1L*S&PzX)s|.)7#D`d(]j9uZ~/<@6#CP[+');
define('SECURE_AUTH_KEY',  ';?5}gX08B^;H*ej;P(TMoWT>s@s,n$}jDz&g3t=dx;wC!;;{P[B%>9}@LaEfIdl,');
define('LOGGED_IN_KEY',    '=$Sf6>KF|>?o1<;{CmJ)dG;&%l{2_3[c[M~TN&o8*TH:T!9uRgMQBTZg]Efi&07z');
define('NONCE_KEY',        'tLl]*}z~)X7^?4Dph#+=H^V]7{9u56y?m4!ekG<|P%<TZxPRkDU,G<J+pX]XGk<0');
define('AUTH_SALT',        'P0_PZl+5h(/|KG;t3-3ANBds3 .vIVx [*Tsd7Wh@Mg}%15Rrr fd[i4X>|NJ?gs');
define('SECURE_AUTH_SALT', '>OxI4}bLDE3)e9mF;c/zqJj6~nd3LL.ToY^MsRqS`W2AI(d^ ct3{!DH,uo28Qnm');
define('LOGGED_IN_SALT',   'OM8q`O#mL Y1w6&J.k:WwZ)*BUwDP%cI`6E(IBS`ac[f9M^&>t`)?`RW}uX*vUJ|');
define('NONCE_SALT',       'B+?;+r,$yMf6q@B=`4Z|^D2Q$kmDNXiL>4W++p5LJ?$6v@Akf0YARFKR6aFwdZu{');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'f_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');