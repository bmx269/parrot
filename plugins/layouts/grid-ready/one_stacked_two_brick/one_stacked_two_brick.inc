<?php

$plugin = array(
  'title' => t('One Stacked Two Bricks'),
  'icon' => 'one_stacked_two_brick.png',
  'category' => t('Grid ready'),
  'theme' => 'one_stacked_two_brick',
  'css' => 'one_stacked_two_brick.admin.css',
  'regions' => array(
    'two_brick_top'         => t('Top (conditional)'),
    'two_brick_top_middle'         => t('Top - Middle (conditional)'),
    'two_brick_middle'      => t('Middle (conditional)'),
    'two_brick_left_below'  => t('Left Below'),
    'two_brick_right_below' => t('Right Below'),
    'two_brick_bottom'      => t('Bottom (conditional)'),
  ),
);
