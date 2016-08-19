
<?php /* Template Name: Page */ ?>


<?php get_header(); ?>

<div class="article-masthead">
	<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	
</div>

<section class="article-section">

	<div class="article-content">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>

	</div>


</section>
	
	
	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


