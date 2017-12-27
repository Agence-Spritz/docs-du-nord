<?php
/**
 * Le footer du thème.
 *
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spritz 2017
 */
 ?>
		</div>
		
			<footer>
				
				<div class="spritz-footer-top-holder">
					<div class="spritz-footer-top spritz-footer-top-aligment-left">
						
						<div class="container" itemscope="itemscope" itemtype="http://data-vocabulary.org/Organization">
							<div class="spritz-container-inner">
				
								<div class=" clearfix">
									<div class="col-md-3">
										<div class="spritz-column-inner">
											<div class="widget edgtf-footer-column-1 widget_text">
												<h5 class="spritz-footer-widget-title"><?php pll_e("Contactez-nous"); ?></h5>
												<div class="textwidget">
													<span itemprop="name"><?php echo $GLOBALS['organisation']; ?></span><br />
													<?php pll_e("Adresse"); ?> : 
													<span itemprop="address" itemtype="http://data-vocabulary.org/Address">
														<span itemprop="streetAddress"><?php echo $GLOBALS['adresse']; ?></span><br />
														<span itemprop="postalCode"><?php echo $GLOBALS['cp']; ?></span> <span itemprop="addressLocality"><?php echo $GLOBALS['ville']; ?></span>
													</span><br />
													<?php pll_e("Tél."); ?>: <span itemprop="telephone"><?php echo $GLOBALS['tel']; ?></span> <br /><br />
													<?php pll_e("Email"); ?> : <span itemprop="email"><?php echo $GLOBALS['mail']; ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="spritz-column-inner">
											<div class="widget edgtf-footer-column-1 widget_text">
												<h5 class="spritz-footer-widget-title"><?php pll_e("Suivez-nous"); ?></h5>
												<a class="spritz-social-icon-widget-holder" href="<?php echo $GLOBALS['lien_fb']; ?>" target="_blank">
										            <i class="spritz-social-icon-widget fa fa-facebook fa-lg" aria-hidden="true"></i>        
										        </a>
										        <a class="spritz-social-icon-widget-holder" href="<?php echo $GLOBALS['lien_twitter']; ?>" target="_blank">
										            <i class="spritz-social-icon-widget fa fa-twitter"></i>
										        </a>
										        <a class="spritz-social-icon-widget-holder" href="<?php echo $GLOBALS['lien_instagram']; ?>" target="_blank">
										            <i class="spritz-social-icon-widget fa fa-instagram"></i>        
										        </a>
										        <a class="spritz-social-icon-widget-holder" href="<?php echo $GLOBALS['lien_linkedin']; ?>" target="_blank">
										            <i class="spritz-social-icon-widget fa fa-linkedin"></i>        
										        </a>
										        <a class="spritz-social-icon-widget-holder" href="<?php echo $GLOBALS['lien_youtube']; ?>" target="_blank">
										            <i class="spritz-social-icon-widget fa fa-youtube"></i>        
										        </a>
										        
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="spritz-column-inner">
											<div class="widget edgtf-footer-column-1 widget_text">
												<h5 class="spritz-footer-widget-title"><?php pll_e("A propos"); ?></h5>
												<div class="textwidget">
													<?php wp_nav_menu( array( 'menu' => 'Menu footer', 'theme_location' => 'second' ) ); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 edgtf-column">
										<div class="spritz-column-inner">
											<div class="widget edgtf-footer-column-1 widget_text">
												<h5 class="spritz-footer-widget-title"><?php pll_e("S'inscrire à la newsletter"); ?></h5>
												<div class="textwidget">
													<?php pll_e("Inscrivez-vous pour recevoir automatiquement nos dernières actualités et publications."); ?>
													<div class="form-newsletter">
													<?php 
														if(get_locale() == 'en_GB') {
															
															$form_widget = new \MailPoet\Form\Widget();
															echo $form_widget->widget(array('form' => 2, 'form_type' => 'php'));
														
														} else {
															
															$form_widget = new \MailPoet\Form\Widget();
															echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
															
														} 
													?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="spritz-footer-bottom-holder">
					<div class="spritz-footer-bottom-holder-inner">
						<div class="edgtf-container">
							<div class="spritz-container-inner">
								<div class="spritz-column-inner">
									<div id="text-4" class="widget widget_text">			
										<div class="textwidget">Copyright © <?php echo $GLOBALS['organisation']; ?> 2017 | <?php pll_e("Réalisation"); ?> <a href="https://www.agence-spritz.com" title="Création de site internet à Lille" target="_blank">Agence Spritz</a></div>
									</div>
								</div>				
							</div>
				
						</div>
					</div>
				</div>
			
			</footer>

	</div>
    <?php wp_footer(); ?>
  </body>
  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $GLOBALS['id_ga']; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $GLOBALS['id_ga']; ?>');
</script>

</html>