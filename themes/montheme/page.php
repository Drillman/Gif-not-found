<?php
// Template des pages
get_header();
?>
<div id="main">
	<?php if ( have_posts() ): ?>
	<section class="posts">
		<?php while ( have_posts() ):
		the_post();?>
		<article>
			<?php if (has_post_thumbnail()): ?>
			<a href="" class="image fit">
				<?php the_post_thumbnail(); ?>
			</a>
			<?php endif; ?>
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
