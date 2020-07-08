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
define( 'DB_NAME', 'DbLeComptoirDuGamer' );

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
define( 'AUTH_KEY',         'V*h#DOJnz;7XNq{yIlbFI|qq,tAvBT<>oF&5W|1E7r]O321H:{z$RBCwEj{yapan' );
define( 'SECURE_AUTH_KEY',  '34QcT?`?1lpkDYJ=m7TFUYMNRcEdXYL%XBI]^=!h>Jh.PB<m3hp--d?i?{:cH6!s' );
define( 'LOGGED_IN_KEY',    '>FCWMo}|KyFfB>.oR.5]kAYCZ,_N?Yg)%mCBj}Y|@`o=$Xw8Z8UH|8E6jSs/FKZ}' );
define( 'NONCE_KEY',        ')$^W@67v~dZJd}yS?j0` i6/k5isEo-J}8qA]EB0`;1^w7)<.tg+/S#:i>giDrp0' );
define( 'AUTH_SALT',        'Jae8TQ91W;?pDQf$HUP^[5?Z-IhpS%`Nxz;#wT89.z0M>u+{~S@j12*E$/olAbfq' );
define( 'SECURE_AUTH_SALT', 'YAy8>R|ClURzFEG6Va$=:2/3BiY<5%0cuB<Cf)MgF|}ELY J9eYd`.-uN<v!`qae' );
define( 'LOGGED_IN_SALT',   'w6JsZNr{Bjf(-o6z~Nwy;y.*,Qg2C-/=S8B*~<d(d*fwWZ&DI-R}S/yqdo9%SAf)' );
define( 'NONCE_SALT',       'k{(2KLh2RKj]u)XVO+@2g8zIvb{%?*ZK*JGayFL9iD~ko4>RHq+F#:mm`PNKO:7<' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
