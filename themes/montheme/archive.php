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
			<header>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			</header>
			<?php if (has_post_thumbnail()): ?>
			<a href="<?php the_permalink() ?>" class="image fit">
				<?php the_post_thumbnail(); ?>
			</a>
			<?php endif; ?>
			<p><?php the_content(); ?></p>
			<ul class="actions special">
				<li><a href="<?php the_permalink() ?>" class="button">Voir</a></li>
			</ul>
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
