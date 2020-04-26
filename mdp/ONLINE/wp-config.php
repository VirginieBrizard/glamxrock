<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'brvi5966_glamxrock' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'brvi5966_vbvb67' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Carapuce1103' );

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
define( 'AUTH_KEY',         'woIw?$-N*[]4O8yC3+%*gN[73u;0U{*!_)^>j3(Wckll2)zjV{pi`Im@_#ykmH<w' );
define( 'SECURE_AUTH_KEY',  'I.P4}.{t7_[j}(0oTWu-_nQ&2vh>+gvRer.!dFqC>PF01N:71TG7u qGcg4N;,M@' );
define( 'LOGGED_IN_KEY',    '?9dcQsthNp@5e3m5#?ng#B3q_l9F[=#)D@T,)q.vsbuUVN=xdsD{Fluhq:K.l+qn' );
define( 'NONCE_KEY',        '!1Pxiw2 zvRd_v^V]BYxk$1lgjhzhy{+8xI)wnrh<SbD2H_ro2,&or@YF5o [rH0' );
define( 'AUTH_SALT',        '9?|z^?aTT)fRG)S2Wt]U<?,F=-9A|f}:odI**LIyGmIP@kUg+7+x6%8n!BbSFKpk' );
define( 'SECURE_AUTH_SALT', 'Sm*,D^OD|g2HmvdekQmfi&&ZLLAz!|uh/p*zC5Ow2y:!=T4g%(x-}}N+{1[ WqqV' );
define( 'LOGGED_IN_SALT',   'HbIz XQvMzB9>J@VC_wh%Kqd4Ws_v!r{yBp>#Cp{r<9R*ivE!#Tr7Z6@w[@{lh{K' );
define( 'NONCE_SALT',       ' 0,BHh<?!*R@Z|w~k4BoiAKs+pR[cF2V(`i#^g_f;[W@G^^bQXYbxOJTZGCn=7@5' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
