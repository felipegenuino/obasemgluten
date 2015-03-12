<?php get_header(); ?>


<header class="super-hero">
 			      <div class="container">

			<div class="row">
				<div class="col s12 center">	
							<h1>
								<!-- <img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/brands/primary-brand.svg" alt="Oba Sem Gluten"> -->
								<img class="hero-main-image" src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/others/image-app.png" alt="Oba Sem Gluten">
							</h1>

		 					<h2 class="super-title">
		 						<strong>O guia sem gluten</strong> <span>na palma da mão</span></h2>
 							<p class="texto-de-apoio">Encontre mais rápido lugares e produtos seguros.</p>
		  					
		  					<a target="_blank" href="#!" class="button-google-play"></a>

		 		</div> <!--//col s12 -->
			</div> <!-- // row -->
				
			</div> <!-- // container -->
		</header>


<?php /*
<div class="form-watch">
	<div class="container">
 <div class="row">
				  <form class="col s12">
				    <div class="row">
				      
				      <div class="input-field col m3">
				        <i class="mdi-action-account-circle prefix"></i>
				        <input id="icon_prefix" type="text" class="validate">
				        <label for="icon_prefix">Nome</label>
				      </div>
				      
				      <div class="input-field col m4">
				        <i class="mdi-content-mail prefix"></i>
				        <input id="icon_telephone" type="tel" class="validate">
				        <label for="icon_telephone">Email</label>
				      </div>

				      <div class="input-field col m5">
				      		<a class="waves-effect waves-light btn">
				      			   <!--  <i class="mdi-content-send left"></i> -->
								Quero acompanhar o projeto
				      		</a>
				      </div>

				    </div>
				  </form>

				</div> <!-- //row -->
	</div>
</div> <!-- //form-watch -->
*/?>



<section class="section-page section-3">
	<div class="container">
		<div class="row">
			<div class="col s12">
	 			<p>Através do aplicativo, todos aqueles que desejam ter uma dieta controlada encontrarão na palma da mão diversos locais que possuem produtos sem glúten. </p>
	 			<p>A ideia é integrar o sistema de GPS dos smartphones ao aplicativo, para que os usuários possam localizar/avaliar lugares e produtos.</p>
	 		</div>
		</div>
	</div>		
</section>


<main class="container" role="document">
 
<section class="section-page  section-1">
	<div class="row">

		<p class="flow-text"> Integrado a GPS, o App permite a localização de estabelecimentos que comercializam produtos sem glúten, serviços médicos e nutricionais</p>
 
		<div class="col s6 m3">
			<h2 class="center">
				<i class="medium mdi-action-verified-user"></i>
			</h2> 
			<p class="center"><strong>Lugares seguros</strong></p>
			<p class="light">Lista de alimentos seguros aprovados pela ACELBRA</p>
		</div> <!-- //small-3 columns -->

		<div class="col s6 m3">
			<h2 class="center">
				<i class="medium mdi-maps-place"></i>
			</h2>
			<p class="center"><strong>Mapa interativo</strong></p>
			<p class="light">Exibição de locais próximos do seu celular</p>
		</div> <!-- //small-3 columns -->

		<div class="col s6 m3">
			<h2 class="center">
				<i class="medium mdi-action-favorite-outline"></i>
			</h2>
			<p class="center"><strong>Favoritos</strong></p>
			<p class="light">Salve lugares ou produtos que você gostou</p>
		</div> <!-- //small-3 columns -->
		<div class="col s6 m3">
			<h2 class="center">
				<i class="medium mdi-hardware-phone-android"></i>
			</h2>
			<p class="center"><strong>Na palma da mão</strong></p>
			<p class="light">O App que você sempre sonhou com os dados que você precisa.</p>
		</div> <!-- //small-3 columns -->
	</div>
</section>




<div class="row">
	<div class="col s12" role="main">

<?php /*  ?>
	<?php if ( have_posts() ) : ?>

		<?php do_action('foundationPress_before_content'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action('foundationPress_before_pagination'); ?>

	<?php endif;?>



	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action('foundationPress_after_content'); ?>
<?php */ ?>

	</div>
	<?php // get_sidebar(); ?>
</div>


 
</main> <!-- //class="container" role="document" -->

<?php get_footer(); ?>
