<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<?php 
	// hook
	wp_head();?>
</head>
<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<p><?php bloginfo('description');?></p>
		<a href="" class="btn btn-danger">Test</a>
		<?php 
		// Afficher l'image d'en-tête
		$id = get_theme_mod('ban_image');
			if ($id != 0) {
        			$url = wp_get_attachment_url($id);
			        echo '<div style="margin-bottom: 30px;">';
			        echo '<img src="' . $url . '" alt="" />';
			        echo '</div>';
			    }
		?>
	</header>
	<?php 
	// Afficher le menu principal
	wp_nav_menu(array(
		'theme_location' => 'main_menu'));
	?>