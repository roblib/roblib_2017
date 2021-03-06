<?php

$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));

?>

<div class="l-page">

	<!--______________________topnav______________________-->

	<header class="l-header" role="banner">
		<div id="upei-topbar" class="top-bar">

			<div class="top-left">
				<ul class="branding menu">
				<li>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
					<img class="site-logo" src="http://librarytest.upei.ca/sites/librarytest.upei.ca/themes/themes/roblib_2017/dist/assets/img/logo.svg">
				</a>
					<!--<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">-->
						<!--<img class="site-logo" src="<?php print $logo ?>">-->
					<!--</a>-->
				</li>
				<li>
					<span class="site-name">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Robertson<br>Library</a>
					</span>
				</li>
				</ul>
			</div>
			<div class="top-center">
				<?php print render($page['menu_bar_center']); ?>
			</div>
			<div class="top-right">
				<?php print views_embed_view('current_library_hours', 'block'); ?>
					<button type="button" class="button" data-toggle="offCanvas">Open Menu</button>
			</div>

		</div>

	</header>

<!--______________________messages_____________________________-->
<div class="l-messages">
	<?php print render($page['highlighted']); ?>
<!--
	<?php print $messages; ?>
	<?php print render($page['help']); ?>
-->
</div>
<!--______________________content_____________________________-->

<div class="l-main">
	<div class="l-content " role="main">
		<div class="landing-page__content">
			<a id="main-content"></a>
<div class="admin-menu__container">
	<?php if ($tabs): ?>
			  <button class="button admin-menu__button" type="button" data-toggle="admin-dropdown"></button>
	<div class="dropdown-pane admin-menu__dropdown" id="admin-dropdown" data-position="bottom" data-alignment="right"  data-dropdown data-auto-focus="true">
	 <?php print render($tabs); ?>
	</div> 
	<?php endif; ?>
</div>
			<?php print render($page['content']); ?>
		</div>
	</div>
</div>
</div>
<!--______________________sidebar-first_______________________-->
<!--______________________sidebar-second______________________-->
<!--______________________footer______________________________-->
<footer class="l-footer" role="contentinfo">
		<aside class="footer">
	<div class="container">
			<?php print render($page['footer']); ?>
	</div>
		</aside>
	<aside class="subfooter">
	<div class="container">
		<?php print render($page['subfooter']); ?>
	</div>
	</aside>
</footer>
<!--______________________subfooter___________________________-->
<?php print render($page['offcanvas']); ?>
