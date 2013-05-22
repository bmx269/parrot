<?php

$plugin = array(
  'title' => t('One column stacked'),
  'icon' => 'one_stacked.png',
  'category' => t('Grid ready'),
  'theme' => 'one_stacked',
  'css' => 'one_stacked.admin.css',
  'regions' => array(
    'one_stacked_top'    => t('Top (conditional)'),
    'one_stacked_bottom' => t('Bottom (conditional)'),
  ),
);
