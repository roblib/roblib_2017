<?php

function roblib_2017_field__field_proxied_link__database($variables) {
// the name of the function came from the devel themer tool after 1st putting dpm() in themename_field()
	
// dpm($variables);
// this dumps the vars using the devel mod. use it to target the varibles printed below.
	
	$output = '';
	$output = '<a href="http://proxy.library.upei.ca/login?url=' . $variables['items'][0]['#element']['display_url'] . '">' . $variables['items'][0]['#element']['title'] .  '</a>';
	
	return $output;
}
function roblib_2017_css_alter(&$css) {
 // unset($css[drupal_get_path('module', 'room_reservations') . '/room_reservations.css']);
  unset($css[drupal_get_path('theme', 'omega') . '/omega/css/modules/system/system.messages.theme.css']);
  unset($css[drupal_get_path('module', 'date') . '/date/date_popup/themes/datepicker.1.7.css ']);

}


drupal_add_js(drupal_get_path('theme', 'roblib_2017') . '/dist/assets/js/app.js', array(
  'preprocess' => FALSE,
  'group' => JS_THEME,
  'every_page' => TRUE,
  'weight' => 1000,
  )
);
drupal_add_css(drupal_get_path('theme', 'roblib_2017') . '/dist/assets/css/app.css', array(
  'preprocess' => FALSE,
  'group' => CSS_THEME,
  'media' => 'screen',
  'every_page' => TRUE,
  'weight' => 1000,
  )
);

