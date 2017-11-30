<?php 
/**
 * Front page : template pour la page d'accueil.
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
			
			<main id=primary class="content-area col-md-12">
			

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
						<div class="entry-content">
							
							
							<?php putRevSlider( 'accueil' ); ?>
							
							<section class="section-sp">
								<div class="heading-title center">
									<div class="col-md-1"></div>
										<div class="col-xs-12 col-md-10">
										<h1>Production de films documentaires</h1>
										<h4>Un nouveau regard sur le monde qui nous entoure</h4>
										
										<div class="separateur"></div>
										<?php the_field("zone_texte_1")?>
										</div>
									<div class="col-md-1"></div>
									<div class="clearfix"></div>
								</div>
							</section>
							
						</div>
					</article>
				    
				    <?php endwhile; else: ?>
						<div class="alert alert-warning" role="alert">
						  Aucun contenu ne semble exister au sein de la page que vous souhaitez consulter.
						</div>
				<?php endif; ?>
			
			</main>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<section class="portfolio-films">
				<div class="col-md-6" style="height: 400px; background-color: #ccc">
					<caption><h3>Titre</h3></caption>
				</div>
				<div class="col-md-6 no-padding">
					<div class="col-md-6 " style="height: 200px; background-color: #000">
						<caption><h3>Titre</h3></caption>
					</div>
					<div class="col-md-6 "style="height: 200px; background-color: #fe0000">
						<caption><h3>Titre</h3></caption>
					</div>
					<div class="col-md-12 " style="height: 200px; background-color: #F1F1F1">
						<caption><h3>Titre</h3></caption>
					</div>
				</div>
			</section>
		</div>
	</div>
	

<?php get_footer(); ?>