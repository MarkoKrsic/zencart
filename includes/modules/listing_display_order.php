<?php

/**
 * listing_display_order module to display sorter dropdown
 *
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 Jan 27 Modified in v2.0.0-alpha1 $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}
if (empty($_GET['main_page'])) {
    $_GET['main_page'] = 'index';
}
if (empty($disp_order_default)) {
    $disp_order_default = PRODUCT_ALL_LIST_SORT_DEFAULT;
}
if (!isset($_GET['disp_order'])) {
    $_GET['disp_order'] = $disp_order_default;
    $disp_order = $disp_order_default;
} else {
    $disp_order = (int)$_GET['disp_order'];
}

switch ((int)$_GET['disp_order']) {
    case 0:
        // reset and let reset continue
        $_GET['disp_order'] = $disp_order_default;
        $disp_order = $disp_order_default;
        // no break here.
    case 1:
        $order_by = " ORDER BY pd.products_name";
        break;
    case 2:
        $order_by = " ORDER BY pd.products_name DESC";
        break;
    case 3:
        $order_by = " ORDER BY p.products_price_sorter, pd.products_name";
        break;
    case 4:
        $order_by = " ORDER BY p.products_price_sorter DESC, pd.products_name";
        break;
    case 5:
        $order_by = " ORDER BY p.products_model";
        break;
    case 6:
        $order_by = " ORDER BY p.products_date_added DESC, pd.products_name";
        break;
    case 7:
        $order_by = " ORDER BY p.products_date_added, pd.products_name";
        break;
    default:
        $order_by = " ORDER BY p.products_sort_order";
        break;
}
