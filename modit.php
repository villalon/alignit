<?php
	include 'header.php';
	include 'class.php';
    $a = new usuario();
    $a->sessionstarter();
    $b = new IT_Assets();
    if ($a->edit == 0){
	    	echo "You can't be here";
	    }
	else{
		echo "<div class='page-header'><h3>Modificar Activos TI</h3></div>";
		echo "<div class='col-md-4'>";
		echo "<form action = updateit.php method='POST'>";
		echo "<div class='form-group'>";
		$b->preupdatear();

		echo"<div class='form-group'><label for='nombreit'>Nombre</label>  <input type='text' name=name value=".$b->name." id='nombreit' class='form-control'></div>";
		echo"<div class='form-group'><label for='budget'>Budget</label>  <input type='number' name=budg value=".$b->budg." id='budget' class='form-control'></div>";
		echo"<div class='form-group'><label for='headcount'>Headcount</label>  <input type='number' name=head value=".$b->head." id='headcount' class='form-control'></div>";
		echo"<input type='text' name =id value=".$b->id." style='display:none'>";
		echo"<input class='btn btn-success' type='submit' value='Guardar'> ";
		echo "<a href = 'menuuser.php'>Cancelar</a>";
		echo "</div>";
		echo"</form>";	
		echo "</div>";	
	}
?>
</body>  
</html>



