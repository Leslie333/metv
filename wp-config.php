<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wordpress_db');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'root');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         ';B@V!gH^/*i?c>4 h-W?}^-{8$!Qqdr|(,7W1$v|n7M&Y2M#jl}JBTx z7Mzn.GF');
define('SECURE_AUTH_KEY',  '7z[xC}@5RXK}IroW1JeNDd8+i[AK-gw+Lqg,Qo@fs}>-eMb7yY9Gc*NYm.Y3IUIM');
define('LOGGED_IN_KEY',    'IiO 8-|N!)aM#EX=1x]QFUCk8]`8)^7Kq:w`R/+h(8^V_|fA8=pH$`)v H;QYdUq');
define('NONCE_KEY',        ' shk_C^`]dT_xK*+RR:a|-w%0-<U0Sc9V]b:JE9va`{IL[jrp:`V[{)uu-Y!*Y=9');
define('AUTH_SALT',        'Tfb~}RO3=QP<)~ZdCTZO|7by!f[RE|W!iXl6Kv&QTgk-I*$2`Zjz*9+J1v,a?|Hm');
define('SECURE_AUTH_SALT', ')wcG8K$);]>920kAu,+|^p-2hjg=0-#|1nN7d^5jb@aOU45p38>w2hB^-2`X)c`>');
define('LOGGED_IN_SALT',   '+|5oAtc:VecB3iG-PK-Xqlwo7ZUq66f|w/kbH7UD85>w <Um[cywR$[:JF6gdfVk');
define('NONCE_SALT',       ']&=:]lKf[mB`[Cp5uONQoGc`K3& heG7M?+TV Xf)pQ:,f?k${ =YZmr0+/7tM<Z');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');