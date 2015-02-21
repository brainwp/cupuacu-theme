			<?php get_header('front'); ?>

			<div id="linha1" class="linha">
				<div class="interno">
					<h1>Danças Brasileiras</h1>
					<div class="hexagon">
						<h3>Ver Mais</h3>
					</div>
					
				</div><!--fecha interno-->
			</div><!-- fecha linha1-->

			<div id="linha2" class="linha">
				<div class="interno">
					<div id='conteudo-dancas' class="inline-block">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor feugiat efficitur. Aenean quis vulputate mi. Suspendisse vitae massa accumsan, cursus nunc et, luctus tortor. Mm ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. </p>
						<p>Donec dapibus justo dui. Etiam euismod bibendum justo sit amet mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;Donec dapibus justo dui. Etiam euismod bibendum justo sit amet mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
					</div> <!--fecha conteudo-->
					<div id="selecao-dancas"class="inline-block">
						<ul>
							<li class="ativo"><h2>Bumba Meu Boi</h2></li>
							<li><h2>Ciranda</h2></li>
							<li><h2>Coco de Roda</h2></li>
							<li><h2>Dança do lele</h2></li>
							<li><h2>Quadrilha</h2></li>
							<li><h2>Cacuriá e Caroço</h2></li>
							
							
					</div>
						
				</div><!--fecha interno-->
			</div><!-- fecha linha2-->

			<div id="linha3" class="linha">
				<div class="interno">
				</div><!--fecha interno-->
			</div><!-- fecha linha3-->

			<div id="linha4" class="linha">
				<div class="interno">
					<h1 class='inline-block' >Ciclo de Festas</h1>
					<p class='inline-block'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor feugiat efficitur. Aenean quis vulputate mi. Suspendisse vitae massa accumsan, cursus nunc et, luctus tortor. Mm ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. 
					</p>
					<img class='inline-block' src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/img-ciclo.png">
				</div><!--fecha interno-->
				<div class="limpa hr" ></div>
				
			</div><!-- fecha linha4-->

			<div id="linha5" class="linha">
				<div class="interno">
					<h1 class='inline-block' >Trabalhos do Grupo</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor feugiat efficitur. Aenean quis vulputate mi. Suspendisse vitae massa accumsan, cursus nunc et, luctus tortor. Mm ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. 
					</p>
					<?php
					// $count=0;
					// 					$args = array(
					// 					    'post_type' => 'trabalho',
					// 					);
					// $trabalho_query = new  WP_Query( $args );
					?>
				      <ul>
						<?php // while ( $trabalho_query->have_posts() ) : $trabalho_query->the_post();
						// 							echo '<li><a href="'.get_the_permalink().'"><img class="lupa" src="'.get_stylesheet_directory_uri().'/imagens/lupa.png"></a><div class="capa"><a href="'.get_the_permalink().'">';
						// 							the_post_thumbnail('');
						// 							echo '</a></div>';
						// 							the_title();
						// 							echo '</li>';
						// 						endwhile;
						// 						wp_reset_query();
						?>
						</ul>
						<div class="limpa"></div>
				</div><!--fecha interno-->
				
			</div><!-- fecha linha5-->
			
			<div id="linha6" class="linha">
				<div class="interno">
				</div><!--fecha interno-->
				
			</div><!-- fecha linha6-->
			


			<?php /* get_sidebar(); */ ?> 
			<?php get_footer( 'front'); ?>
