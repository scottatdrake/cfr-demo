<?php

/**
 *  Implements template_preprocess_page().
 */
function cfr_preprocess_page(&$vars) {
  // Makes the search form available in page.tpl.php.
  $search_form = drupal_get_form('search_block_form');
  $vars['search'] = drupal_render($search_form);
}
