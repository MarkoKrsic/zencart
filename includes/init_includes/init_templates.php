<?php
/**
 * initialise template system variables
 * see  {@link  https://docs.zen-cart.com/dev/code/init_system/} for more details.
 * Determines current template name for current language, from database
 * Then loads template-specific language file, followed by master/default language file
 * ie: includes/languages/classic/english.php followed by includes/languages/english.php
 *
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2023 Aug 01 Modified in v2.0.0-alpha1 $
 */

use Zencart\LanguageLoader\LanguageLoaderFactory;

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

/*
 * Lookup the template for the current language
 * The 'choice' aliases help with weighting for fallback to default selection
 */
$template_dir = 'template_default';
$sql = "SELECT template_dir, template_language, template_language=" . (int)$_SESSION['languages_id'] . " AS choice1, template_language=0 AS choice2
        FROM " . TABLE_TEMPLATE_SELECT . "
        ORDER BY choice1 DESC, choice2 DESC, template_language";
$result = $db->Execute($sql);
$template_dir = $result->fields['template_dir'];

/**
 * Allow admins to switch templates using &t= URL parameter
 */
if (zen_is_whitelisted_admin_ip()) {
    // check if a template override was requested and that the template exists on the filesystem
    if (isset($_GET['t']) && file_exists(DIR_WS_TEMPLATES . $_GET['t'])) {
        $_SESSION['tpl_override'] = $_GET['t'];
    }
    if (isset($_GET['t']) && $_GET['t'] === 'off') {
        unset($_SESSION['tpl_override']);
    }
    if (isset($_SESSION['tpl_override'])) $template_dir = $_SESSION['tpl_override'];
}


/**
 * Now that we've established which template to use, initialize all its components
 */

/**
 * The actual template directory to use
 */
  define('DIR_WS_TEMPLATE', DIR_WS_TEMPLATES . $template_dir . '/');
/**
 * The actual template images directory to use
 */
  define('DIR_WS_TEMPLATE_IMAGES', DIR_WS_TEMPLATE . 'images/');
/**
 * The actual template icons directory to use
 */
  define('DIR_WS_TEMPLATE_ICONS', DIR_WS_TEMPLATE_IMAGES . 'icons/');

/**
 * Load the appropriate Language files, based on the currently-selected template
 */
$languageLoaderFactory = new LanguageLoaderFactory();
$languageLoader = $languageLoaderFactory->make('catalog', $installedPlugins, $current_page, $template_dir);
$languageLoader->loadInitialLanguageDefines();
$languageLoader->finalizeLanguageDefines();

/**
 * send the content charset "now" so that all content is impacted by it
 */
header("Content-Type: text/html; charset=" . CHARSET);
