<?php

$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));

?>

<div class="l-page">
	<!--______________________topnav______________________-->

	<header class="l-header" role="banner">
		<div id="upei-topbar" class="top-bar">

<!-- ################## left ####################### -->

			<div class="top-left">
				<ul class="branding menu">
				<li>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
					<img class="site-logo" src="/<?php print $theme_path ?>/dist/assets/img/logo.svg">
				</a>
				</li>
				<li>
					<span class="site-name">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Robertson<br>Library</a>
					</span>
				</li>
				</ul>
			</div>


<!-- ################## center ####################### -->
			<div class="top-center">
				<?php print render($page['menu_bar_center']); ?>
			</div>
<!-- ################## right ####################### -->
			<div class="top-right">
				<?php print views_embed_view('current_library_hours', 'block'); ?>
					<button type="button" class="button" data-toggle="offCanvas">Open Menu</button>
			</div>

<!-- ################## end  ####################### -->
		</div>

	</header>
<!--______________________subfooter___________________________-->
</div>

<?php print render($page['offcanvas']); ?>
