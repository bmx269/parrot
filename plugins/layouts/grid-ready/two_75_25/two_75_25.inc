<?php

$plugin = array(
  'title' => t('Two column 75/25'),
  'icon' => 'two_75_25.png',
  'category' => t('Grid ready'),
  'theme' => 'two_75_25',
  'css' => 'two_75_25.admin.css',
  'regions' => array(
    'two_75_25_top'    => t('Top (conditional)'),
    'two_75_25_first'  => t('Left'),
    'two_75_25_second' => t('Right'),
    'two_75_25_bottom' => t('Bottom (conditional)'),
  ),
);
