<?php
/**
 * index.php -- This is the main controller file for the Zen Cart installer
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 Jan 11 Modified in v2.0.0-alpha1 $
 */

if (PHP_VERSION_ID < 80030) {
    die('Sorry, requires minimum PHP 8.0');
}

define('IS_ADMIN_FLAG', false);

/* Debugging
 *  'silent': suppress all logging
 *  'screen': display-to-screen and also to the /logs/ folder  (synonyms: TRUE or 'TRUE' or 1)
 *  'file':   log-to-file-only   (synonyms: anything other than above options)
 */
$debug_logging = 'file';

/*
 * Ensure that the include_path can handle relative paths, before we try to load any files
 */
if (!str_contains(ini_get('include_path'), '.')) {
    ini_set('include_path', '.' . PATH_SEPARATOR . ini_get('include_path'));
}

/*
 * Initialize system core components
 */
define('DIR_FS_INSTALL', __DIR__ . DIRECTORY_SEPARATOR);
define('DIR_FS_ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

require DIR_FS_INSTALL . 'includes/application_top.php';

if (isset($controller) && $controller === 'cli') {
    require DIR_FS_INSTALL . 'includes/cli_controller.php';
} else {
    require DIR_FS_INSTALL . $page_directory . '/header_php.php';
    require DIR_FS_INSTALL . DIR_WS_INSTALL_TEMPLATE . 'common/html_header.php';
    require DIR_FS_INSTALL . DIR_WS_INSTALL_TEMPLATE . 'common/main_template_vars.php';
    require DIR_FS_INSTALL . DIR_WS_INSTALL_TEMPLATE . 'common/tpl_main_page.php';
}
