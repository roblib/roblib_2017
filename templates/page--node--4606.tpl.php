<?php

$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));

?>

<div class="l-page">
	<!--______________________topnav______________________-->

	<header class="l-header" role="banner">
		<div id="upei-topbar" class="top-bar">

<!-- ################## left ###################### -->

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
					<button type="button" class="button" data-toggle="offCanvas">Menu</button>
			</div>

<!-- ################## end  ####################### -->
		</div>

	</header>
<!--++++++++++++++tabs+++++++++++++++++++++ -->

<!--______________________messages_____________________________-->
<div class="l-messages">
    <?php print render($page['highlighted']); ?>
    <?php //print $messages; ?>
    <?php print render($page['help']); ?>
</div>
<!--______________________content_____________________________-->

<div class="l-main">
    <div class="l-content " role="main">
<?php  //dpm($tabs); ?>
<?php if ($tabs): ?>
 <section class="admin-tabs">

	 <?php print render($tabs); ?>
 </section>
<?php endif; ?>

<h1>
testing
</h1>



        <div class="content">
            <?php print $breadcrumb; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>





            <?php print $feed_icons; ?>
        </div>
    </div>

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
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
</div>
<?php print render($page['offcanvas']); ?>
