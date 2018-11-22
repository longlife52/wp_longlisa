<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
    <!-- this is for google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel|Roboto" rel="stylesheet">

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
                <a href="index.html" class="hvr-wobble-to-top-right">
                    <img src="assets/dist/img/logo_small.png">
                </a>
                 <h2>Long Life Movement</h2>
             </div>
<!--this check box creates the hamburger look -->
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
     <!-- begin nav -->
            <nav class="nav">
                <h2 class="hide">navigation
                </h2>

                    <ul>
                        <li class="highlight"><a  href="index.html">home</a> </li>

                        <li><a  href="offerings.html">OFFERINGS</a> </li>

                        <li><a href="about.html">about</a> </li>

                        <li><a  href="testimonials.html">testimonials</a> </li>

                        <li><a href="ideas.html">ideas</a> </li>

                        <li><a href="store.html">store</a> </li>

                        <li><a href="contact.html">contact</a> </li>
                    </ul>
            </nav>
    <!-- end nav -->
            <label for="nav-toggle" class="nav-toggle-label">
               <span></span>
            </label>
        </header>
    <!-- open main -->
    <main>
