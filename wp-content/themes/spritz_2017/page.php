<?php 
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
 
 // On récupére l'image à la une, si existante, sinon image par défaut
if ( have_posts() ) : while ( have_posts() ) : the_post();

	if ( has_post_thumbnail( $post->ID ) ) {
		$thumb_id = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
		$image_url =  $thumb_url[0];
	} else {
		$image_url = $GLOBALS['image_defaut'];
	}

endwhile; endif;
?>

 
 	<!-- heading de la page, fond parallax -->
 	<div class="container-fluid">
		<div class="row">
			<div class="page-heading" data-section="home" style="background-image: url(<?php echo $image_url; ?>);" data-stellar-background-ratio="0.5">
			
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