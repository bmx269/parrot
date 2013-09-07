<?php

$plugin = array(
  'title' => t('Two Minipanels Columns @ 50%'),
  'icon' => 'two_50_mp.png',
  'category' => t('Parrot Minipanels'),
  'theme' => 'two_50_mp',
  'css' => 'two_50_mp.admin.css',
  'regions' => array(
    'minipanel_two_50_top'    => t('Top (conditional)'),
    'minipanel_two_50_first'  => t('Left'),
    'minipanel_two_50_second' => t('Right'),
    'minipanel_two_50_bottom' => t('Bottom (conditional)'),
  ),
);
