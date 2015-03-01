			<?php get_header('front'); ?>

			<div id="linha1" class="linha">
				<div class="interno">
					<h1>Danças Brasileiras</h1>
					<div class="hexagon">
						<h3>Ver Mais</h3>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor feugiat efficitur. Aenean quis vulputate mi. Suspendisse vitae massa accumsan, cursus nunc et, luctus tortor. Mm ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. </p>
						<p>Donec dapibus justo dui. Etiam euismod bibendum justo sit amet mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;Donec dapibus justo dui. Etiam euismod bibendum justo sit amet mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
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

			<div id="linha3" class="linha">
				<div class="interno">
				</div><!--fecha interno-->
			</div><!-- fecha linha3-->
			<div class="limpa"></div>

			<div id="linha4" class="linha">
				<div class="interno">
					<h1 class='inline-block' >Ciclo de Festas</h1>
					<p class='inline-block'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor feugiat efficitur. Aenean quis vulputate mi. Suspendisse vitae massa accumsan, cursus nunc et, luctus tortor. Mm ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. 
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
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor feugiat efficitur. Aenean quis vulputate mi. Suspendisse vitae massa accumsan, cursus nunc et, luctus tortor. Mm ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. 
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
							echo '<li><a href="'.get_the_permalink().'"><img class="lupa" src="'.get_stylesheet_directory_uri().'/imagens/lupa.png"></a><div class="capa"><a href="'.get_the_permalink().'">';
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
			
			<div id="linha6" class="linha">
				<div class="interno">
				</div><!--fecha interno-->
				
			</div><!-- fecha linha6-->
			


			<?php /* get_sidebar(); */ ?> 
			<?php get_footer( 'front'); ?>
