<?php
/**
 * Template para exibir o conteúdo da página de danças
 */
?>




				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id="linha-single-titulo" class="linha">
						<div class="interno">
							<h2 ><?php the_title(); ?></h2>
						</div>
					</div>
					<?php
					$count=0;
					$args = array(
						'posts_per_page' => 999,
					    'post_type' => 'dancas_bra',
					);
					$trabalho_query = new  WP_Query( $args );
					
					
					
					?>
					<div class="linha">
						<div id="interno-pag-dancas" class="interno">
							<?php while ( $trabalho_query->have_posts() ) : $trabalho_query->the_post();
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$shortcode= '[zilla_toggle title="'.get_the_title().'"';
								$shortcode .=' state="closed"]<img src="'.$thumb[0].'">';
								$shortcode .= get_the_content().'[/zilla_toggle]';
								echo do_shortcode($shortcode);
							endwhile;
							?>

						</div>
					</div>
				</div><!-- #post-## -->

