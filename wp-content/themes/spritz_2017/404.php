<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Spritz 2017
 */
 
 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

 get_header(); 
  
 ?>
 
 	<!-- heading de la page, fond parallax -->
 	<div class="container-fluid">
		<div class="row">
			<div class="page-heading page-404" data-section="home" style="background-image: url(<?php echo $GLOBALS['image_defaut']; ?>);" data-stellar-background-ratio="0.5">
			
				<article id="post">
						<div class="spritz-title-holder">
							<div class="spritz-container clearfix">
								<div class="spritz-container-inner">
									<div class="spritz-title-subtitle-holder">
										<h1>404 - <?php pll_e("Page non trouvée"); ?></h1>
										<p><?php pll_e("La page que vous cherchez ne semble pas exister..."); ?></p>
										<div class="col-md-12 m-t-40 text-center">
											<a href="<?php bloginfo('home');?>" class="btn-rect-court btn-jaune btn-center"><?php pll_e("Retour à l'accueil"); ?></a>
										</div>
									</div>
						  		</div>
							</div>
						</div>
				</article>
					
			</div>
			
		</div>
	</div>
	
<?php get_footer(); ?>