<?php
	include 'class.php';
	$a = new usuario();
	$b = new Business_Objectives();
	$a->sessionstarter();
	$b->name = $_POST['name'];
	if ($_POST['name'] == "")
	{ 
		$_SESSION['message'] = "Debe ingresar un nombre";
        $_SESSION['message_type'] = "error"; //error, success o info
		
		header("Location:crearbu.php");
	}
else{
	$b->insertbu($a->compid);
	if ($b->helpme == 1){
		$_SESSION['message'] = "Objetivo de negocio agregado satisfactoriamente";
        $_SESSION['message_type'] = "success"; //error, success o info
		
		header("Location:menuuser.php");
		
	}
	else {
		$_SESSION['message'] = "Ha ocurrido un error al agregar el objetivo de negocio";
        $_SESSION['message_type'] = "error"; //error, success o info
        header("Location:menuuser.php");
}}

?>