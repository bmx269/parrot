<?php

// Plugin definition
$plugin = array(
  'title' => t('For Full Width - One Minipanels column'),
  'icon' => 'one_mp_fw.png',
  'category' => t('Parrot Minipanels Full Width'),
  'theme' => 'one_mp_fw',
  'css' => 'one_mp_fw.admin.css',
  'regions' => array(
    'minipanel_one_main_fw' => t('Main'),
  ),
);
