<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

<link href='http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps|Engagement|Sacramento|Satisfy' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

</head>

<body <?php body_class('off-canvas hide-extras'); ?>>

	<!-- Start the main container -->
	<div id="container" class="container" role="document">

		<!-- Row for blog navigation -->
		<div class="row top-header">
			<header class="twelve columns" role="banner">
				
<div class="row">
  <div class="twelve columns">

<img style="float: left;margin-top: -22px;margin-left: 20px;" src="<?php bloginfo('template_directory'); ?>/images/logo.png">


    <nav class="top-bar">


      <section>

        <!-- Left Nav Section -->
        <ul class="right">
          <li class="has-dropdown">
            <a class="active" href="#" style="font-family: 'Sacramento', cursive;font-size: 24px;">Opskrfter</a>
            <ul class="dropdown">
              <li><label>Section Name</label></li>
              <li class="has-dropdown">
                <a href="#" class="">Level 1, Has Dropdown</a>
                <ul class="dropdown">
                  <li><a href="#">Level 2</a></li>
                  <li><a href="#">Level 2</a></li>
                  <li class="has-dropdown"><a href="#">Level 2, Has Dropdown</a>
                    <ul class="dropdown">
                      <li><label>Section</label></li>
                      <li><a href="#">Level 3</a></li>
                      <li><a href="#">Level 3</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Level 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Level 2</a></li>
                  <li><a href="#">Level 2</a></li>
                </ul>
              </li>
              <li><a href="#">Level 1</a></li>
              <li><a href="#">Level 1</a></li>
              <li class="divider"></li>
              <li><label>Section Name</label></li>
              <li><a href="#">Level 1</a></li>
              <li><a href="#">Level 1</a></li>
              <li><a href="#">Level 1</a></li>
              <li class="divider"></li>
              <li><a href="#">See all &rarr;</a></li>
            </ul>
          </li>
        </ul>

        <!-- Right Nav Section -->
        <ul class="right">
          <li class="has-dropdown">
            <a style="font-family: 'Sacramento', cursive;font-size: 24px;" href="#">Min madsamling</a>
            <ul class="dropdown">
              <li><label>Section Name</label></li>
              <li><a href="#" class="">Level 1</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li class="divider"></li>
              <li><label>Section Name</label></li>
              <li><a href="#">Dropdown Option</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li><a href="#">Dropdown Option</a></li>
              <li class="divider"></li>
              <li><a href="#">See all &rarr;</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>



  </div>
<div class="four columns">
<?php get_search_form( $echo ); ?>
</div>

</div>




				
			</header>
		</div>
		
		<!-- Start Off-Canvas Row -->
		<div class="row">
		
		<!-- Row for main content area -->
		<section id="main" role="main">