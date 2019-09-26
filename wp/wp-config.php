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

/** Переписывает урлы для нашего сайта **/
 
define('WP_HOME', 'http://girafffee.nikstep.com.ua:81/wp');
define('WP_SITEURL', 'http://girafffee.nikstep.com.ua:81/wp');


// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'c13wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'c13db' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'SaNkO20001221' );
//w1Tj(51eCrQiOobDiT

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
define( 'AUTH_KEY',         '7Vh+Yr~P,-:D|}maL8ILgiYZt79ZF4sM3l/NfE>aLkyAl?Q_V(XZM)$nb2,.!M{}' );
define( 'SECURE_AUTH_KEY',  '~+z&8)S.?-yTlt~4q#;&8xA0JSLm&aTecD(Rg$*rrVUVkRdc;a:blkkWW=&ZOs*~' );
define( 'LOGGED_IN_KEY',    'r;qGV,gZaS5^-~F741ADQj:17kH{fe;ajvu636*b/e2{UEd$iRn6By(Vba+Qm&B^' );
define( 'NONCE_KEY',        'MY3<oo9VGJ5hwZX>^&X2ypdJ-nK)Fvf3E(O&Z}h(VB}af3M{luqqz*Pf<@t+]Z}R' );
define( 'AUTH_SALT',        '}tSJ{%(X> *An}qJCsdS:AUX5&%+{?`La:z#~LdaO1B1x?5tk_lRj.4Vo|W8H-C@' );
define( 'SECURE_AUTH_SALT', 'i^P,R!dq h63 w/ffW99?iRQ$>NT3O2Os<)o_+Aw`W!)5KFe*VC<KW:u28n%OA~D' );
define( 'LOGGED_IN_SALT',   'y0[_p{yf>yj,.!~9[9nw[bLI&5%@NXyTihB}:/+xK$$ONU@!AeV_<R62rilFfWvS' );
define( 'NONCE_SALT',       '^2)u]2T{52t>0RB#Vm-niP]dOo_}~OB9p)GG7`7H8Sm{t=HgG2-/Q&gj8Y31XHD2' );

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

