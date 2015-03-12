<?php
/*
Template Name: Full Width
*/
get_header(); ?>


<header class="hero-page">
	<div class="row">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div> <!-- //row -->
</header>

<main class="container" role="document">

<div class="row">
	<div class="s12 l12 col" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<!-- <header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header> -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div> <!-- //row -->
</main> <!-- //class="container" role="document" -->

<?php get_footer(); ?>
