<?php
		$pagetitle = "Crear Activo IT | AlignIT";
		include 'header.php';
	    include 'class.php';
	    $a = new usuario();
	    $a->sessionstarter();
	    if ($a->edit == 0){
	    	echo "Ud no tiene permiso para estar aca.";
	    }

        if ($a->edit == 1){ 
        echo"
	<div class='page-header'><h3>Crear Activo de TI</h3></div>
	<div class='col-md-4'>
		<form method ='post' action='itcreation.php'> 
			<div class='form-group'>
				<label for='nombre'>Nombre</label>
				<input type='text' name='name' class='form-control' id='nombre'>
			</div>
			<div class='form-group'>
				<label for='budget'>Presupuesto</label>
				<input type='number' name='budg' class='form-control' id='budget'>
			</div>
			<div class='form-group'>
				<label for='headcount'>Headcount</label>
				<input type='number' name='head' class='form-control' id='headcount'>
			</div>
		
		<br>
		<input type='submit' value='Add It Assets' class='btn btn-success'> 
		<a href = 'menuuser.php'>Volver</a>
		</form>
		
	</div>

";


    }
    ?>
    </div>
</body>  
</html>