<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress-prova' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`tls/v}Lq|7zPr_n8Ar9PrTZ5TK]-z3nj[HU</0f9F!~:eE vj@uYj(q.;klr0-z' );
define( 'SECURE_AUTH_KEY',  'm;do7&GF=bjgfm@.>TP0[z:D55Xm@!u>`TY;aCCWKRR*:S#P&^3u0]],~D pbEWn' );
define( 'LOGGED_IN_KEY',    'Uq}o!nK[z/Oz-nf(;PYwut^{@[)O&!H}JgcKo:&/]]+b].&ZTO.aFMs&h#?QM8NU' );
define( 'NONCE_KEY',        'Z+jMc-u#R3b#$[l9Z,f=Yf?aD5+ 2l..$CWp?d9Ka-}CR4fsVn]j/hJAw{_M6a55' );
define( 'AUTH_SALT',        '(]EkgThn4b)^oC^(uvPl oS,=rP))@o{[E;OFK`$ceB-(MMQ.yTtb1WH0H1P{&a3' );
define( 'SECURE_AUTH_SALT', 'MD=+c>;K=<SYBZZ,}(*@h+?tH|&)]<^hr6,J&xBuxLd#i1JG,dFM+eXd7(8aa/:@' );
define( 'LOGGED_IN_SALT',   '~Oo:T#eGk^%_|oAnyW-)*O>ueb=q`>vy~r%f;/#h5ISo=e))[>]KiK9Vu}K$!g%E' );
define( 'NONCE_SALT',       'K<MQX48GH~w**LkF19r@l5{1G#UZb4`@[LGVw;Wb{TUjIvan:.2sIB 3S_8XQ:9o' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wpp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
