<?php

// Plugin definition
$plugin = array(
  'title' => t('Four Column @ 25%'),
  'icon' => 'four_25.png',
  'category' => t('Parrot Panels'),
  'theme' => 'four_25',
  'css' => 'four_25.admin.css',
  'regions' => array(
    'four_25_top'    => t('Top (conditional)'),
    'four_25_first'  => t('First'),
    'four_25_second' => t('Second'),
    'four_25_third'  => t('Third'),
    'four_25_fourth'  => t('Fourth'),
    'four_25_bottom' => t('Bottom (conditional)'),
  ),
);

