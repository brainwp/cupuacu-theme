			<?php get_header('front'); ?>
				<?php 
				$home_cfg = get_option('home_cfg');
				?>
			<div id="linha1" class="linha">
				<div class="interno">
					<h1>Danças Brasileiras</h1>
					<div class="hexagon">
						
						<h3><a href="<?php
						$pages = get_pages(array(
						    'meta_key' => '_wp_page_template',
						    'meta_value' => 'page-dancas_bra.php'
						));
						echo $pages[0]->post_name;
						?>"> Ver Mais</a></h3>
					</div>
					
				</div><!--fecha interno-->
			</div><!-- fecha linha1-->
			<div class="limpa"></div>
			<script type="text/javascript">
			var templateDir = "<?php echo get_stylesheet_directory_uri() ?>";
			</script>
			<div id="linha2" class="linha">
				<div class="interno">
					<div id='conteudo-dancas' class="inline-block">
						<?php echo $home_cfg['texto_dancas'];?>
						
					</div> <!--fecha conteudo-->
					<div id="selecao-dancas"class="inline-block">
							<?php 
							wp_nav_menu(array(
								'theme_location'  => 'dancas-menu',
						  		'container' => false, 
						  		'walker' => new dancas_menu()
									)); 
							?>
						
						
					</div>
						
				</div><!--fecha interno-->
			</div><!-- fecha linha2-->
			<div class="limpa"></div>

			<?php $random_img = random_home_image(); ?>
			<div id="linha3" class="linha" style="background-image:url(<?php echo $random_img['url'];?>);">
				<div class="interno">
				</div><!--fecha interno-->
			</div><!-- fecha linha3-->
			<div class="limpa"></div>

			<div id="linha4" class="linha">
				<div class="interno">
					<h1 class='inline-block' >Ciclo de Festas</h1>
					<p class='inline-block'><?php echo $home_cfg['texto_ciclo'];?>
					
					</p>
					<a href="ciclo-de-festas/"><img class='inline-block' src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/img-ciclo.png">
				</div><!--fecha interno-->
				<div class="limpa hr" ></div>
				
			</div><!-- fecha linha4-->
			<div class="limpa"></div>

			<div id="linha5" class="linha">
				<div class="interno">
					<h1 class='inline-block' >Trabalhos do Grupo</h1>
					<p>
						<?php echo $home_cfg['texto_trabalhos'];?>
					
					</p>
					<?php
					$count=0;
					$args = array(
						'posts_per_page' => 3,
					    'post_type' => 'trabalho',
					);
					$trabalho_query = new  WP_Query( $args );
					?>
				      <ul>
						<?php while ( $trabalho_query->have_posts() ) : $trabalho_query->the_post();
							echo '<li><a href="'.get_the_permalink().'"></a><div class="capa"><img class="lupa" src="'.get_stylesheet_directory_uri().'/imagens/lupa.png"><a href="'.get_the_permalink().'">';
							the_post_thumbnail('');
							echo '</a></div>';
							the_title();
							echo '</li>';
						endwhile;
						?>
						</ul>
						<div class="limpa"></div>
				</div><!--fecha interno-->
				
			</div><!-- fecha linha5-->
			<div class="limpa"></div>
			
			<?php $random_img = random_home_image(); ?>
			<div id="linha6" class="linha" style="background-image:url(<?php echo $random_img['url'];?>);">
				<div class="interno">
				</div><!--fecha interno-->
				
			</div><!-- fecha linha6-->
			


			<?php /* get_sidebar(); */ ?> 
			<?php get_footer( 'front'); ?>
