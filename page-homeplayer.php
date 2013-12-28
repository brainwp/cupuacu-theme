<?php /* Template Name: Home Player*/ get_header('home'); ?>
<div id="conteudo-esq-home">
	<div id="imagem-topo"></div>
	<div id="imagem-baixo"></div>
	<div id="menu-bumba-home">
		<h1 class="menu-titulo">Bumba Meu Boi</h1>
		<ul>
		<li><a href="<?php echo home_url( '/renascimento' ); ?>">renascimento</a></li>
		<li><a href="<?php echo home_url( '/batizado' ); ?>">batizado</a></li>
		<li><a href="<?php echo home_url( '/morte' ); ?>">morte</a></li>
		</ul>
	<a class="link-bumba" href="<?php echo home_url( '/batizado' ); ?>"></a>	
	</div>
	<div id="lancamento">
	<h1 class="menu-titulo">Lancamento</h1>
	</div>
	<p class="lancamento-text">CD todo canto danCa</p>	

</div><!-- fecha conteudo-esq-home -->	

<div id="conteudo-dir-home">
	
	<div id="mail-blog">
		<div id="mail-home"><a class="mail" href="<?php echo home_url( '/contato' ); ?>"></a></div>
		<div id="blog-link"><a class="link-blog" href="<?php echo home_url( '/blog' ); ?>"></a></div>
	</div>
	
	<div id="menu-grupo-home">
		<a class="link-grupo" href="<?php echo home_url( '/sobre-nos' ); ?>"></a>
		<h1 class="menu-titulo">Sobre o Grupo</h1>
		<ul>
		<li><a href="<?php echo home_url( '/historia' ); ?>">historia</a></li>
		<li><a href="<?php echo home_url( '/agenda' ); ?>">Agenda</a></li>
		<li><a href="<?php echo home_url( '/fotos' ); ?>">fotos</a></li>
		</ul>	
	
	</div>
	
	<div id="slider_home">
		<div id="destaque_title">DESTAQUES</div>
  
  <?php if(function_exists("insert_post_highlights")) insert_post_highlights(); ?>
		  <!-- <ul id="slider_destaque">
		   <li>
				 <a href="<?php echo home_url( '/renascimento' ); ?>" class="slider"><img src="<?php echo bloginfo('stylesheet_directory') ?>/imagens/imgs_slides/slide-cupuacu-1.jpg" alt="Festa do Renascimento do Boi" /></a>
				 <div class="caption-bottom">A primeira festa de 2011!
		   </div>
		   </li>
		   <li>
			<a href="<?php echo home_url( '/historia' ); ?>" class="slider"><img src="<?php echo bloginfo('stylesheet_directory') ?>/imagens/imgs_slides/slide-cupuacu-3.jpg" alt="Doc. sobre o Cupua�u" /></a>
					<div class="caption-bottom">Conheca Melhor Nossa Historia</div>
		   </li>
		   <!-- <li>
			  <a href="<?php echo home_url( '/tiao' ); ?>" class="slider"><img src="<?php echo bloginfo('stylesheet_directory') ?>/imagens/imgs_slides/slide-cupuacu-2.jpg" alt="Ti�o Carvalho" /></a>
				<div class="caption-bottom">Fundador e mentor do grupo</div>
		   </li>
		  </ul> -->
	</div>
	
	<div id="menu-dancas-home">
		<a class="link-dancas" href="<?php echo home_url( '/dancas-brasileiras' ); ?>"></a>	
		<h1 class="menu-titulo"><a>Dan�as Brasileiras</a></h1>
		<ul>
		<li><a href="<?php echo home_url( '/dancas-brasileiras' ); ?>">CONHECA AS DANCAS <br />QUE TRABALHAMOS <br />E PESQUISAMOS</a></li>
		</ul>
	
	</div>
	<div id="player">
<?php  // mp3j_put( '[mp3-jplayer tracks="FEED:LIB" pick="5" list="n" pn="y" stop="n" shuffle="y" width="270px" height="80px"]' ); ?>
	</div><!-- fecha player -->	
</div><!-- fecha conteudo-dir-home -->

<?php /* get_sidebar(); */ ?> 
<?php get_footer( 'page'); ?>
