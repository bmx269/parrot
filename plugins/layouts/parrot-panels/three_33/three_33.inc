<?php

// Plugin definition
$plugin = array(
  'title' => t('Three column @ 33%'),
  'icon' => 'three_33.png',
  'category' => t('Parrot Panels'),
  'theme' => 'three_33',
  'css' => 'three_33.admin.css',
  'regions' => array(
    'three_33_top'    => t('Top (conditional)'),
    'three_33_first'  => t('Left'),
    'three_33_second' => t('Center'),
    'three_33_third'  => t('Right'),
    'three_33_bottom' => t('Bottom (conditional)'),
  ),
);

