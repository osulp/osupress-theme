<?php

/**
 * @file
 * Display Suite Three two column rows configuration.
 */

function ds_three_two_column_rows() {
  return array(
    'label' => t('Three two column rows'),
    'regions' => array(
      'top_left' => t('Top Left'),
      'top_right' => t('Top Right'),
      'mid_left' => t('Mid Left'),
      'mid_right' => t('Mid Right'),
      'bottom_left' => t('Bottom Left'),
      'bottom_right' => t('Bottom Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (three_two_column_rows.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (three_two_column_rows.png)
    // 'image' => TRUE,
  );
}
