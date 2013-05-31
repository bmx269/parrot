<?php

$plugin = array(
  'title' => t('Two column 25/75'),
  'icon' => 'two_25_75.png',
  'category' => t('Grid ready'),
  'theme' => 'two_25_75',
  'css' => 'two_25_75.admin.css',
  'regions' => array(
    'two_25_75_top'    => t('Top (conditional)'),
    'two_25_75_first'  => t('Left'),
    'two_25_75_second' => t('Right'),
    'two_25_75_bottom' => t('Bottom (conditional)'),
  ),
);
