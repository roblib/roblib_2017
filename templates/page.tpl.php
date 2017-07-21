<div class="l-page">
<!--______________________topnav______________________-->
  <header class="l-header" role="banner">

    <div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
      <div class="top-bar-left">
<!-- logo -->
<?php $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)); ?>
    <a href="www.upei.ca">
        <img class="site-logo" src="<?php print $theme_path;?>/dist/assets/img/logo.svg">
    </a>
<!-- end logo -->
        <ul class="dropdown menu" data-dropdown-menu>
          <li>
            <a href="#">One</a>
            <ul class="menu vertical">
              <li><a href="#">One</a></li>
              <li><a href="#">Two</a></li>
              <li><a href="#">Three</a></li>
            </ul>
          </li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </div>
<div class="top-bar-right">

<button type="button" class="button" data-toggle="offCanvas">Open Menu</button>
</div>
    </div>
</header>
<!--++++++++++++++tabs+++++++++++++++++++++ -->
<div class="searchtabs__container">
    <div class="searchtabs">
<ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Tab 1</a></li>
  <li class="tabs-title"><a href="#panel2c">Tab 2</a></li>
  <li class="tabs-title"><a href="#panel3c">Tab 3</a></li>
  <li class="tabs-title"><a href="#panel4c">Tab 4</a></li>
</ul>

<div class="tabs-content" data-tabs-content="collapsing-tabs">
  <div class="tabs-panel is-active" id="panel1c">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <div class="tabs-panel" id="panel2c">
    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
  </div>
  <div class="tabs-panel" id="panel3c">
    <img class="thumbnail" src="assets/img/generic/rectangle-3.jpg">
  </div>
  <div class="tabs-panel" id="panel4c">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>
    </div>
</div>

<!--______________________messages_____________________________-->
      <div class="l-messages">
          <?php print render($page['highlighted']); ?>
          <?php print $messages; ?>
      <?php print render($page['help']); ?>
      </div>
<!--______________________content_____________________________-->

  <div class="l-main">
    <div class="l-content " role="main">
    <div class="content">
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print render($tabs); ?>
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
    <?php print render($page['footer']); ?>
    <?php print render($page['subfooter']); ?>
  </footer>
<!--______________________subfooter___________________________-->
</div>
    <?php print render($page['offcanvas']); ?>
