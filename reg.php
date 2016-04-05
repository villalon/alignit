<?php
include "header.php";
include 'class.php';
$sql = "SELECT id, name FROM company";
$a = new company();
$a->connect();
$result = mysqli_query($a->conn,$sql);


?>
<div class="col-md-6">
			<form method ='post' action="dostuff.php">
<h1>Registro</h1> 
				<h2>Datos personales</h2>

		<div class='form-group'>
			<label for='user'>Nombre de usuario</label>
			<input type="text" name="user" class='form-control' id='user'>
		</div>
		<div class='form-group'>
			<label for='mail'>Correo electrónico</label>
			<input type="text" name="mail" class='form-control' id='mail'>
		</div>
		<div class='form-group'>
			<label for='password'>Contraseña</label>
			<input type="password" name="pass" class='form-control' id='password'>
		</div>
		<div class='form-group'>
			<label for='pass2'>Repetir contraseña</label>
			<input type="password" name="pass2" class='form-control' id='pass2'>
		</div>
			
		<h2>Datos profesionales</h2>

				<div class='form-group'>
					<label for='companylist'>Empresa</label>
					<?php
                	echo "<select name = 'com1' id='companylist' class='form-control'>";
                	echo "<option value='0'>Mi empresa no está en la lista</option>";
	                while ($rows = mysqli_fetch_array($result)){
	                    echo"<option value='".$rows['id']."'>".$rows['name']."</option>";
	                    }
	                echo "</select>";
                	?>
                </div>

                <div class='form-group' id='nom-empresa'>
	                <label for='com2'>Nombre de la empresa</label>
	                <input type="text" name="com2" class='form-control' id='com2'>
	            </div>

	            <div class='form-group'>
	            	<label for='posi'>Cargo</label>
	            	<input type="text" name="posi" class='form-control' id='posi'>
	            </div>

	            <div class='form-group'>
	            	<label for='depa'>Gerencia o división</label>
	            	<input type="text" name="depa" class='form-control' id='depa'>
	            </div>
		

	<h2>Facultades del cargo</h2>
	<div class="checkbox">
		<label>
		<input type="checkbox" name="edit"> ¿Puede administrar los Activos TI?
		</label>

	</div>
	<div class="checkbox">
		<label>
		<input type="checkbox" name="edbu"> ¿Puede administrar los Objetivos del Negocio?
		</label>

	</div>
				
				
		
<br><input type="submit" class="btn btn-success" value="Registrarse"> <a href = "login.php">Cancelar</a> 
        </form>
 </div>
			
<script>

$(document).ready(function(){
	$('#companylist').change(function(){
		if ($('#companylist').val() == 0  ) {
			$('#nom-empresa').show();
		}
		else {
			$('#nom-empresa').hide();
		}
	});

});


function showForm() {
var e = document.getElementById('companylist');
if(!e) {
   return;
}
var strUser = e.options[e.selectedIndex].value;
if(strUser == '0') {
    document.getElementById('nom-empresa').style.display = '';
} else {
    document.getElementById('nom-empresa').style.display = 'none';
}
}
//showForm();
</script>
<?php include "footer.php" ?>