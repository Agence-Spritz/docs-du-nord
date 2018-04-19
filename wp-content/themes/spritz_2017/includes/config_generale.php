<?php // Ici on définit les variables globales
	
$GLOBALS['lien_fb'] = 'https://www.facebook.com/DocsDuNord/';
$GLOBALS['lien_instagram'] = "https://www.instagram.com/lesdocsdunord/";
$GLOBALS['lien_twitter'] = "https://twitter.com/DocsduNord";
$GLOBALS['lien_linkedin'] = "https://www.linkedin.com/company/lesdocsdunord/";
$GLOBALS['lien_youtube'] = "https://www.youtube.com/channel/UCUtUiFZhmSsKwTAMIzjHzKA";

$GLOBALS['organisation'] = "Les Docs du Nord";
$GLOBALS['adresse'] = "99C Bvd Constantin Descat";
$GLOBALS['cp'] = "59200";
$GLOBALS['ville'] = "Tourcoing";
$GLOBALS['tel'] = "+33(0)3 20 16 90 06";
$GLOBALS['mail'] = "contact@docsdunord.fr";

if(get_locale() == 'en_GB') {
	$GLOBALS['titre_principal'] = "Production of documentary films";
} else {
	$GLOBALS['titre_principal'] = "Production de films documentaires";
}
	

// Image par defaut en fond de tétière
$GLOBALS['image_defaut'] = get_template_directory_uri().'/images/fond-pages.jpg';

// ID Google Analytics
$GLOBALS['id_ga'] = "UA-2653702-66";

// Si site multilingue : 0 ou 1
$GLOBALS['site_multilingue'] = 1;


if(get_locale() == 'en_GB') {
	$GLOBALS['message_alerte'] = "No content appears to exist within the page you wish to view.";
} else {
	$GLOBALS['message_alerte'] = "Aucun contenu ne semble exister au sein de la page que vous souhaitez consulter.";
}
	
?>