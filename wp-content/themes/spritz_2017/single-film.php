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
 
 // On récupére l'image à la une, si existante, sinon image par défaut
if ( have_posts() ) : while ( have_posts() ) : the_post();

	if ( has_post_thumbnail( $post->ID ) ) {
		$thumb_id = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
		$image_url =  $thumb_url[0];
	} else {
		$image_url = $GLOBALS['image_defaut'];
	}

?>

 	<!-- heading de la page, fond parallax -->
 	<div class="container-fluid">
		<div class="row">
			<div class="page-heading single" data-section="single" style="background-image: url(<?php echo $image_url; ?>);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				
					<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
							<div class="spritz-title-holder">
								<div class="spritz-container clearfix">
									<div class="spritz-container-inner">
										<div class="spritz-title-subtitle-holder">
											<h1><?php the_title(); ?></h1>
											<div class="category">
												<span><?php $categories = get_the_category();
												$categorie_name = $categories[0]->name; 
												if($categorie_name) { echo $categorie_name; }?>
												</span>
											</div>
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
				
				<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
					<div class="entry-content">
						
						<div class="col-md-8 m-t-20">
							<?php the_content(); ?>
							
							<div class="video_de_presentation <?php if ( !empty( get_the_content() ) ) { echo 'm-t-50'; } ?> m-b-50 m-m-b-0">
								<?php if(get_field('video_de_presentation')) { 
									echo '<iframe width="640" height="360" src="https://www.youtube.com/embed/'.get_field('video_de_presentation').'" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>';
										//the_field('video_de_presentation'); 
									} else {
										echo '<img class="img-responsive img-center" src="'.$image_url.'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
									}
									?>
							</div>
						</div>
						
						<div class="col-md-1"></div>
						
						<div class="col-md-3 m-m-b-50">
							<div class="heading-title left infos-film">
								<h3><?php the_title(); ?></h3>
								<h4><?php $categories = get_the_category();
										$categorie_name = $categories[0]->name; 
										if($categorie_name) { echo $categorie_name; } ?>
								</h4>
								<div class="separateur"></div>
								<p>
									<?php if(get_field('annee_de_realisation')) { ?><span class="titre-info"><?php pll_e("Année"); ?> :</span> <?php the_field('annee_de_realisation'); ?><br /><?php } ?>
									<?php if(get_field('realisateur')) { ?><span class="titre-info"><?php pll_e("Réalisateur"); ?> :</span> <?php the_field('realisateur'); ?><br /><?php } ?>
									<?php if(get_field('co-auteur')) { ?><span class="titre-info"><?php pll_e("Co-Auteur"); ?> :</span> <?php the_field('co-auteur'); ?><br /><?php } ?>
									<?php if(get_field('duree')) { ?><span class="titre-info"><?php pll_e("Durée"); ?> :</span> <?php the_field('duree'); ?><br /><?php } ?>
									<?php if(get_field('distribution')) { ?><span class="titre-info"><?php pll_e("Distribution"); ?> :</span> <?php the_field('distribution'); ?><?php } ?>
								</p>
								<hr>
								<div class="bloc-partage">
									<h5 class="spritz-footer-widget-title"><?php pll_e("Partager"); ?></h5>
									<a onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php the_title(); ?>&amp;p[url]=<?php the_permalink(); ?>&amp;p[images][0]=<?php echo $image_url; ?>&amp;p[summary]=', 'sharer', 'toolbar=0,status=0,width=620,height=280');" class="spritz-social-icon-widget-holder">
							            <i class="spritz-social-icon-widget fa fa-facebook fa-lg" aria-hidden="true"></i>        
							        </a>
							        <a class="spritz-social-icon-widget-holder" onclick="window.open('http://twitter.com/home?status=<?php the_permalink(); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');">
							            <i class="spritz-social-icon-widget fa fa-twitter"></i>
							        </a>
							        <a class="spritz-social-icon-widget-holder" onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
							            <i class="spritz-social-icon-widget fa fa-linkedin"></i>        
							        </a>
								</div>
							</div>
						</div>
						
						<div class="clearfix"></div>
						
						<?php if(get_field('visuel_2')) { ?>
						<!-- Section Slider -->
						<div class="col-md-12">
							<div class="titre-section">
								<h4><?php pll_e("En quelques images"); ?></h4>
								<div class="separateur"></div>
							</div>
							
							<div id="first-slider">
							    <div id="carousel-example-generic" class="carousel slide carousel-fade">
							        <!-- Indicators -->
							        <ol class="carousel-indicators">
							            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							            <?php if(get_field('visuel_2')) { ?><li data-target="#carousel-example-generic" data-slide-to="1"></li><?php } ?>
							            <?php if(get_field('visuel_3')) { ?><li data-target="#carousel-example-generic" data-slide-to="2"></li><?php } ?>
							            <?php if(get_field('visuel_4')) { ?><li data-target="#carousel-example-generic" data-slide-to="3"></li><?php } ?>
							            <?php if(get_field('visuel_5')) { ?><li data-target="#carousel-example-generic" data-slide-to="4"></li><?php } ?>
							        </ol>
							        <!-- Wrapper for slides -->
							        <div class="carousel-inner" role="listbox">
								        
								        <!-- Visuel n°1 -->
								        <div class="item active slide1" style="background-image: url(<?php echo $image_url; ?>);"></div>
								        
							            <!-- Visuel n°2 -->
							            <?php if(get_field('visuel_2')) { ?>
							            <div class="item slide2" style="background-image: url(<?php echo get_field('visuel_2'); ?>);"></div> 
							            <?php } ?>
							            
							            <!-- Visuel n°3 -->
							            <?php if(get_field('visuel_3')) { ?>
							            	<div class="item slide3" style="background-image: url(<?php echo get_field('visuel_3'); ?>);"></div>
							            <?php } ?>
							            
							            <!-- Visuel n°4 -->
							            <?php if(get_field('visuel_4')) { ?>
							            	<div class="item slide4" style="background-image: url(<?php echo get_field('visuel_4'); ?>);"></div>
							            <?php } ?>
							            
							            <!-- Visuel n°5 -->
							            <?php if(get_field('visuel_5')) { ?>
							            	<div class="item slide5" style="background-image: url(<?php echo get_field('visuel_5'); ?>);"></div>
							            <?php } ?>
							    
							        </div>
							        <!-- End Wrapper for slides-->
							        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							            <i class="fa fa-angle-left"></i><span class="sr-only"><?php pll_e("Précédent"); ?></span>
							        </a>
							        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							            <i class="fa fa-angle-right"></i><span class="sr-only"><?php pll_e("Suivant"); ?></span>
							        </a>
							    </div>
							</div>
						</div>
						<?php } ?>
						
					</div>
				</article>
			</main>
			
		</div>
	</div>
	
	<?php if (get_field('equipe') || get_field('partenaires/credits') || get_field('presse') || get_field('festival') )  { ?>
	<!-- Section + d'infos -->
	<section class="content-area grise">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="col-md-12">
						<div class="titre-section">
							<h4><?php pll_e("Pour en savoir plus"); ?></h4>
							<div class="separateur"></div>
						</div>
						
							<!-- Nav tabs -->
							<div class="plus-dinfos table-onglets-ligne">
                                <ul class="nav nav-tabs" role="tablist">
                                    <?php if(get_field('equipe')) { ?><li role="presentation" <?php if(get_field('equipe')) { echo 'class="active"'; } ?>><a href="#equipe" aria-controls="equipe" role="tab" data-toggle="tab"><?php pll_e("Equipe"); ?></a></li><?php } ?>
                                    <?php if(get_field('partenaires/credits')) { ?><li role="presentation" <?php if(!get_field('equipe')) { echo 'class="active"'; } ?>><a href="#partenaires" aria-controls="partenaires" role="tab" data-toggle="tab"><?php pll_e("Partenaires / Crédits"); ?></a></li><?php } ?>
                                    <?php if(get_field('presse')) { ?><li role="presentation"><a href="#presse" aria-controls="presse" role="tab" data-toggle="tab"><?php pll_e("Presse"); ?></a></li><?php } ?>
                                    <?php if(get_field('festival')) { ?><li role="presentation"><a href="#festivals" aria-controls="festivals" role="tab" data-toggle="tab"><?php pll_e("Festivals"); ?></a></li><?php } ?>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane <?php if(get_field('equipe')) { echo 'active'; } ?>" id="equipe"><?php the_field('equipe'); ?></div>
                                    <div role="tabpanel" class="tab-pane <?php if(!get_field('equipe')) { echo 'active'; } ?>" id="partenaires"><?php the_field('partenaires/credits'); ?></div>
                                    <div role="tabpanel" class="tab-pane" id="presse"><?php the_field('presse'); ?></div>
                                    <div role="tabpanel" class="tab-pane" id="festivals"><?php the_field('festival'); ?></div>
                                </div>
							</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	
	<?php endwhile; else: ?>
		    <div class="alert alert-warning" role="alert">
			  <?php echo $GLOBALS['message_alerte']; ?>
			</div>
	<?php endif; ?>

<?php get_footer(); ?>