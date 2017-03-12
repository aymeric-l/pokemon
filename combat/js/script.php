
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
</script> 
<script type="text/javascript">
		function combat() {
		   $.ajax({
		      type: "GET",
		      url: "js/combatActuel.php"
		   }).done(function (html) {
		      $('#info').html(html); // Retourne dans #maDiv le contenu de ta page
		      setTimeout(combat, 2000);
		   });
		   $.ajax({
		      type: "GET",
		      url: "js/combatActuelEnnemi.php"
		   }).done(function (html) {
		      $('#infoEnnemi').html(html); // Retourne dans #maDiv le contenu de ta page
		      setTimeout(combat, 2000);
		   });
		}  
		combat();    
</script> 

<script type="text/javascript">




$('#choixUn').click(function() {
	$('#choix').html('<div id="attaqueUne" onClick="finDuTour();"></div>');
	$('#choix').append('<div id="attaqueDeux"></div>');
	$('#attaqueUne').html('<h3><?PHP echo $listeAttaque[0][1]."</br> (Dégats : ".$listeAttaque[0][3].")" ?></h3>');
	$('#attaqueDeux').html('<h3><?PHP echo $listeAttaque[2][1]; ?></h3>');
});

function finDuTour () {
	actu();
	$('#deux').html('<h3 style="padding-left: 300px; padding-top: 75px;">En attente de l\'adversaire</h3>');
}



</script>