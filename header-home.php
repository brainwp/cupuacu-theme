<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory') ?>/estilo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory') ?>/estilos/slider_destaque.css" />

 <!-- jQuery (required) -->
 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" type="text/css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
 
 <!-- Anything Slider optional plugins -->
 <script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/jquery.easing.1.2.js"></script>
 <script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/swfobject.js"></script> <!-- http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js -->
 
 <!-- Anything Slider -->
 <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory') ?>/estilos/anythingslider.css" type="text/css" media="screen" />
 <script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/jquery.anythingslider.js"></script>
 
   <!-- Anything Slider optional FX extension -->
 <script src="<?php echo bloginfo('stylesheet_directory') ?>/js/jquery.anythingslider.fx.min.js" type="text/javascript"></script>
 
 <!-- This page only -->
 <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory') ?>/estilos/slider_destaque.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory') ?>/colorbox/colorbox.css" type="text/css" media="screen" />
 <script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/cupuacu_destaque.js"></script>
 <script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/custom.js"></script>

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22908697-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">

	</div><!-- #header -->

	
<div id="home">