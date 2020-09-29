<?php

/**
 * @file
 * Defines an asymetric, golden ratio based panels layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('libstart'),
  'icon' => 'preview.png',
  'category' => t('Rob Custom'),
  'theme' => 'libstart',
  'css' => 'libstart.layout.css',
  'regions' => array(
    'first' => t('Left'),
    'second' => t('Right'),
  ),
);

/**
 * Implements hook_preprocess_golden().
 */
function template_preprocess_libstart(&$variables) {
  $variables['attributes_array']['class'][] = 'panel-libstart';
  $variables['attributes_array']['class'][] = 'panel-display--libstart';

  foreach($variables['content'] as $name => $item) {
    $variables['region_attributes_array'][$name]['class'][] = 'libstart-region';
    $variables['region_attributes_array'][$name]['class'][] = 'libstart-region--' . drupal_clean_css_identifier($name);
  }
}
