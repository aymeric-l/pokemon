
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script>function recherchePvp(){
			$.ajax({
		      type: "GET",
		      url: "js/reloadRecherchePvp.php"
		   }).done(function (html) {
		      $("body").html(html); 
		   });
		}
	</script>

</head>
<body>
<script> recherchePvp(); </script>
</body>
</html>