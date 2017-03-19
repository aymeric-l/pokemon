
<script type="text/javascript">
		function actu() {
		   $.ajax({
		      type: "GET",
		      url: "js/finDuTour.php"
		   }).done(function (html) {
		      $('#pousser').html(html); 
		   });
		} 
		function traitementFinDuTour() {
		   $.ajax({
		      type: "GET",
		      url: "js/traitementFinDuTour.php"
		   }).done(function (html) {
		      $('#pousser').html(html); 
		   });
		} 
		function attente() {
		   $.ajax({
		      type: "GET",
		      url: "js/attente.php"
		   }).done(function (html) {
		      $('#pousser').html(html);
		   });
		}   

		function attenteDeux() {
		   $.ajax({
		      type: "GET",
		      url: "js/attenteDeux.php"
		   }).done(function (html) {
		      $('#pousser').html(html); 
		   });
		}   

		function attenteTrois() {
		   $.ajax({
		      type: "GET",
		      url: "js/attenteTrois.php"
		   }).done(function (html) {
		      $('#pousser').html(html); 
		   });
		} 

		function attenteQuattre() {
		   $.ajax({
		      type: "GET",
		      url: "js/attenteQuattre.php"
		   }).done(function (html) {
		      $('#pousser').html(html); 
		   });
		} 

		function combat() {
		   $.ajax({
		      type: "GET",
		      url: "js/combatActuel.php"
		   }).done(function (html) {
		      $('#info').html(html); 
		   });
		   $.ajax({
		      type: "GET",
		      url: "js/combatActuelEnnemi.php"
		   }).done(function (html) {
		      $('#infoEnnemi').html(html); 
		      setTimeout(combat, 3000);
		   });
		}  
		combat();    



function choix() {
	$('#choix').html('<div id="choixGauche"><div id="attaqueUne" onClick="finDuTour();"></div><div id="attaqueDeux" onClick="finDuTourDeux();"></div></div><div id="choixDroit"><div id="attaqueTrois" onClick="finDuTourTrois();"></div><div id="attaqueQuattre" onClick="finDuTourQuattre();"></div></div>');

	$('#attaqueUne').html('<h3><?PHP echo $listePokemon[0]["attaqueUne"]; ?></h3>');
	$('#attaqueDeux').html('<h3><?PHP echo $listePokemon[0]["attaqueDeux"]; ?></h3>');
	$('#attaqueTrois').html('<h3><?PHP echo $listePokemon[0]["attaqueTrois"]."</br>" ?></h3>');
	$('#attaqueQuattre').html('<h3><?PHP echo $listePokemon[0]["attaqueQuattre"]; ?></h3>');
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
function finDuTourTrois () {
	$('#deux').html('<h3 style="padding-left: 300px; padding-top: 75px;">En attente de l\'adversaire</h3>');
	attenteTrois();
}
function finDuTourQuattre () {
	$('#deux').html('<h3 style="padding-left: 300px; padding-top: 75px;">En attente de l\'adversaire</h3>');
	attenteQuattre();
}



</script>
