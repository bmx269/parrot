<?php

$plugin = array(
  'title' => t('Three column Two brick'),
  'icon' => 'three_brick_two.png',
  'category' => t('Grid ready'),
  'theme' => 'three_brick_two',
  'css' => 'three_brick_two.admin.css',
  'regions' => array(
    'two_brick_top'         => t('Top (conditional)'),
    'two_brick_left_top'  => t('Left Top'),
    'two_brick_middle_top'  => t('Middle Top'),
    'two_brick_right_top' => t('Right Top'),
    'two_brick_middle'      => t('Middle (conditional)'),
    'two_brick_left_below'  => t('Left Below'),
    'two_brick_right_below' => t('Right Below'),
    'two_brick_bottom'      => t('Bottom (conditional)'),
  ),
);
