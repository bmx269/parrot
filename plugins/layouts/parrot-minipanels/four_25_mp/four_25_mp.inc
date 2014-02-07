<?php

// Plugin definition
$plugin = array(
  'title' => t('Four Minipanels Columns @ 25%'),
  'icon' => 'four_25_mp.png',
  'category' => t('Parrot Minipanels'),
  'theme' => 'four_25_mp',
  'css' => 'four_25_mp.admin.css',
  'regions' => array(
    'minipanel_four_25_top'    => t('Top (conditional)'),
    'minipanel_four_25_first'  => t('First'),
    'minipanel_four_25_second' => t('Second'),
    'minipanel_four_25_third'  => t('Third'),
    'minipanel_four_25_fourth'  => t('Fourth'),
    'minipanel_four_25_bottom' => t('Bottom (conditional)'),
  ),
);

