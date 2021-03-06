<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84352700-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-84352700-1');
    </script>

		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/logo_small.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
    <!-- this is for google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel|Roboto" rel="stylesheet">

    <!-- this code is for pinterest and "claiming my website" -->
    <meta name="p:domain_verify" content="e1cb36544060b48da6ac61df810ed0c3"/>

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

    <!-- this div is for scroll to top -->
    <div id="top">
    </div>

     <div class="container">
         <header>
              <div class="logo_name">
                <a href="<?php bloginfo('url'); ?>" class="hvr-wobble-to-top-right">
                    <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/logo_small.png">
                </a>
                 <h2>Long Life Movement</h2>
             </div>
<!--this check box creates the hamburger look -->
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
     <!-- begin nav -->
            <nav class="nav">
                <h2 class="hide">navigation
                </h2>
                <?php html5blank_nav(); ?>
            </nav>
    <!-- end nav -->
            <label for="nav-toggle" class="nav-toggle-label">
               <span></span>
            </label>
        </header>

    <!-- open main -->
    <main>
