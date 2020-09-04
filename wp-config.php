<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'trade_union' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^{] s>gvr8Af^e1(+{v@4Q0S f7UwXapE~`ilA2T~)97=))7# v0{aXKU6)HN[Ub' );
define( 'SECURE_AUTH_KEY',  'Ht3 0Mbzl<([m7_YyO@TJDBUJ(93+RpNuKsJ!_Og/gM[to@R}(F3-E/,!wPk]jh4' );
define( 'LOGGED_IN_KEY',    '?Bq=kG((:#~CqeWn$tc9i,ow#txp|bZc.+5xl~{S2!Moo;?q{vFa[lq5P5!.K<>c' );
define( 'NONCE_KEY',        ':Jx,%fTj460Qil#[GxBV+h,Rfo=EB_1/jBO|vT3L`wW:n-C#A,08AABh:Z,X7s7b' );
define( 'AUTH_SALT',        'f}X[m=O0/ Z?$?)Gl<r=k+~j4+LRt^<Bp4fi+^lcz[(0l,@bMtD02EqiR&]40y{>' );
define( 'SECURE_AUTH_SALT', 'D:*QZgb<:%k.582XPZZ>:uJ4.5~}$`:wI_X0a%8(<T|RK.p~7<K#6#wyjjEW.S@6' );
define( 'LOGGED_IN_SALT',   'f){:#)02|Cm!SD-3n6vE0?O1=2Y(lV~cl~1n#Jn-2!a5LG`9c9~rdOF=Y2G%<4G!' );
define( 'NONCE_SALT',       '2TpI5J.W0w<&+7dc`,$%1]b;s+W7ru3r~^HM0NBw-ju[-PZxs|SRql[PLhT)|^k!' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
