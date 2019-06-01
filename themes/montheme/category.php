<?php
// Template pour les catégories
get_header();
?>
<div id="main">
	<?php if ( have_posts() ): ?>
	<section>
		<?php while ( have_posts() ):
			the_post();
			if (has_post_thumbnail()) the_post_thumbnail();
		?>
		<article>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</article>
		<?php endwhile;?>
	</section>
	<?php else: ?>
	<section>
		<h1>Aucun post existant</h1>
	</section>
	<?php endif; ?>
</div>
<?php get_footer();?>
<?php
