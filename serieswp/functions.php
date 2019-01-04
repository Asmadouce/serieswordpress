<?php

/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/
//https://wpmarmite.com/snippet/creer-custom-post-type/     SITE TUTO POUR FAIRE UN CPT
function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Séries TV', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Série TV', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Mes séries Asmaoui'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes mes séries TV'),
		'view_item'           => __( 'Voir les séries TV'),
		'add_new_item'        => __( 'Ajouter une nouvelle série TV'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la séries TV'),
		'update_item'         => __( 'Modifier la séries TV'),
		'search_items'        => __( 'Rechercher une série TV'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Séries TV'),
		'description'         => __( 'Tous sur séries TV'),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-video-alt3',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title','editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'series-tv'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'seriestv', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );
//-------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------

add_action( 'init', 'wpm_add_taxonomies', 0 );


function wpm_add_taxonomies() {
		
	// Catégorie de série

	$labels_cat_serie = array(
		'name'                       => _x( 'Genre de ma série', 'taxonomy general name'),
		'singular_name'              => _x( 'Genre de ma série', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher mon genre'),
		'popular_items'              => __( 'Mes kiffs'),
		'all_items'                  => __( 'Tous les genres'),
		'edit_item'                  => __( 'Editer un genre'),
		'update_item'                => __( 'Mettre à jour un genre'),
		'add_new_item'               => __( 'Ajoute ton nouveau genre'),
		'new_item_name'              => __( 'Nom du nouveau genre'),
		'add_or_remove_items'        => __( 'Ajoute ou supprime ton nouveau genre'),
		'choose_from_most_used'      => __( 'Choisir parmi les genres les plus utilisées'),
		'not_found'                  => __( 'Pas de genres trouvés'),
		'menu_name'                  => __( 'Genres de série'),
	);

	$args_cat_serie = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
		'hierarchical'          => true,
		'labels'                => $labels_cat_serie,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'categories-series' ),
	);

    register_taxonomy( 'categoriesseries', 'seriestv', $args_cat_serie );


}

//--------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------
function theme_enqueue_styles() 
{
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
//----------------------------------------------------------------------------------------------------------------
function theme_styles(){

    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/library/fontawesome/css/all.css' );
    wp_enqueue_style( 'bootstrap_file', get_stylesheet_directory_uri() . '/library/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
    
    }
    add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_scripts(){

    global $wp_scripts;
    
    //wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/jQuery.js', null, true );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/library/bootstrap/js/bootstrap.bundle.min.js', null, true );
    wp_enqueue_script( 'js', get_stylesheet_directory_uri() . '/js/script.js');
    
    }   
    add_action( 'wp_enqueue_scripts', 'theme_scripts');

//----------------------------------------------------------------------------------------------------------------

 add_action( 'widgets_init', 'child_register_sidebar' );

function child_register_sidebar(){
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}

//----------------------------------------------------------------------------------------------------------------
function register_my_menu() {
   register_nav_menu('header-menu',__( 'nav' ));
}

add_action( 'init', 'register_my_menu' );