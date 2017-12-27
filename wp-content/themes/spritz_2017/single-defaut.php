<?php 
/**
 * The template for displaying all single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spritz 2017
 *
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

 get_header(); 
  
 ?>
 
 	<!-- heading de la page, fond parallax -->
 	<div class="container-fluid">
		<div class="row">
			<div class="page-heading" data-section="home" style="background-image: url(<?php echo $GLOBALS['image_defaut']; ?>);" data-stellar-background-ratio="0.5">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
							<div class="spritz-title-holder">
								<div class="spritz-container clearfix">
									<div class="spritz-container-inner">
										<div class="spritz-title-subtitle-holder">
											<h1><?php the_title(); ?></h1>
										</div>
							  		</div>
								</div>
							</div>
					</article>
					
				<?php endwhile;  endif;  ?>
			</div>
			
		</div>
	</div>
	
	<!-- Corps de la page -->
	<div class="container">
		<div class="row">
			<main class="content-area col-md-12">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</article>
					
				<?php endwhile; else: ?>
					    <div class="alert alert-warning" role="alert">
						  <?php echo $GLOBALS['message_alerte']; ?>
						</div>
				<?php endif; ?>
						
			</main>
			
		</div>
	</div>

<?php get_footer(); ?>