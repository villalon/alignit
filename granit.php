<!DOCTYPE html>
 <html>
 <head>
 
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

 <title>IT Assets</title>
     <link type="text/css" rel="stylesheet" href="css.css">
	 <style type="text/css">

<!-- esto sirve para trasponer la tabla con la informacion
saca esta etiqueta style y su contenido para verla ordenada de otra manera, aunque con esto se ve mejor -->
	</style>

 </head>
 <body>
<div class="col-md-1"></div><div class="col-md-10">
<?php
	include 'class.php';
    $a = new usuario();
    $a->sessionstarter();
    $b = new it_excellence();
	$c = new IT_Assets();
    if ($a->edbu == 0){
	    	echo "Ud no tiene permiso para estar aca.";
	    	die();
	    }
    $fk = $_SESSION['company'];
	$itassets = $c->getall($fk);
		 echo "<br><br><br> 

	<table id='2'>
    </table><br>
	<a href = 'menuuser.php'><input type='submit' value='Go to Menu'></a> ";
?>
  
	</div>
 </body></html>