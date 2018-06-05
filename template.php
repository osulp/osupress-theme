<?php

function ponderosa_preprocess(&$variables, $hook) {
  if ($variables['type'] == 'press_book') {
    // dpm($variables);
    //$variables['title'] = NULL;
  }
}

function ponderosa_page_alter(&$page) {
  // dpm($page);
}
// function ponderosa_node
function ponderosa_field__press_book($variables) {
 $output = '';

  // similar to theme_field but with label removed
  // Render the items.
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
    $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
  }
  $output .= '</div>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';
  return $output;
}

function ponderosa_field__field_press_book_authors_editors__press_book($variables) {
  $output = '';
  $items = array();
  foreach($variables['items'] as $delta => $item) {
    $items[] = drupal_render($item);
  }
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '> <div class="field-item"> By ' . implode(', ', $items) . '</div></div>';

  return $output;
}