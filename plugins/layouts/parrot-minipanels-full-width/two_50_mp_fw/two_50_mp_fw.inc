<?php

$plugin = array(
  'title' => t('For Full Width - Two Minipanels Columns @ 50%'),
  'icon' => 'two_50_mp_fw.png',
  'category' => t('Parrot Minipanels Full Width'),
  'theme' => 'two_50_mp_fw',
  'css' => 'two_50_mp_fw.admin.css',
  'regions' => array(
    'minipanel_two_50_top_fw'    => t('Top (conditional)'),
    'minipanel_two_50_first_fw'  => t('Left'),
    'minipanel_two_50_second_fw' => t('Right'),
    'minipanel_two_50_bottom_fw' => t('Bottom (conditional)'),
  ),
);
