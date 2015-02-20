<?php 
/* Redefine the header image width and height ********************************************/
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 1000 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 255 ) );

// Inserindo novos Menus para o Site
register_nav_menus( array( 'secundary' => __( 'Menu da Pagina Danca', 'twentyten' )) );

// Remove a barra de atualização do Admin
// add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );

function registra_menus() {
  register_nav_menus(
    array(
      'front-menu' => __( 'Front Menu' ),
    )
  );
}
add_action( 'init', 'registra_menus' );

//menu walker
class CSS_Menu_Maker_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}
////

////

add_filter( 'wp_nav_menu_items', 'adiciona_itens', 10, 2 );
function adiciona_itens ( $items, $args ) {
        $items .= '<li><img id="blog-front" src="'.get_stylesheet_directory_uri().'/imagens/blog-front.png"></li>';
		$items .= '<li><img id="mail-front" src="'.get_stylesheet_directory_uri().'/imagens/mail-front.png"></li>';
    return $items;
}



/////////CPT slider
	function slider_cpt() {
		$labels = array(                   
			'name'               => 'Fotos Slider',
			'singular_name'      => 'Foto',
			'menu_name'          => 'Fotos Slider',
			'name_admin_bar'     => 'Foto Slider',
			'add_new'            => 'Adicionar nova',
			'add_new_item'       => 'Adicionar nova Foto',
			'new_item'           => 'Nova Foto',
			'edit_item'          => 'Editar Foto',
			'view_item'          => 'Ver Foto',
			'all_items'          => 'Todas as Fotos',
			'search_items'       => 'Buscar Fotos',
			'parent_item_colon'  => '',
			'not_found'          => 'Nenhuma foto encontrada',
			'not_found_in_trash' => 'Nenhuma foto encontrada na lixeira' 
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'slide' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			
			'menu_icon' => 'dashicons-format-gallery',
	  		'supports' => array( 'title', 'thumbnail' )
		);

		register_post_type( 'slide', $args );
	}
	add_action( 'init', 'slider_cpt' );
