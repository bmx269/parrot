<?php

$plugin = array(
  'title' => t('Two column 33/66 Alt'),
  'icon' => 'two_33_66_alt.png',
  'category' => t('Parrot Panels'),
  'theme' => 'two_33_66_alt',
  'css' => 'two_33_66_alt.admin.css',
  'regions' => array(
    'two_33_66_alt_top'    => t('Top (conditional)'),
    'two_33_66_alt_first'  => t('Left'),
    'two_33_66_alt_second' => t('Right'),
    'two_33_66_alt_bottom' => t('Bottom (conditional)'),
  ),
);
