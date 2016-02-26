<?php

$plugin = array(
  'title' => t('Two column 80/20'),
  'icon' => 'two_80_20.png',
  'category' => t('Parrot Panels'),
  'theme' => 'two_80_20',
  'css' => 'two_80_20.admin.css',
  'regions' => array(
    'two_80_20_top'    => t('Top - full width (conditional)'),
    'two_80_20_first'  => t('Left'),
    'two_80_20_second' => t('Right'),
    'two_80_20_bottom' => t('Bottom (conditional)'),
  ),
);
