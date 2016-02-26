<?php

// Plugin definition
$plugin = array(
  'title' => t('Three Minipanels Columns @ 33%'),
  'icon' => 'three_33_mp.png',
  'category' => t('Parrot Minipanels'),
  'theme' => 'three_33_mp',
  'css' => 'three_33_mp.admin.css',
  'regions' => array(
    'minipanel_three_33_top'    => t('Top (conditional)'),
    'minipanel_three_33_first'  => t('Left'),
    'minipanel_three_33_second' => t('Center'),
    'minipanel_three_33_third'  => t('Right'),
    'minipanel_three_33_bottom' => t('Bottom (conditional)'),
  ),
);

