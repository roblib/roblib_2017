<?php

// Plugin definition
$plugin = array(
  'title' => t('One row two columns'),
  'category' => t('onerowtwocols'),
  'icon' => 'onerowtwocols.png',
  'theme' => 'onerowtwocols',
  'css' => 'onerowtwocols.css',
  'regions' => array(
    'top' => t('Top'),
    'right' => t('Right side'),
    'left' => t('Left side')
  ),
);
