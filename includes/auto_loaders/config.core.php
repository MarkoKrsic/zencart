<?php

/**
 * autoloader array for catalog application_top.php
 *
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 Jan 11 Modified in v2.0.0-alpha1 $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}
if (!defined('USE_PCONNECT')) {
    define('USE_PCONNECT', 'false');
}
/**
 *
 * require DIR_WS_INCLUDES . 'version.php';
 * require DIR_WS_CLASSES . 'class.base.php';
 * require DIR_WS_CLASSES . 'class.notifier.php';
 * $zco_notifier = new notifier()'
 * require DIR_WS_CLASSES . 'class.phpmailer.php';
 * require DIR_WS_CLASSES . 'boxes.php';
 * require DIR_WS_CLASSES . 'category_tree.php';
 * require DIR_WS_CLASSES . 'cache.php';
 * require DIR_WS_CLASSES . 'sniffer.php';
 * require DIR_WS_CLASSES . 'shopping_cart.php';
 * require DIR_WS_CLASSES . 'navigation_history.php';
 * require DIR_WS_CLASSES . 'currencies.php';
 * require DIR_WS_CLASSES . 'message_stack.php';
 * require DIR_WS_CLASSES . 'template_func.php';
 * require DIR_WS_CLASSES . 'split_page_results.php';
 * require DIR_WS_CLASSES . 'breadcrumb.php';
 * require DIR_WS_CLASSES . 'language.php';
 * require DIR_WS_CLASSES . 'zcDate.php';
 *
 */
$autoLoadConfig[0][] = [
    'autoType' => 'include',
    'loadFile' => DIR_WS_INCLUDES . 'version.php',
];
//$autoLoadConfig[0][] = [
//    'autoType' => 'class',
//    'loadFile' => 'class.base.php',
//];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'class.notifier.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'classInstantiate',
    'className' => 'notifier',
    'objectName' => 'zco_notifier',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'class.phpmailer.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'boxes.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'category_tree.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'template_func.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'split_page_results.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'language.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'sniffer.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'shopping_cart.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'navigation_history.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'currencies.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'message_stack.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'breadcrumb.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'class.zcPassword.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'classInstantiate',
    'className' => 'zcPassword',
    'objectName' => 'zcPassword',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'Customer.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'class.search.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'zcDate.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'Coupon.php',
];
$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'CouponValidation.php',
];
/**
 * Breakpoint 5.
 *
 * $zcDate = new zcDate(); ... will be re-initialized when/if the require_languages.php module is run.
 *
 */
$autoLoadConfig[5][] = [
    'autoType' => 'classInstantiate',
    'className' => 'zcDate',
    'objectName' => 'zcDate',
];

/**
 * Breakpoint 30.
 *
 * $zc_cache = new cache();
 *
 */
$autoLoadConfig[30][] = [
    'autoType' => 'classInstantiate',
    'className' => 'cache',
    'objectName' => 'zc_cache',
];
/**
 * Breakpoint 40.
 *
 * require 'includes/init_includes/init_db_config_read.php';
 *
 */
$autoLoadConfig[40][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_db_config_read.php',
];
/**
 * Breakpoint 45.
 *
 * require 'includes/init_includes/init_non_db_settings.php';
 *
 */
$autoLoadConfig[45][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_non_db_settings.php',
];
/**
 * Breakpoint 50.
 *
 * $sniffer = new sniffer();
 * require 'includes/init_includes/init_gzip.php';
 * require 'includes/init_includes/init_sefu.php';
 */
$autoLoadConfig[50][] = [
    'autoType' => 'classInstantiate',
    'className' => 'sniffer',
    'objectName' => 'sniffer',
];
$autoLoadConfig[50][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_gzip.php',
];
$autoLoadConfig[50][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_sefu.php',
];
/**
 * Breakpoint 55.
 *
 * require 'includes/init_includes/init_common_elements.php';
 */
$autoLoadConfig[55][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_common_elements.php',
];
/**
 * Breakpoint 60.
 *
 * require 'includes/init_includes/init_general_funcs.php';
 * require 'includes/init_includes/init_tlds.php';
 *
 */
$autoLoadConfig[60][] = [
    'autoType' => 'require',
    'loadFile' => DIR_WS_FUNCTIONS . 'functions_osh_update.php',
];
$autoLoadConfig[60][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_general_funcs.php',
];
$autoLoadConfig[60][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_tlds.php',
];
/**
 * Breakpoint 70.
 *
 * require 'includes/init_includes/init_sessions.php';
 *
 */
$autoLoadConfig[70][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_sessions.php',
];
/**
 * Breakpoint 80.
 *
 * if (!$_SESSION['cart']) $_SESSION['cart'] = new shoppingCart();
 *
 */
$autoLoadConfig[80][] = [
    'autoType' => 'classInstantiate',
    'className' => 'shoppingCart',
    'objectName' => 'cart',
    'checkInstantiated' => true,
    'classSession' => true,
];
$autoLoadConfig[80][] = [
    'autoType' => 'classInstantiate',
    'className' => 'Zencart\Search\Search',
    'objectName' => 'search',
];
/**
 * Breakpoint 90.
 *
 * currencies = new currencies();
 *
 */
$autoLoadConfig[90][] = [
    'autoType' => 'classInstantiate',
    'className' => 'currencies',
    'objectName' => 'currencies',
];
/**
 * Breakpoint 96.
 *
 * require 'includes/init_includes/init_sanitize.php';
 *
 */
$autoLoadConfig[96][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_sanitize.php',
];
/**
 * Breakpoint 100.
 *
 * if (!$_SESSION['navigaton']) $_SESSION['navigation'] = new navigationHistory();
 * $template = new template_func();
 *
 */
$autoLoadConfig[100][] = [
    'autoType' => 'classInstantiate',
    'className' => 'template_func',
    'objectName' => 'template',
];
$autoLoadConfig[100][] = [
    'autoType' => 'classInstantiate',
    'className' => 'navigationHistory',
    'objectName' => 'navigation',
    'checkInstantiated' => true,
    'classSession' => true,
];
/**
 * Breakpoint 110.
 *
 * require 'includes/init_includes/init_languages.php';
 * require 'includes/init_includes/init_templates.php';
 *
 */
$autoLoadConfig[110][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_languages.php',
];
$autoLoadConfig[110][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_templates.php',
];
/**
 * Breakpoint 120.
 *
 * $_SESSION['navigation']->add_current_page();
 * require 'includes/init_includes/init_currencies.php';
 *
 */
$autoLoadConfig[120][] = [
    'autoType' => 'objectMethod',
    'objectName' => 'navigation',
    'methodName' => 'add_current_page',
];
$autoLoadConfig[120][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_currencies.php',
];
/**
 * Breakpoint 130.
 *
 * messageStack = new messageStack();
 *
 */
$autoLoadConfig[130][] = [
    'autoType' => 'classInstantiate',
    'className' => 'messageStack',
    'objectName' => 'messageStack',
];
/**
 * Breakpoint 135.
 *
 * require 'includes/init_includes/init_customer_auth.php';
 *
 */
$autoLoadConfig[135][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_customer_auth.php',
];
/**
 * Breakpoint 140.
 *
 * require 'includes/init_includes/init_cart_handler.php';
 *
 */
$autoLoadConfig[140][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_cart_handler.php',
];
/**
 * Breakpoint 150.
 *
 * require 'includes/init_includes/init_special_funcs.php';
 *
 */
$autoLoadConfig[150][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_special_funcs.php',
];
/**
 * Breakpoint 160.
 *
 * require 'includes/init_includes/init_category_path.php';
 * $breadcrumb = new breadcrumb();
 */
$autoLoadConfig[160][] = [
    'autoType' => 'classInstantiate',
    'className' => 'breadcrumb',
    'objectName' => 'breadcrumb',
];
$autoLoadConfig[160][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_category_path.php',
];
/**
 * Breakpoint 170.
 *
 * require 'includes/init_includes/init_add_crumbs.php';
 *
 */
$autoLoadConfig[170][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_add_crumbs.php',
];
/**
 * Breakpoint 175.
 *
 * require 'includes/init_includes/init_observers.php';
 *
 */
$autoLoadConfig[175][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_observers.php',
];
/**
 * Breakpoint 180.
 *
 * require 'includes/init_includes/init_header.php';
 *
 */
$autoLoadConfig[180][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_header.php',
];


/**
 * NOTE: Most plugins should be added from point 200 onward.
 */
