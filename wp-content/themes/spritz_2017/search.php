<?php 
/**
 * The template for displaying search results pages.
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
			<div class="page-heading" data-section="home" style="background-image: url(<?php echo get_template_directory_uri().'/images/fond-recherche.jpg'; ?>);" data-stellar-background-ratio="0.5">
			
					<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
							<div class="spritz-title-holder">
								<div class="spritz-container clearfix">
									<div class="spritz-container-inner">
										<div class="spritz-title-subtitle-holder">
											<h1><?php pll_e("Recherche"); ?></h1>
										</div>
							  		</div>
								</div>
							</div>
					</article>
					
			</div>
			
		</div>
	</div>
	
	<!-- Corps de la page -->
	<div class="container">
		<div class="row">
			<main class="content-area col-md-12">
				
				<div class="heading-title left infos-film">
					<h3><?php pll_e("Résultats de votre recherche"); ?></h3>
					
					<div class="separateur"></div>
					
				</div>

				<div class="col-md-12">
					
					<ol>
				
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
						
					<?php endwhile; else: ?>
						    <div class="alert alert-warning" role="alert">
							  <?php echo $GLOBALS['message_alerte']; ?>
							</div>
					<?php endif; ?>
					
					</ol>
				</div>
						
			</main>
			
		</div>
	</div>
	
<?php get_footer(); ?>