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
define('DB_NAME', 'atf');

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
define('AUTH_KEY',         '8<s%p^Z7o4ZglM>90t2FKA[BLpyJsD@ave9N^H+a!^C7`#`ce~s_B-XJR.Kc?3ic');
define('SECURE_AUTH_KEY',  'O&{N#6f7X1;OKdN[yjl6.A1j{$aI&tbx)b7v*ky<G7<vC|fWMRF}jQp&OTC5 j~n');
define('LOGGED_IN_KEY',    'zzFbV+7[Ix_nT*YX=$vDJ&`R?wzuNJKGs}`wdxELNaIi.XFw9w*iK3^ds|/~:KbG');
define('NONCE_KEY',        ']@qtkN< `Vd:>&|y5bp}E~hR@H{%hM/$c{sF8TpwJU[vk:<`^/dc}W8r9eOA81p,');
define('AUTH_SALT',        '#8:p0k+Z_d?(3X/t527]%`o~}b+ @=5Le0+#0F!e/0f.HQ4*K,R 0dNZ3y[).Pqz');
define('SECURE_AUTH_SALT', '{k6[D.O5mat~pb-a*[}wLAIHL| ,8Oe8HT|+IQOrbZJV5tojR~8Zn c8K-*N|XIP');
define('LOGGED_IN_SALT',   ')yMq-4+xj;&f1-!~e6_76WnRGv3J84i=TE(MlF3JDx9EjB=yGg[#)-xmW9kb} /s');
define('NONCE_SALT',       'gE2Bz% U}<FP@(0dk-Yed)QNMS)KHrgxE&*9BDNAtdzqKn)`<CK8kEH%`qyYL$D[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

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