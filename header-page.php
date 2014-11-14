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

 <!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>

 <!-- jQuery (required) -->
 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" type="text/css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/custom.js"></script>

<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/jquery.tooltip.js" ></script>
<script type="text/javascript">
	$(function() {
$("#meuspan, #meuspan1, #meuspan2, #meuspan3, #meuspan4, #meuspan5, #meuspan6, #meuspan7, #meuspan8, #meuspan9, #meuspan10, #meuspan11, #meuspan12, #meuspan13, #meuspan14, #meuspan15, #meuspan16, #meuspan17, #meuspan18, #meuspan19, #meuspan20, #meuspan21, #meuspan22, #meuspan23, #meuspan24, #meuspan25, #meuspan26, #meuspan27, #meuspan28, #meuspan29, #meuspan30,#meuspan31, #meuspan32, #meuspan33, #meuspan34, #meuspan35, #meuspan36, #meuspan37, #meuspan38, #meuspan39, #meuspan40,").tooltip({ // Esta linha cria  tooltip e passa os paramentros abaixo
			track: true, // Para que possa se movimentar
			delay: 0, // Tempo de carregamento
			showBody: " - ", // o que esta dividindo o titulo e o conteudo
			top: -15, // Espa�amento do topo
			left: 5 // Espa�amento da direita
		});
	});
	</script>
	
	 <!-- Shadow Box -->

<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory') ?>/estilos/shadowbox.css">
<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    handleOversize: "drag",
    modal: true
});
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

	
<div id="geral">
