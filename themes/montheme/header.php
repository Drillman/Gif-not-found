<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<?php
	// hook
	wp_head();?>
</head>
<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper" class="fade-in">

		<!-- Intro -->
			<div id="intro">
				<h1><?php bloginfo('name'); ?></h1>
				<p><?php bloginfo('description');?></p>
				<ul class="actions">
					<li><a href="#nav" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
				</ul>
			</div>

		<!-- Nav -->
			<nav id="nav">
				<?php
				// Afficher le menu principal
				wp_nav_menu([
					'theme_location' => 'main_menu',
					'container' => 'ul',
					'menu_class' => 'links'
				]);
				?>
				<ul class="icons">
					<?php if(get_theme_mods()['twitter']): ?>
					<li><a href="<?php echo get_theme_mods()['twitter'] ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<?php endif; ?>
					<?php if(get_theme_mods()['facebook']): ?>
					<li><a href="<?php echo get_theme_mods()['facebook'] ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<?php endif; ?>
					<?php if(get_theme_mods()['instagram']): ?>
					<li><a href="<?php echo get_theme_mods()['instagram'] ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<?php endif; ?>
					<?php if(get_theme_mods()['github']): ?>
					<li><a href="<?php echo get_theme_mods()['github'] ?>" class="icon fa-github"><span class="label">GitHub</span></a></li>
					<?php endif; ?>
				</ul>
			</nav>
