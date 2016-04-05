<?php
		$pagetitle = "Crear Objetivos de Negocios | AlignIT";
		include 'header.php';
	    include 'class.php';
	    $a = new usuario();
	    $a->sessionstarter();
	    if ($a->edbu == 0){
	    	echo "Ud no tiene permiso para estar aca.";
	    }
			if ($a->edbu == 1){
	echo"
	<div class='page-header'><h3>Crear Objetivo de Negocio</h3></div>
	<div class='col-md-4'>
		<form method ='post' action='bucreation.php'> 
			<div class='form-group'>
				<label for='nombrebu'>Nombre</label>
				<input id='name' type='text' name='name' class='form-control' id='nombrebu'>
			</div>
			<input type='submit' class='btn btn-success' value='Agregar Objetivo de Negocio'>
			<a href = 'menuuser.php' >Volver</a>
		</form>
	</div>
	";}
		?> 
	</body>  
</html>