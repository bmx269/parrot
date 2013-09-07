<?php

// Plugin definition
$plugin = array(
  'title' => t('One Minipanels column'),
  'icon' => 'one_mp.png',
  'category' => t('Parrot Minipanels'),
  'theme' => 'one_mp',
  'css' => 'one_mp.admin.css',
  'regions' => array(
    'minipanel_one_main' => t('Main'),
  ),
);
