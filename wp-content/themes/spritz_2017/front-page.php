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
 
 	<!-- 1er paragraphe -->
 	<div class="container">
		<div class="row">
			
			<main id=primary class="col-md-12">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
						<div class="entry-content">

							<?php if(get_locale() == 'en_GB') { putRevSlider( 'accueil-en' ); } else { putRevSlider( 'accueil' ); } ?>
							
							<section class="section-sp">
								<div class="heading-title center">
									<div class="col-md-1"></div>
										<div class="col-xs-12 col-md-10">
											<h1><?php pll_e("Production de films documentaires"); ?></h1>
											<h4><?php pll_e("Un nouveau regard sur le monde qui nous entoure"); ?></h4>
										
											<div class="separateur"></div>
											<?php the_field("zone_texte_1"); ?>
										</div>
									<div class="col-md-1"></div>
									<div class="clearfix"></div>
								</div>
							</section>
							
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
	
	<!-- Portfolio -->
	<div class="container-fluid">
		<div class="row">
			<section class="portfolio-films">
				
					<?php  $hauteur = '600px';
						$custom_posts = new WP_Query(); $args = array( 'post_type'=> 'films', 'posts_per_page'=> 1, 'order'=>'DESC'); $custom_posts->query($args);
						if ( $custom_posts->have_posts() ) : while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
							$image_link = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
							$categories = get_the_category();
							$categorie_name = $categories[0]->name;
 
								echo '<div class="col-md-6 item-portfolio" itemscope itemtype="http://schema.org/Movie" style="height: '.$hauteur.'; background-image: url('.$image_link[0].');">';
								echo '<a href="'.get_permalink().'" itemprop="url" class="portfolio-link"></a>';
									echo '<div class="overlay"><div class="overlay-inner">';
										echo '<div class="item-text-holder">';
											echo '<h3 class="item-title" itemprop="name">'. get_the_title().'</h3>';
											echo '<div class="category-holder" itemprop="genre"><span>'.$categorie_name.'</span></div>';
										echo '</div>';
									echo '</div></div>';
								echo '</div>';
						endwhile; else: endif; wp_reset_query(); 
					?>
				
				<div class="col-md-6 no-padding">
					
						<?php  $hauteur = '300px';
							$custom_posts = new WP_Query(); $args = array( 'post_type'=> 'films', 'posts_per_page'=> 1, 'offset'=> 1, 'order'=>'DESC'); $custom_posts->query($args);
						if ( $custom_posts->have_posts() ) : while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
							$image_link = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
							$categories = get_the_category();
							$categorie_name = $categories[0]->name;
							
								echo '<div class="col-md-6 item-portfolio" itemscope itemtype="http://schema.org/Movie" style="height: '.$hauteur.'; background-image: url('.$image_link[0].');">';
									echo '<a href="'.get_permalink().'" itemprop="url" class="portfolio-link"></a>';
									echo '<div class="overlay"><div class="overlay-inner">';
										echo '<div class="item-text-holder">';
											echo '<h3 class="item-title" itemprop="name">'. get_the_title().'</h3>';
											echo '<div class="category-holder" itemprop="genre"><span>'.$categorie_name.'</span></div>';
										echo '</div>';
									echo '</div></div>';
								echo '</div>';
						endwhile; else: endif; wp_reset_query(); 
						?>
					
						<?php  $hauteur = '300px';
							$custom_posts = new WP_Query(); $args = array( 'post_type'=> 'films', 'posts_per_page'=> 1, 'offset'=> 2, 'order'=>'DESC'); $custom_posts->query($args);
						if ( $custom_posts->have_posts() ) : while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
							$image_link = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
							$categories = get_the_category();
							$categorie_name = $categories[0]->name;
							
								echo '<div class="col-md-6 item-portfolio" itemscope itemtype="http://schema.org/Movie" style="height: '.$hauteur.'; background-image: url('.$image_link[0].');">';
									echo '<a href="'.get_permalink().'" itemprop="url" class="portfolio-link"></a>';
									echo '<div class="overlay"><div class="overlay-inner">';
										echo '<div class="item-text-holder">';
											echo '<h3 class="item-title" itemprop="name">'. get_the_title().'</h3>';
											echo '<div class="category-holder" itemprop="genre"><span>'.$categorie_name.'</span></div>';
										echo '</div>';
									echo '</div></div>';
								echo '</div>';
						endwhile; else: endif; wp_reset_query(); 
						?>
					
						<?php  $hauteur = '300px';
							$custom_posts = new WP_Query(); $args = array( 'post_type'=> 'films', 'posts_per_page'=> 1, 'offset'=> 3, 'order'=>'DESC'); $custom_posts->query($args);
						if ( $custom_posts->have_posts() ) : while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
							$image_link = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
							$categories = get_the_category();
							$categorie_name = $categories[0]->name;
							
								echo '<div class="col-md-12 item-portfolio" itemscope itemtype="http://schema.org/Movie" style="height: '.$hauteur.'; background-image: url('.$image_link[0].');">';
									echo '<a href="'.get_permalink().'" itemprop="url" class="portfolio-link"></a>';
									echo '<div class="overlay"><div class="overlay-inner">';
										echo '<div class="item-text-holder">';
											echo '<h3 class="item-title" itemprop="name">'. get_the_title().'</h3>';
											echo '<div class="category-holder" itemprop="genre"><span>'.$categorie_name.'</span></div>';
										echo '</div>';
									echo '</div></div>';
								echo '</div>';
						endwhile; else: endif; wp_reset_query(); 
						?>
				</div>
				
			</section>
		</div>
	</div>
	
	<!-- Le monde mis en lumière -->
	<div class="container">
		<div class="row">
			<section class="mise-en-lumiere section-standard">
				
				<div class="col-md-6 m-t-50 m-b-50 m-m-t-15 m-m-b-35 no-padding">
					<div class="col-md-9 ">
						<div class="heading-title left">
							<h2><?php pll_e("Le monde mis en lumière"); ?></h2>
							<h4><?php pll_e("+ de 30 films et documentaires"); ?></h4>
							<div class="separateur"></div>
						</div>
					</div>
					<div class="col-md-3"><img class="img-responsive img-center" src="<?php echo get_template_directory_uri(); ?>/images/projecteur.png" title="<?php pll_e('Docs du Nord met le monde en lumière'); ?>" alt="<?php pll_e('Docs du Nord met le monde en lumière'); ?>" /></div>
						
					<div class="clearfix"></div>
						
					<div class="col-md-12 m-t-25">
						<?php the_field("zone_texte_2")?>
					</div>
				</div>
				
				<div class="col-md-6">
					<?php if( get_field('triptyque_dimages') ): ?>

						<img class="img-responsive img-center" src="<?php the_field('triptyque_dimages'); ?>" title="<?php pll_e('Découvrez notre catalogue de films documentaires'); ?>" alt="<?php echo $GLOBALS['organisation']; ?> - <?php echo $GLOBALS['titre_principal']; ?>" />
					
					<?php endif; ?>
				</div>
				
				<div class="col-md-12 m-t-40 text-center">
					<a href="<?php bloginfo('wpurl');?><?php if(get_locale() == 'en_GB') { echo '/en/documentary-films/'; } else { echo '/films-documentaires/'; }  ?>" class="btn-rect-court btn-jaune btn-center"><?php pll_e("Découvrir notre catalogue"); ?></a>
				</div>
				<div class="clearfix"></div>
				
			</section>
		</div>
		
	</div>

<?php get_footer(); ?>