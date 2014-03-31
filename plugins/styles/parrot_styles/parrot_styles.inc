<?php

$plugin = array(
  'parrot_styles' => array(
    'title'              => t('Parrot Styles'),
    'description'        => t('Thin panel pane and region wrappers with custom classes'),
    'render pane'        => 'parrot_styles_render_pane',
    'pane settings form' => 'parrot_styles_settings_form',
    'css'                => '../../../css/styles.css',

    'hook theme'         => array(
      'parrot_styles_theme_pane' => array(
        'template'  => 'parrot_styles-pane',

        // Change theme name 'parrot' to match changed theme name.
        'path'      => drupal_get_path('theme', 'parrot') . '/plugins/styles/parrot_styles',
        'variables' => array(
          'content'  => NULL,
          'settings' => NULL,
        ),
      ),
    ),
  ),
);

function theme_parrot_styles_render_pane($vars) {
  //$content = &$vars['content'];
  $settings = $vars['settings'];

  // Add custom css & render pane
  $extra_css = array();
  if (!empty($settings) && !empty($vars['pane'])) {
    if (!empty($settings['grid_width'])) {
      $extra_css[] = $settings['grid_width'];
    }
    if (!empty($settings['float'])) {
      $extra_css[] = $settings['float'];
    }
    if (!empty($settings['custom_classes'])) {
      $extra_css[] = trim($settings['custom_classes']);
    }

    if (!empty($extra_css)) {
      // Add to pane settings for reference
      if (empty($vars['pane']->css['css_class'])) {
        $vars['pane']->css['css_class'] = implode(' ', $extra_css);
      }
      else {
        $vars['pane']->css['css_class'] .= ' ' . implode(' ', $extra_css);
      }

      // hijack pane css
      if (empty($vars['content']->css_class)) {
        $vars['content']->css_class = implode(' ', $extra_css);
      }
      else {
        $vars['content']->css_class .= ' ' . implode(' ', $extra_css);
      }
    }
  }

  // This renders the template file parrot_styles-pane.tpl.php
  return theme('panels_pane', $vars);
}


// Configuration form for the pane/region settings.
function parrot_styles_settings_form($style_settings, $panel_obj = null, $pane_id = null, $type = null) {
  $form['grid_width'] = array(
    '#type'          => 'select',
    '#title'         => t('Panel Pane Width'),
    '#options'       => array(
      'width-100' => t('100%  width'),
      'width-75'  => t('75% width'),
      'width-66'  => t('66% width'),
      'width-50'  => t('50% width'),
      'width-33'  => t('33% width'),
      'width-25'  => t('25% width'),
      ' '       => t('-None-'),
    ),
    '#default_value' => (isset($style_settings['grid_width'])) ? $style_settings['grid_width'] : 'width-100',
  );

  // $form['float'] = array(
  //   '#type'          => 'select',
  //   '#title'         => t('Float'),
  //   '#options'       => array(
  //     'float-left'  => t('float left'),
  //     'float-right'  => t('float right'),
  //   ),
  //   '#default_value' => (isset($style_settings['float'])) ? $style_settings['float'] : 'float-left',
  // );

  $form['custom_classes'] = array(
    '#type' => 'textarea',
    '#title' => t('Custom CSS Classes'),
    '#default_value' => (isset($style_settings['custom_classes'])) ? $style_settings['custom_classes'] : '',
    '#description' => t('A space separated list of custom CSS classes to apply to pane. ie. block-border-bottom-orange my-block etc')
   );

  return $form;
}

