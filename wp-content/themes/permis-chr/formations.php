
<?php /* Template Name: Formations*/ ?>

<?php get_header(); ?>

<div class="formations">
	<div class="formation">
		<h2>Permis d'exploitation</h2>

		<?php $loop = new WP_Query( array( 'post_type' => 'permis', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


			<div class="row">
				<div class="cell date"><?php the_field('date'); ?></div>
				<div class="cell"><?php the_field('jours'); ?></div>
				<div class="cell"><?php the_field('ville'); ?></div>
				<div class="cell"><?php the_field('prix'); ?></div>
				<div class="cell button-cell"><a href="http://www.permis-chr.fr/contactez-nous/" class="button">Reservez</a></div>
			</div>
	<?php endwhile; wp_reset_query(); ?>
	</div>

	<div class="formation">
		<h2>Pack "Hygiène alimentaire + Permis d'exploitation"</h2>


		<?php $loop = new WP_Query( array( 'post_type' => 'autre', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="row">
				<div class="cell date"><?php the_field('date'); ?></div>
				<div class="cell"><?php the_field('jours'); ?></div>
				<div class="cell"><?php the_field('ville'); ?></div>
				<div class="cell"><?php the_field('prix'); ?></div>
				<div class="cell button-cell"><a href="http://www.permis-chr.fr/contactez-nous/" class="button">Reservez</a></div>
			</div>
			
	<?php endwhile; wp_reset_query(); ?>
	</div>

	<div class="formation">
		<h2>Permis d'exploitation "+ 10 ans d'expérience" ou "Chambre d'hôte"</h2>

		<?php $loop = new WP_Query( array( 'post_type' => 'expert', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


			<div class="row">
				<div class="cell date"><?php the_field('date'); ?></div>
				<div class="cell"><?php the_field('jours'); ?></div>
				<div class="cell"><?php the_field('ville'); ?></div>
				<div class="cell"><?php the_field('prix'); ?></div>
				<div class="cell button-cell"><a href="http://www.permis-chr.fr/contactez-nous/" class="button">Reservez</a></div>
			</div>
	<?php endwhile; wp_reset_query(); ?>
	</div>


</div>


<?php get_footer(); ?>

