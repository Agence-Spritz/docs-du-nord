<?php 
	
// On crée un numéro de version
define('SPRITZ_VERSION', '1.0.0'); 


	

//---------------------------------------------
// Déclaration des feuilles de styles et des JS 
//---------------------------------------------	

function spritz_scripts() {
	
	// Feuilles de style
	
	// 1- feuille de style principale (dépendante de Bootstrap, donc bootstrap charge en 1er : Prime sur Bootstrap et sur LESS
	wp_enqueue_style('spritz_custom' , get_template_directory_uri(). '/style.css', array('spritz_bootstrap_core', 'less'), SPRITZ_VERSION, 'all');
	
	// 2- Appel de LESS - Prime sur Bootstrap, fonctionne grâce au plugin "wp-less"
	// Voir fonctionnement ici https://github.com/oncletom/wp-less/blob/master/doc/Common-Usage.md
	wp_enqueue_style('less' , get_template_directory_uri(). '/css/less/styles.less', array('spritz_bootstrap_core'), SPRITZ_VERSION, 'all');

	
	// 3- feuille de style Bootstrap
	wp_enqueue_style('spritz_bootstrap_core' , get_template_directory_uri(). '/bootstrap-3.3.6-dist/css/bootstrap.min.css', array(), SPRITZ_VERSION, 'all');
	
	// feuille de style de Awsome fonts
	wp_enqueue_style('spritz_fonts' , get_template_directory_uri(). '/font-awesome-4.7.0/css/font-awesome.min.css', array(), SPRITZ_VERSION, 'all');
	
	
	
	// Scripts
	
	// On lie le fichier de script JS de LESS - plus utilisé grâce au plugin "wp-less"
	//wp_enqueue_script('spritz_less_script' , get_template_directory_uri(). '/js/less.js', array(), SPRITZ_VERSION, true);
	
	// On lie le fichier de script JS de Bootstrap
	wp_enqueue_script('spritz_boostrap_script' , get_template_directory_uri(). '/bootstrap-3.3.6-dist/js/bootstrap.min.js', array('jquery'), SPRITZ_VERSION, true);
	
	// On lie le fichier de script JS personnalisé (true signifie que l'on charge en fin de page, il dépend de bootstrap js et sera chargé en dernier)
	wp_enqueue_script('spritz_scriptperso' , get_template_directory_uri(). '/js/spritz.js', array('jquery','spritz_boostrap_script'), SPRITZ_VERSION, true);
	
} 

add_action('wp_enqueue_scripts', 'spritz_scripts');



// 2- Appel de LESS - Prime sur Bootstrap - plus utilisé grâce au plugin "wp-less"

/*
function childtheme_scripts() {
	wp_enqueue_style('less' , get_template_directory_uri(). '/css/less/styles.less', array('spritz_bootstrap_core'), SPRITZ_VERSION, 'all');
	
	add_filter('style_loader_tag', 'my_style_loader_tag_function');
}
add_action('wp_enqueue_scripts','childtheme_scripts', 1);
*/


// Modification de la balise REL de LESS

/*
function my_style_loader_tag_function($tag){ 
  return preg_replace("/='stylesheet' id='less-css'/", "='stylesheet/less' id='less-css'", $tag);
}
*/



//---------------------------------------------
// Création des utilitaires 
//---------------------------------------------	

function spritz_setup() {
	
	// prise en charge des images à la une
	add_theme_support('post-thumbnails');
	
	// Enlève le générateur de version de WP
	remove_action('wp_head','wp_generator');
	
	// Enlève les guillemets à la française
	remove_action('the_content', 'wptexturize');
	
	// Gestion de la balise meta title via Wordpress
	add_theme_support('title-tag'); 
	
	// utilisation de la librairie de gestion des menus selon Bootstrap
	require_once get_template_directory() . '/includes/wp-bootstrap-navwalker.php';
	
	// Activer la gestion des menus
	register_nav_menus(array('primary' => 'principal', 'secondary' => 'second'));
	
	// Activation des widget et création d'une sidebar
	register_sidebar(array('name' => __( 'Sidebar principale', 'theme-slug' ), 'id' => 'sidebar-1',));

}
add_action('after_setup_theme', 'spritz_setup');




/************************************************
*	Suppression rubrique A propos *
************************************************/

function edit_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo'); // Logo
    $wp_admin_bar->remove_menu('about'); // A propos de WordPress
    $wp_admin_bar->remove_menu('wporg'); // WordPress.org
    $wp_admin_bar->remove_menu('documentation'); // Documentation
    $wp_admin_bar->remove_menu('support-forums');  // Forum de support
    $wp_admin_bar->remove_menu('feedback'); // Remarque
    $wp_admin_bar->remove_menu('view-site'); // Aller voir le site
	$wp_admin_bar->remove_menu('updates'); // Mises à jour
}
add_action('wp_before_admin_bar_render', 'edit_admin_bar');


/************************************************
*	Suppression rubrique d'aide *
************************************************/

function hide_contextual_help() {
   
    echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
          </style>';
    
}
add_action('admin_head', 'hide_contextual_help');

/************************************************
*	Masquer sous menus pour les non admin *
************************************************/

global $current_user;
get_currentuserinfo();
if ($current_user->user_level < 10 ) {

function remove_links_tab_menu_pages() {
    remove_menu_page('link-manager.php');
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('tools.php');
}

add_action( 'admin_menu', 'remove_links_tab_menu_pages' );
}

/************************************************
*	Intégration du logo en haut du tableau de bord
************************************************/

if ( is_admin()) {

	add_filter('contextual_help','custom_page_help');
	 function custom_page_help() {
		 $url_admin = get_stylesheet_directory_uri();
	 	echo "<img style=\"margin-top: 10px;\" src=\"".$url_admin."/images/logo-admin-sites.png\" alt=\"\" />";
	 }
}
 

/************************************************
*	Widget de bienvenue *
************************************************/

   function example_dashboard_widget_function() {
        echo "Bonjour, <br /><br />
		
		Bienvenue sur le panneau d'administration de votre site...<br />
		Ce panneau d'administration vous permet de mettre à jour le contenu des différentes pages et rubriques de votre site.<br />
		Vous pourrez aisément modifier leurs textes, images et bien d'autres choses encore... <br /><br />
		
		Pour modifier le contenu des pages, il vous faut aller dans l'onglet 'Pages', sélectionner celle de votre choix et gérer son contenu grâce à 		l'éditeur graphique.<br /><br />
		Nous vous souhaitons une bonne utilisation de votre site.<br /><br />
		Sébastien (Agence Spritz)";}
function example_add_dashboard_widgets() {
    wp_add_dashboard_widget('example_dashboard_widget', 'Bienvenue', 'example_dashboard_widget_function');}
add_action('wp_dashboard_setup', 'example_add_dashboard_widgets' );


?>