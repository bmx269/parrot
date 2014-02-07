<?php

$plugin = array(
  'title' => t('Inset left'),
  'icon' => 'three_inset_left.png',
  'category' => t('Parrot Panels'),
  'theme' => 'three_inset_left',
  'css' => 'three_inset_left.admin.css',
  'regions' => array(
    'three_inset_left_sidebar' => t('Sidebar'),
    'three_inset_left_top'     => t('Top'),
    'three_inset_left_middle'  => t('Middle'),
    'three_inset_left_inset'   => t('Inset'),
    'three_inset_left_bottom'  => t('Bottom'),
  ),
);
