<?php
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['company']);
	header("Location:login.php");
	echo ("Ud ha cerrado sesion");
?>
