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
<script>
$(function(){
 	$('#slider').anythingSlider({
	expand       : true,
	autoPlay     : false,
	buildArrows  : true,
	buildStartStop : false,
	buildNavigation : false,
	/*appendControlsTo: $('#nav'),*/
	appendForwardTo     : null,
	appendBackTo        : null
	});


});
</script>
</head>

<body id="front-page" <?php body_class(); ?>>
	<div id="" class="hfeed">
		<div id="linha-header">
			<div id="header">
				<div id="logo" class="frame">
					<span class="helper"></span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo-front.png">
				</div>
				<div id="cssmenu" class="frame menu-menu-front-container">
					<span class='helper'></span>
					<?php 
					wp_nav_menu(array(
				  		'menu' => 'Front Menu', 
				  		'container' => false, 
				  		'walker' => new CSS_Menu_Maker_Walker()
							)); 
					?>
			
				</div>
			</div><!-- #header -->
		</div><!--linha header-->
		<div id="linha-slider" >
				<!-- Expanding AnythingSlider 100% width -->
			<div id="nav"></div>
			  <div id="anythingWrap">
				<ul id="slider">
					<li>
			      <div class='embed-container'><
			        <img width="2048" height="1366" src="http://rede.com.br/cupuacu/wp-content/uploads/sites/3/2014/09/10679700_811612952224404_8811728882063979686_o.jpg" class="attachment-slider wp-post-image" alt="10679700_811612952224404_8811728882063979686_o" >
			      </div>
			    </li>
					<li>
			      <div class='embed-container'><iframe src='https://player.vimeo.com/video/12155835' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
			    </li>
					<li>
			      <img src="http://a.vimeocdn.com/si/blog/ins_annaul-review2_newsletter.gif" />
			    </li>
					<li>
			    <div class='embed-container'><iframe src='https://player.vimeo.com/video/84391929' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
			    </li>
				</ul>
			</div>

				<!-- END AnythingSlider -->
			
		</div><!--linha slider-->
		<div class="limpa"></div>
		<div id="conteudo-front">