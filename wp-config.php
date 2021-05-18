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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'Capital' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3BbU9u#-Nf?0Mw)}EgHvG5_sVc5C5#Om| ?ANN}c6a9vxZjIAxZyjj9t#j Hn1k7' );
define( 'SECURE_AUTH_KEY',  '3(m)*qEsku]s#c?b$0v{ga+#_jAg|ZuY[5u7SxemEKwbXY#GJE}_O6eV1hYP+N^p' );
define( 'LOGGED_IN_KEY',    'vdWmY@%^/F3ys;N2OYIip*lHR2_J?pGm)grX-S/+ z`F&MSge(o6Cp5 ?&J7J>+G' );
define( 'NONCE_KEY',        'SQPDiM*F]zW<{v?-:*r|b =c8Q+JVfto f/@$RE0z;,(?o2RQSkT2h/qKqFo(O0v' );
define( 'AUTH_SALT',        '_Xpq6TRLZkfDA6(/u]ndr`:W!oiE6=xcG5[!rF/BMfjMG}lsKjuJ$jx_lbIpP~10' );
define( 'SECURE_AUTH_SALT', 'o;Lo2Q1hcQ}M$0MheCKEO(wji]^w{pJ$N.<9>RF Gyg6[x5!Y,CHWe).kSQ6M V4' );
define( 'LOGGED_IN_SALT',   ' VU5Lk 1CmgME7N(l)3f:9qu3L:;NhiOWf,b(~+TFlB=Q>n |KC ^Vz=kq33LeR?' );
define( 'NONCE_SALT',       'mhq9YBo@hRP2f%:Ri>|ls.H!YKN|`kQ4qSERBo`EVWH)2q@+Bqf-8iIGIr*I}a_z' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
