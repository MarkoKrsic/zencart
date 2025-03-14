<?php
/**
 * Module Template
 *
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 Jan 27 Modified in v2.0.0-alpha1 $
 */
$disp_order = (int)($disp_order ?? 0);
$disp_order_default = (int)($disp_order_default ?? 0);
if ($disp_order === 0) {
    $disp_order = $disp_order_default;
}
?>
<?php
// NOTE: to remove a sort order option add an HTML comment around the option to be removed
?>

<?php
  echo zen_draw_form('sorter_form', zen_href_link($_GET['main_page']), 'get');
  echo zen_draw_hidden_field('main_page', $_GET['main_page']);
  if (isset($_GET['cPath'], $cPath)) {
      echo zen_draw_hidden_field('cPath', $cPath);
  }
//  echo zen_draw_hidden_field('disp_order', $_GET['disp_order']);
  echo zen_hide_session_id();
?>
    <label for="disp-order-sorter" class="inputLabel"><?php echo TEXT_INFO_SORT_BY; ?></label>
    <select name="disp_order" onchange="this.form.submit();" id="disp-order-sorter">
<?php if ($disp_order > 0) { ?>
    <option value="<?php echo $disp_order_default; ?>" <?php echo ($disp_order === $disp_order_default ? 'selected="selected"' : ''); ?>><?php echo PULL_DOWN_ALL_RESET; ?></option>
<?php } // reset to store default ?>
    <option value="1" <?php echo ($disp_order === 1 ? 'selected="selected"' : ''); ?>><?php echo TEXT_INFO_SORT_BY_PRODUCTS_NAME; ?></option>
    <option value="2" <?php echo ($disp_order === 2 ? 'selected="selected"' : ''); ?>><?php echo TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC; ?></option>
    <option value="3" <?php echo ($disp_order === 3 ? 'selected="selected"' : ''); ?>><?php echo TEXT_INFO_SORT_BY_PRODUCTS_PRICE; ?></option>
    <option value="4" <?php echo ($disp_order === 4 ? 'selected="selected"' : ''); ?>><?php echo TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC; ?></option>
    <option value="5" <?php echo ($disp_order === 5 ? 'selected="selected"' : ''); ?>><?php echo TEXT_INFO_SORT_BY_PRODUCTS_MODEL; ?></option>
    <option value="6" <?php echo ($disp_order === 6 ? 'selected="selected"' : ''); ?>><?php echo TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC; ?></option>
    <option value="7" <?php echo ($disp_order === 7 ? 'selected="selected"' : ''); ?>><?php echo TEXT_INFO_SORT_BY_PRODUCTS_DATE; ?></option>
    </select>
<?php echo '</form>';
