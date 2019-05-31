<?php
// Inclure header.php
get_header();

// La boucle pour afficher les articles - The Loop
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//Afficher l'image à la une s'il y en a une
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} 
		// Contenu de l'article
		echo '<h3><a href='.get_the_permalink().'>'.get_the_title().'</a></h3>';
		the_excerpt();
		echo '<hr>';
	} 
} 

// Afficher une zone de widgets
dynamic_sidebar('my_sidebar');

// Inclure footer.php
get_footer();
?>
