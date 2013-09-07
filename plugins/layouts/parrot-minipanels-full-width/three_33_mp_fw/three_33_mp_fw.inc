<?php

// Plugin definition
$plugin = array(
  'title' => t('For Full Width - Three Minipanels Columns @ 33%'),
  'icon' => 'three_33_mp_fw.png',
  'category' => t('Parrot Minipanels Full Width'),
  'theme' => 'three_33_mp_fw',
  'css' => 'three_33_mp_fw.admin.css',
  'regions' => array(
    'minipanel_three_33_top_fw'    => t('Top (conditional)'),
    'minipanel_three_33_first_fw'  => t('Left'),
    'minipanel_three_33_second_fw' => t('Center'),
    'minipanel_three_33_third_fw'  => t('Right'),
    'minipanel_three_33_bottom_fw' => t('Bottom (conditional)'),
  ),
);

