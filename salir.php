<?php
	unset($_SESSION['id']);
	unset($_SESSION['company']);
	header("Location:login.php");
	echo ("Ud a cerrado sesion");
?>
