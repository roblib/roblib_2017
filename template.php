<?php

function roblib_2017_field__field_proxied_link__database($variables) {
// the name of the function came from the devel themer tool after 1st putting dpm() in themename_field()
	
// dpm($variables);
// this dumps the vars using the devel mod. use it to target the varibles printed below.
	
	$output = '';
	$output = '<a href="http://proxy.library.upei.ca/login?url=' . $variables['items'][0]['#element']['display_url'] . '">' . $variables['items'][0]['#element']['title'] .  '</a>';
	
	return $output;
}


