<?php

// Plugin definition
$plugin = array(
  'title' => t('HTML5 base'),
  'category' => t('Mothership'),
  'icon' =>  'mothership-html5page.png',
  'theme' => 'mothership-html5page',
  'css' =>   'mothership-html5page.admin.css',
  'regions' => array(
    'top' => t('Top (<header>)'),
    'top_mobile' => t('Top - Mobile (<header>)'),
    'middle' => t('Middle (role="main")'),
    'bottom' => t('Bottom (<footer>)'),
  ),
);
