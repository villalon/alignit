<?php
	include 'class.php';
	$a = new usuario();
	$b = new IT_Assets();
	$a->sessionstarter();
	$b->name = $_POST['name'];
	$b->budg = $_POST['budg'];
	$b->head = $_POST['head'];
	$b->insertit($a->compid);
	if ($b->help == 1){

		$_SESSION['message'] = "Activo TI agregado satisfactoriamente";
        $_SESSION['message_type'] = "success"; //error, success o info
		
		header("Location:menuuser.php");
	}
	else {
		$_SESSION['message'] = "Ha ocurrido un error al agregar un activo TI";
        $_SESSION['message_type'] = "error"; //error, success o info
        header("Location:menuuser.php");
	}

?>