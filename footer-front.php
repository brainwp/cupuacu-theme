		</div> <!-- fecha conteudo-front -->
		<div id="rodape-front">
			<div class="limpa hr" ></div>
			
			<div id="linha7" class="linha">
				
				<div class="interno">
					<div class="coluna-footer" id="coluna1">
						<div class="efeito">
						    <img id="tecido" src="<?php echo bloginfo('stylesheet_directory') ?>/imagens/tecido.png">
						    <img id="logo-rodape" src="<?php echo bloginfo('stylesheet_directory') ?>/imagens/logo-front.png">
							<div id="texto-caixa-rodape">
								<?php $teste = get_option('home_cfg');
								echo $teste['caixa'];
								?>
							</div>
						</div>
						
						
						<?php 
						wp_nav_menu(array(
							'theme_location'  => 'footer-menu',
					  		'container' => false, 
								)); 
						?>
					</div>
					<div class="coluna-footer" id="coluna2">
						<img  class="inline-block"src="<?php echo bloginfo('stylesheet_directory') ?>/imagens/blog-front.png">
						<span class="inline-block">www.grupocupuaçu.org.br/blog</span>
						<div class="limpa"></div>
						<ul>
						<?php
							$args = array( 
								'numberposts' => '2',
								'post_type' => 'post',
								'post_status' => 'publish',
							 );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li class="post-recente"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a><span class="veja"><a href="' . get_permalink($recent["ID"]) . '">Veja Mais >></span></a> </li> ';
							}
						?>
						</ul>
							
					</div>
					<div class="coluna-footer" id="coluna3">
						<img src="<?php echo bloginfo('stylesheet_directory') ?>/imagens/boi-footer.png">
						
					</div>
					
				</div><!--fecha interno-->
			</div><!--fecha linha 7-->

			<div id="linha8" class="linha">
				<div class="interno">
					<img src="<?php echo bloginfo('stylesheet_directory') ?>/imagens/barra-footer.png">
					
				</div><!--fecha interno-->
			</div><!--fecha linha 8-->


		</div><!-- fecha rodape-front -->

	</div><!-- .hfeed -->
 	<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory') ?>/js/script.js"></script>
<?php wp_footer();?>
</body>
</html>
