// Exemple de modification de la variable Less @jaune au clic sur un bouton
jQuery( "#boutton" ).click(
	function() {
		less.modifyVars({ '@jaune': '#000000' });
	}
);

jQuery(document).ready(function() {
	jQuery('#recherche').hide();
})


function zone_search() {
    var x = document.getElementById("recherche");
    
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
