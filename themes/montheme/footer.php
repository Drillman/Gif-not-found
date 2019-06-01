<!-- Footer -->
<footer id="footer">
	<section>
		<ul style="list-style:none;padding:0;">
		<?php
		// Afficher la zone de widgets de pied de page
		dynamic_sidebar('my_sidebar_2');
		?>
		</ul>
	</section>
	<section class="split contact">
		<section class="alt">
			<h3>Address</h3>
			<p><?php echo get_theme_mods()['address'] ?></p>
		</section>
		<section>
			<h3>Phone</h3>
			<p><a href="#"><?php echo get_theme_mods()['phone'] ?></a></p>
		</section>
		<section>
			<h3>Email</h3>
			<p><a href="#"><?php echo get_theme_mods()['email'] ?></a></p>
		</section>
		<section>
			<h3>Social</h3>
			<ul class="icons alt">
				<?php if(get_theme_mods()['twitter']): ?>
				<li><a href="<?php echo get_theme_mods()['twitter'] ?>" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
				<?php endif; ?>
				<?php if(get_theme_mods()['facebook']): ?>
				<li><a href="<?php echo get_theme_mods()['facebook'] ?>" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
				<?php endif; ?>
				<?php if(get_theme_mods()['instagram']): ?>
				<li><a href="<?php echo get_theme_mods()['instagram'] ?>" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
				<?php endif; ?>
				<?php if(get_theme_mods()['github']): ?>
				<li><a href="<?php echo get_theme_mods()['github'] ?>" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
				<?php endif; ?>
			</ul>
		</section>
	</section>
</footer>
<div class="bg fixed" style="transform: none;opacity:<?php echo get_theme_mods()['background_image_opacity']??1 ?> ;background-image: url(<?php echo wp_get_attachment_image_src(get_theme_mods()['background_image1'], 'original')[0] ?> )"></div>

</div>
</footer>
<?php
// hook
wp_footer();
?>
</body>
</html>
