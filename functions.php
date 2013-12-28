<?php 
/* Redefine the header image width and height ********************************************/
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 1000 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 255 ) );

// Inserindo novos Menus para o Site
register_nav_menus( array( 'secundary' => __( 'Menu da Pagina Danca', 'twentyten' )) );

// Remove a barra de atualização do Admin
// add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );

?>