<?php /* Template Name: Pagina Dancas */ get_header('page'); ?>

<div id="conteudo-esq">
    <div id="home-link"><a class="home-link" href="<?php echo home_url( '/' ); ?>"></a></div>
	<div id="mail"><a class="mail" href="<?php echo home_url( '/contato' ); ?>"></a></div>
	<div id="menu-grupo">
		<a class="link-grupo" href="quem-somos.html"></a>
		<h1 class="menu-titulo">Sobre o Grupo</h1>
		<ul>
		<li><a href="<?php echo home_url( '/historia' ); ?>">historia</a></li>
		<li><a href="<?php echo home_url( '/agenda' ); ?>">Agenda</a></li>
		<li><a href="<?php echo home_url( '/fotos' ); ?>">fotos</a></li>
		</ul>	
	</div>
	
	<div id="menu-bumba">
		<a class="link-bumba" href=""></a>	
		<h1 class="menu-titulo">Bumba Meu Boi</h1>
		<ul>
		<li><a href="<?php echo home_url( '/renascimento' ); ?>">renascimento</a></li>
		<li><a href="<?php echo home_url( '/batizado' ); ?>">batizado</a></li>
		<li><a href="<?php echo home_url( '/morte' ); ?>">morte</a></li>
		</ul>

	</div>
	
	<div id="menu-dancas">
		<a class="link-dancas" href=""></a>	
		<h1 class="menu-titulo"><a>Dan�as Brasileiras</a></h1>
		<ul>
		<li><a href="<?php echo home_url( '/dancas-brasileiras' ); ?>">CONHECA AS DANCAS <br />QUE TRABALHAMOS <br />E PESQUISAMOS</a></li>
		</ul>
	</div>
	<div id="link-blog"><a class="link-blog" href="<?php echo home_url( '/blog' ); ?>"></a></div>
</div><!-- fecha conteudo-esq -->	

<div id="conteudo-dir-dancas">
<div id="cont-titulo-dancas">Danças Brasileiras</div>

	<div id="menu-pag-dancas-box">
<?php wp_nav_menu( array( 'container_class' => 'menu-pag-dancas', 'theme_location' => 'secundary' ) ); ?>
	</div>
	
	<div id="cont-geral-bg-dancas">
	<div id="cont-geral-sobre">
					<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
	</div>
	</div>
</div><!-- fecha conteudo-dir-dancas -->

<?php /* get_sidebar(); */ ?> 
<?php get_footer( 'page'); ?>
