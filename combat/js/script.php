
<script type="text/javascript">
		function actu() {
		   $.ajax({
		      type: "GET",
		      url: "js/finDuTour.php"
		   }).done(function (html) {
		      $('#pousser').html(html); // Retourne dans #maDiv le contenu de ta page
		      //setTimeout(actu, 1000);
		   });
		} 
		function attente() {
		   $.ajax({
		      type: "GET",
		      url: "js/attente.php"
		   }).done(function (html) {
		      $('#pousser').html(html); // Retourne dans #maDiv le contenu de ta page
		      //setTimeout(actu, 1000);
		   });
		}   

		function attenteDeux() {
		   $.ajax({
		      type: "GET",
		      url: "js/attenteDeux.php"
		   }).done(function (html) {
		      $('#pousser').html(html); // Retourne dans #maDiv le contenu de ta page
		      //setTimeout(actu, 1000);
		   });
		}   

		function combat() {
		   $.ajax({
		      type: "GET",
		      url: "js/combatActuel.php"
		   }).done(function (html) {
		      $('#info').html(html); // Retourne dans #maDiv le contenu de ta page
		   });
		   $.ajax({
		      type: "GET",
		      url: "js/combatActuelEnnemi.php"
		   }).done(function (html) {
		      $('#infoEnnemi').html(html); // Retourne dans #maDiv le contenu de ta page
		      setTimeout(combat, 3000);
		   });
		}  
		combat();    



function choix() {
	$('#choix').html('<div id="attaqueUne" onClick="finDuTour();"></div>');
	$('#choix').append('<div id="attaqueDeux" onClick="finDuTourDeux();"></div>');
	$('#attaqueUne').html('<h3><?PHP echo $listePokemon[0]["attaqueUne"]."</br> (Dégats : ".$listeAttaque[0][3].")" ?></h3>');
	$('#attaqueDeux').html('<h3><?PHP echo $listePokemon[0]["attaqueDeux"]; ?></h3>');
}


$('#choixUn').click(function() {
	choix();
});


function finDuTour () {
	$('#deux').html('<h3 style="padding-left: 300px; padding-top: 75px;">En attente de l\'adversaire</h3>');
	attente();
}
function finDuTourDeux () {
	$('#deux').html('<h3 style="padding-left: 300px; padding-top: 75px;">En attente de l\'adversaire</h3>');
	attenteDeux();
}



</script>