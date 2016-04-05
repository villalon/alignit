<?php
	include 'header.php';
	include 'class.php';
    $a = new usuario();
    $a->sessionstarter();
    $b = new business_objectives();
    if ($a->edbu == 0){
	    	echo "You can't be here";
	    }
	else{

		echo "<div class='page-header'><h3>Modificar Objetivo de negocio</h3></div>";
		echo "<div class='col-md-4'>";
		echo "<form action = 'updatebu.php' method='POST'>";
		echo "<div class='form-group'>";
		$b->preupdatear();

		echo"<label for='nombrebu'>Nombre</label> <input type='text' name=name value=".$b->name." id='nombrebu' class='form-control'>";
		echo"<input type='text' class='form-control' name ='id' value=".$b->id." style='display:none'> ";
		echo "</div><div class='form-group'>";
		echo "<input type='submit' class='btn btn-success' value='Guardar'> ";
		echo "<a href = 'menuuser.php'>Cancelar</a>";
		echo "</div>";
		echo "</form>";	
		
		echo "</div>";	
	}
?>

</body>  
</html>


