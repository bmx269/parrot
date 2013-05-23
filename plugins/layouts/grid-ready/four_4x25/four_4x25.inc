<?php

// Plugin definition
$plugin = array(
  'title' => t('Four column 4x25'),
  'icon' => 'four_4x25.png',
  'category' => t('Grid ready'),
  'theme' => 'four_4x25',
  'css' => 'four_4x25.admin.css',
  'regions' => array(
    'four_25_top'    => t('Top (conditional)'),
    'four_25_first'  => t('First'),
    'four_25_second' => t('Second'),
    'four_25_third'  => t('Third'),
    'four_25_fourth'  => t('Fourth'),
    'four_25_bottom' => t('Bottom (conditional)'),
  ),
);

