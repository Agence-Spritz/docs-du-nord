<?php
/**
 * Le header du thème.
 *
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spritz 2017
 */
 ?><!doctype html>
<html lang="fr">
  	<head>
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    
	    <link href="https://fonts.googleapis.com/css?family=Six+Caps" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Six+Caps" rel="stylesheet">
	    
	<?php wp_head(); ?>
	</head>
  
  	<body <?php body_class(); ?>>
	  	
	  	<div id="page" class="site">
		  	
		  	<header>
			  	
			  	<div id="nav">
					<nav class="menu1 navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
					    <div class="container-fluid">
					      	<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					      	<div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="navbar-brand" href="<?php bloginfo('home');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" title="Docs du Nord - Production de films documentaires" alt="Docs du Nord - Production de films documentaires" /></a>
						    </div>
					      <?php $lien_fb = "https://www.facebook.com/LesDocsDuNord/?ref=br_tf";
						      	$lien_insta = "";
						      
						      // Adaptation du menu WP à Boostrap avec l'utilisation du navwalker 
					            wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                'container_class'   => 'collapse navbar-collapse',
					                'container_id'      => 'bs-example-navbar-collapse-1',
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s <div class="search-div"><a onclick="zone_search()"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a><a href="'.$lien_fb.'" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a><a href="'.$lien_insta.'" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div></ul>',
					                'walker'            => new WP_Bootstrap_Navwalker())
					            );
					        ?>
						        <div id="recherche" class="col-md-4 zone-recherche">
							        <form id="main-search" method="get" action="">
								        <div class="input-group">
									      <input type="text" name="s" class="form-control" placeholder="Rechercher..." aria-label="Rechercher...">
									      <span class="input-group-btn">
									        <button class="btn btn-secondary btn-jaune" type="button">Go!</button>
									      </span>
									    </div>
							        </form>	
						        </div>
					    </div>
					</nav>
				</div><!-- /.navbar -->
						  	
		  	</header>
		  
	  		<div id="content" class="site-content">
		  		