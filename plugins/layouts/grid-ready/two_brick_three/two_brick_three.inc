<?php

$plugin = array(
  'title' => t('Two column Three brick'),
  'icon' => 'two_brick_three.png',
  'category' => t('Grid ready'),
  'theme' => 'two_brick_three',
  'css' => 'two_brick_three.admin.css',
  'regions' => array(
    'two_brick_top'         => t('Top (conditional)'),
    'two_brick_left_above'  => t('Left above'),
    'two_brick_right_above' => t('Right above'),
    'two_brick_middle'      => t('Middle (conditional)'),
    'two_brick_left_below'  => t('Left below'),
    'two_brick_middle_below'  => t('Middle below'),
    'two_brick_right_below' => t('Right below'),
    'two_brick_bottom'      => t('Bottom (conditional)'),
  ),
);
