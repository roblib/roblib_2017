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
        <div class="content">
            <?php print $breadcrumb; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

			<div class="input-group">
				  <span class="input-group-label">$</span>
				    <input class="input-group-field" type="number">
					  <div class="input-group-button">
						      <input type="submit" class="button" value="Submit">
							    </div>
							</div>

			<div class="inline-search select">
				<form action="https://www.google.com/cse" id="searchbox_007843865286850066037:3ajwn2jlweq" name="googlecse">
					<select id="cx" name="cx" title="limit to geographic area">
						<option selected="selected" value="007843865286850066037:3ajwn2jlweq">Canada</option>
						<option value="007843865286850066037:4-bnftxu7fu">United States</option>
						<option value="001264040667983660617:sdpga_b-la0">Mexico</option>
						<option value="000020642661290884311:t1v1wsrhx8o">Africa</option>
						<option value="007843865286850066037:dq6qjj8woo8">Asia and Pacific</option>
						<option value="003955898386883698851:cwkdymvp0em">Caribbean and Latin America</option>
						<option value="001264040667983660617:6fr15756uka">Europe</option>
						<option value="003955898386883698851:ethbsqpb_pq">Middle East</option>
						<option value="007843865286850066037:b0heuatvay8">Intergovernmental Organizations</option> 
					</select> 

					<input class="searcharg" name="q" size="55" title="search government resources" type="text" /> 
					<div class="input-group-button">
						<input name="sa" type="submit" value="Go" /> 
					</div>
				</form>
					<script type="text/javascript" src="https://www.google.com/coop/cse/brand?form=searchbox_007843865286850066037:3ajwn2jlweq"></script>
			</div>


			<div class="inline-search">
	Search just PEI Provincial and Municipal Web Sites:<br />
			<form action="http://www.google.com/cse" id="cse-search-box">
<input name="q" size="31" type="text" />
				<input name="cx" type="hidden" value="008210323573844390504:tgghgzjnoci" /> 
				<input name="ie" type="hidden" value="UTF-8" /> 						 
				<div class="input-group-button">
					<input name="sa" type="submit" value="Search" /><br />
				</div>
			</form>
			(powered by Google, maintained by UPEI Library Staff)
			</div>
</div> 

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
