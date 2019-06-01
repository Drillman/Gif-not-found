<?php

/*
 * Enqueue style & scripts
 */

add_action('wp_enqueue_scripts', 'mytheme_styles_scripts');

function mytheme_styles_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('fontAwesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('main', get_bloginfo('template_directory').'/assets/css/main.css');
	wp_enqueue_style('noScript', get_bloginfo('template_directory').'/assets/css/noscript.css');

	wp_enqueue_script('breakpoint', get_bloginfo('template_directory').'/assets/js/breakpoints.min.js');
	wp_enqueue_script('browser', get_bloginfo('template_directory').'/assets/js/browser.min.js');
	// wp_enqueue_script('jquery', get_bloginfo('template_directory').'/assets/js/jquery.min.js');
	// wp_enqueue_script('scrollex', get_bloginfo('template_directory').'/assets/js/jquery.scrollex.min.js');
	// wp_enqueue_script('scrolly', get_bloginfo('template_directory').'/assets/js/jquery.scrolly.min.js');
	wp_enqueue_script('main', get_bloginfo('template_directory').'/assets/js/main.js');
	wp_enqueue_script('utils', get_bloginfo('template_directory').'/assets/js/util.js');

}

/*
 * Active la fonctionnalité Image à la Une dans les articles
 */
add_theme_support( 'post-thumbnails' );

/*
 * Ajouter des zones de menus au thème
 */

// Hook 'after_setup_theme'
add_action('after_setup_theme','mytheme_menus');

// Initialiser les menus
function mytheme_menus() {
	register_nav_menus(array(
		'main_menu' => __('Menu Principal', 'mythemelg'),
		'footer_menu' => __('Menu du pied de page', 'mythemelg'),
		)
	);
}

/*
 *Ajouter des zones de widgets au thème
 */

// Hook 'widgets_init'
add_action ('widgets_init', 'mytheme_sidebars');

// Initialiser les zones
function mytheme_sidebars() {
	register_sidebar(array(
		'name' => __('Ma zone de footer', 'mythemelg'),
		'id'   => 'my_sidebar_2',
		'description' => __('les widgets s\'afficheront dans le footer' , 'mythemelg'),
		)
	);
}


/*
 * Options dans l'onglet 'Apparences' -> 'Personnaliser'
 * The customizer API
 */
add_action( 'customize_register', 'themeslug_customize_register' );

function themeslug_customize_register( $wp_customize ) {
	$wp_customize->add_section('background_image_selection', array(
		'title' => __('Image de fond', 'mythemelg'),
		'priority' => 30,
	));

	$wp_customize->add_setting('background_image1', array(
		'default' => get_bloginfo('template_directory').'/assets/img/defaultBackground.jpg',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'background_image1', array(
		'label' => __('Choisir l\'image de fond', 'mythemelg'),
		'section' => 'background_image_selection',
		'mime_type' => 'image',
	)));
	$wp_customize->add_setting('background_image_opacity', array(
		'default' => '1',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'background_image_opacity', array(
		'label' => __('Opacité de l\'image de fond (de 1 à 0)', 'mythemelg'),
		'section' => 'background_image_selection',
		'settings' => 'background_image_opacity',
	)));

	$wp_customize->add_section('social_networks', array(
		'title' => __('Réseaux sociaux', 'mythemelg'),
		'priority' => 45,
	));
	$wp_customize->add_setting('twitter', array(
		'default' => 'https://www.twitter.com',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'twitter', array(
		'label' => __('Lien Twitter', 'mythemelg'),
		'section' => 'social_networks',
		'settings' => 'twitter',
	)));
	$wp_customize->add_setting('facebook', array(
		'default' => 'https://www.facebook.com',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook', array(
		'label' => __('Lien Facebook', 'mythemelg'),
		'section' => 'social_networks',
		'settings' => 'facebook',
	)));
	$wp_customize->add_setting('instagram', array(
		'default' => 'https://www.instagram.com',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram', array(
		'label' => __('Lien Instagram', 'mythemelg'),
		'section' => 'social_networks',
		'settings' => 'instagram',
	)));
	$wp_customize->add_setting('github', array(
		'default' => 'https://www.github.com',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'github', array(
		'label' => __('Lien Github', 'mythemelg'),
		'section' => 'social_networks',
		'settings' => 'github',
	)));



	$wp_customize->add_section('infos', array(
		'title' => __('Informations', 'mythemelg'),
		'priority' => 50,
	));

	$wp_customize->add_setting('address', array(
		'default' => '1234 Somewhere Road #87257 Nashville, TN 00000-0000',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address', array(
		'label' => __('Adresse', 'mythemelg'),
		'section' => 'infos',
		'settings' => 'address',
	)));

	$wp_customize->add_setting('phone', array(
		'default' => '00 00 00 00 00',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'phone', array(
		'label' => __('Téléphone', 'mythemelg'),
		'section' => 'infos',
		'settings' => 'phone',
	)));

	$wp_customize->add_setting('email', array(
		'default' => 'john.doe@gmail.com',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'email', array(
		'label' => __('Email', 'mythemelg'),
		'section' => 'infos',
		'settings' => 'email',
	)));
}

/*
 * Ajouter un nouveau type de contenu
 * Custom Post Type
 */

// Hook 'init' pour charger la fonction mytheme_post_types()
add_action('init', 'mytheme_post_types');

// Initialiser le type de contenu Cours
function mytheme_post_types() {
	$labels = array(
		'name' => __('Cours', 'mythemelg'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'thumbnail',
			'editor',
			'custom-fields',
			'post-formats',
			),
		'menu_position' => 5,
		'menu_icon' => 'dashicons-awards',
		'hierarchical' => false,
	);

	register_post_type('cours', $args);

	$labels = array(
		'name' => __('Produits', 'mythemelg'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'thumbnail',
			'editor',
			'custom-fields',
			'post-formats',
			),
		'menu_position' => 10,
		'menu_icon' => 'dashicons-archive',
		'hierarchical' => false,
	);

	register_post_type('products', $args);
}

// Hook 'init' pour charger la fonction mytheme_custom_taxonomies()
add_action( 'init', 'mytheme_custom_taxonomies', 0 );


//On crée 3 taxonomies personnalisées: Années, Profs et Matières.
function mytheme_custom_taxonomies() {

	// Taxonomie Années

	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_annee = array(
		'name'              			=> _x( 'Années', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Année', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher une année'),
		'all_items'        				=> __( 'Toutes les années'),
		'edit_item'         			=> __( 'Editer l année'),
		'update_item'       			=> __( 'Mettre à jour l année'),
		'add_new_item'     				=> __( 'Ajouter une nouvelle année'),
		'new_item_name'     			=> __( 'Valeur de la nouvelle année'),
		'separate_items_with_commas'	=> __( 'Séparer les Professeurs avec une virgule'),
		'menu_name'         => __( 'Année'),
	);

	$args_annee = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => false,
		'labels'            => $labels_annee,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'annees' ),
		'show_in_rest' => true,
	);

	register_taxonomy( 'annees', 'cours', $args_annee );

	// Taxonomie Profs

	$labels_profs = array(
		'name'                       => _x( 'Professeurs', 'taxonomy general name'),
		'singular_name'              => _x( 'Professeur', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher un Professeur'),
		'popular_items'              => __( 'Professeurs populaires'),
		'all_items'                  => __( 'Tous les Professeurs'),
		'edit_item'                  => __( 'Editer un Professeur'),
		'update_item'                => __( 'Mettre à jour un Professeur'),
		'add_new_item'               => __( 'Ajouter un nouveau Professeur'),
		'new_item_name'              => __( 'Nom du nouveau Professeur'),
		'separate_items_with_commas' => __( 'Séparer les Professeurs avec une virgule'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer un Professeur'),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés'),
		'not_found'                  => __( 'Pas de Professeurs trouvés'),
		'menu_name'                  => __( 'Professeurs'),
	);

	$args_profs = array(
		'hierarchical'          => false,
		'labels'                => $labels_profs,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'profs' ),
		'show_in_rest' => true,
	);

	register_taxonomy( 'profs', 'cours', $args_profs );

	// Taxonomie Matière

	$labels_cat_cours = array(
		'name'                       => _x( 'Matières', 'taxonomy general name'),
		'singular_name'              => _x( 'Matière', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une matière'),
		'popular_items'              => __( 'matières populaires'),
		'all_items'                  => __( 'Toutes les matières'),
		'edit_item'                  => __( 'Editer une matière'),
		'update_item'                => __( 'Mettre à jour une matière'),
		'add_new_item'               => __( 'Ajouter une nouvelle matière'),
		'new_item_name'              => __( 'Nom de la nouvelle matière'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une matière'),
		'choose_from_most_used'      => __( 'Choisir parmi les matières les plus utilisées'),
		'not_found'                  => __( 'Pas de matières trouvées'),
		'menu_name'                  => __( 'Matières'),
	);

	$args_cat_cours = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une matière standard
		'hierarchical'          => true,
		'labels'                => $labels_cat_cours,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'categories-cours' ),
		'show_in_rest' => true,
	);

	register_taxonomy( 'matiere', 'cours', $args_cat_cours );



	// Products

	$labels_categ = array(
		'name'              			=> _x( 'Catégories', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Catégorie', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher une catégorie'),
		'all_items'        				=> __( 'Toutes les catégories'),
		'edit_item'         			=> __( 'Editer la catégorie'),
		'update_item'       			=> __( 'Mettre à jour la catégorie'),
		'add_new_item'     				=> __( 'Ajouter une nouvelle catégorie'),
		'new_item_name'     			=> __( 'Valeur de la nouvelle catégorie'),
		'separate_items_with_commas'	=> __( 'Séparer les catégories avec une virgule'),
		'menu_name'         => __( 'Catégories'),
	);

	$args_categ = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => false,
		'labels'            => $labels_categ,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'categories' ),
		'show_in_rest' => true,
	);

	register_taxonomy( 'categories', 'products', $args_categ );

	// Taxonomie Profs

	$labels_warehouse = array(
		'name'                       => _x( 'Entrepôts', 'taxonomy general name'),
		'singular_name'              => _x( 'Entrepôt', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher un Entrepôt'),
		'all_items'                  => __( 'Tous les Entrepôts'),
		'edit_item'                  => __( 'Editer un Entrepôt'),
		'update_item'                => __( 'Mettre à jour un Entrepôt'),
		'add_new_item'               => __( 'Ajouter un nouveau Entrepôt'),
		'new_item_name'              => __( 'Nom du nouveau Entrepôt'),
		'separate_items_with_commas' => __( 'Séparer les Entrepôts avec une virgule'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer un Entrepôt'),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés'),
		'not_found'                  => __( 'Pas d\'entrepôts trouvés'),
		'menu_name'                  => __( 'Entrepôts'),
	);

	$args_warehouse = array(
		'hierarchical'          => false,
		'labels'                => $labels_warehouse,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'warehouse' ),
		'show_in_rest' => true,
	);

	register_taxonomy( 'warehouse', 'products', $args_warehouse );

}


/*
 * Sélectionner un semestre
 * Champs personnalisé pour le custom post type
 */

// Hook 'add_meta_boxes' pour charger mytheme_add_custom_metabox()
add_action('add_meta_boxes', 'mytheme_add_custom_metabox');

// Initialiser le champs personnalisé Semestre
function mytheme_add_custom_metabox() {
    $cours = ['cours'];
    foreach ($cours as $cour) {
        add_meta_box(
            'custom_metabox_id', // Unique ID
            'Semestre',  // Box title
            'mytheme_custom_metabox_html',  // Content callback, must be of type callable
            $cour  // Post type
        );
    }
}

// Formulaire du champs personnalisé - ici un menu déroulant avec 2 options possibles
function mytheme_custom_metabox_html($post) {
	$value = get_post_meta($post->ID, '_mymetabox_key', true);
    ?>
    <label for="mymetabox_field">A quel semestre a lieu ce cours?</label>
    <select name="mymetabox_field" id="mymetabox_field" class="postbox">
        <option value="">Selectionner le semestre...</option>
        <option value="semestre1" <?php selected($value, 'semestre1'); ?>>Semestre 1</option>
        <option value="semestre2" <?php selected($value, 'semestre2'); ?>>Semestre 2</option>
    </select>
    <?php
}

// Hook 'save_post' pour charger mytheme_save_postdata()
add_action('save_post', 'mytheme_save_postdata');

// Sauvegarder l'option sélectionnée dans le champs personnalisé Semestre
function mytheme_save_postdata($post_id) {
    if (array_key_exists('mymetabox_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_mymetabox_key',
            $_POST['mymetabox_field']
        );
    }
}

// Add the active class to the active link en nav menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
