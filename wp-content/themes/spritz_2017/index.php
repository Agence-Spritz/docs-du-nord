<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spritz 2017
 *
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

 get_header(); ?>
 
 	<div class="container">
		<div class="row">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					  
				    <div class="col-md-12">
				      <h1><?php the_title(); ?></h1>
				      <p><?php the_content(); ?></p>
				    </div>
				    
				    <?php endwhile; else: ?>
					    <div class="alert alert-warning" role="alert">
						  Aucun contenu ne semble exister au sein de la page que vous souhaitez consulter.
						</div>
				<?php endif; ?>
			
		</div>
	</div>

<?php get_footer(); ?>