<?php
include 'class.php';
$sql = "SELECT id, name FROM company";
$a = new company();
$a->connect();
$result = mysqli_query($a->conn,$sql);

include"header.php";
?>
			<form method ='post' action="dostuff.php">
<h1>Registro empresa</h1> 
			<pre>
				<h2>Datos personales</h2>
			<table>
			<tr>
			<td>Nombre de usuario:</td>
			<td><input type="text" name="user"></td>
			</tr>
			<tr><td>Correo electrónico:</td><td><input type="text" name="mail"></td></tr>
			<tr><td>Contraseña:</td><td><input type="password" name="pass"></td></tr>
			<tr><td>Repetir contraseña:</td><td><input type="password" name="pass2"></td></tr>
			</table>
		<h2>Datos profesionales</h2>
		<table>
					<tr><td>Empresa:</td><td><?php
                echo "<select name = 'com1' id='companylist' onChange='showForm()'>";
                echo "<option value='0'>Mi empresa no está en la lista</option>";
                while ($rows = mysqli_fetch_array($result)){
                    echo"<option value='".$rows['id']."'>".$rows['name']."</option>";
                    }
                echo "</select>";
                ?></td></tr>
                <tr id="addcompany"><td>Nombre de la empresa:</td><td><input type="text" name="com2"></td></tr>
		            <tr><td>Cargo:</td><td><input type="text" name="posi"></td></tr>
		
					<tr><td>Gerencia o división:</td><td><input type="text" name="depa"></td></tr>
					
                			
				</table>

	<h2>Facultades del cargo</h2>
				<input type="checkbox" name="edit"> ¿Puede administrar los Activos TI?
				<input type="checkbox" name="edbu"> ¿Puede administrar los Objetivos del Negocio?
		</pre>
			<pre>
<br><input type="submit" value="Registrarse"></br> 
        </form>
 <a href = "login.php">Volver</a> 
			</pre>
<script>
function showForm() {
var e = document.getElementById('companylist');
if(!e) {
   return;
}
var strUser = e.options[e.selectedIndex].value;
if(strUser == '0') {
    document.getElementById('addcompany').style.display = '';
} else {
    document.getElementById('addcompany').style.display = 'none';
}
}
showForm();
</script>
<?php include "footer.php" ?>