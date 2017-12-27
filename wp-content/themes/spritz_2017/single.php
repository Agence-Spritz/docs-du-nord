<?php
	
// Ici on spécifie un template single pour l'affichage des Custom Post Type

$post = $wp_query->post;

if ( is_singular( 'films' ) ) {

include(TEMPLATEPATH . '/single-film.php'); } 

else {

include(TEMPLATEPATH . '/single-defaut.php');

}

?>