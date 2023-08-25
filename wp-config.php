<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'Sajt2' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VW9+iRHQ8<(>kRgyO[ORgb^t_,U$Ka56ygv{,Rc1#<-)HKU>c@Y|F2FZ{Hm+8Ct[' );
define( 'SECURE_AUTH_KEY',  'V[miFTR+{@I~rluM}N/tz$~fMt193@oR>@Na PXLMP[<iO_$hwc>m`Q Q[EoWjQ&' );
define( 'LOGGED_IN_KEY',    '}[QB`1XDu{R~FWgG|`)7AUylB<F8s)4dhWr:aebhodC#Q,M1iJfNY*c5UtbB:9p/' );
define( 'NONCE_KEY',        ':^Q^;22cMoDLAHQva9F{S)wsjvlj.AAAktLX)yM6-o[rN==V-)?Y>ihXqDLRN1b~' );
define( 'AUTH_SALT',        'EBfKkv@!M][+o[<AUO?z@bP;?]S%f&t ~S!}wX+ng^1n]}Mn2vQfPtq^4V%m=F^1' );
define( 'SECURE_AUTH_SALT', '8| o#ArL{u_$Hy/jLC{8Hm%c^-m,bDmb5jQ19yrR7xuBg_tYCjlK)~={.dldeqs$' );
define( 'LOGGED_IN_SALT',   'On&wDHC$z8h38Uek}|5Q&i !juUFq:oGJ;R=2e-`H-Q[I#QF8soxAmL`c+Q*2iWE' );
define( 'NONCE_SALT',       'EE2F.0[=4VEw0P|#bD09e2W<Jst0*8NaklX>-@K=g0=p+`2v&O%h#HB$*u7S^lB0' );
/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );