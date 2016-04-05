<?php
	session_start();
	include 'class.php';
    $a = new usuario();
    $a->sessionstarter();
    $b = new it_excellence();
	$c = new IT_Assets();
    if ($a->edbu == 0){
	    	echo "Ud no tiene permiso para estar aca.";
	    	die();
	    }
    $fk = $_SESSION['company'];

		 $_SESSION['message'] = "Alineación TI actualizada correctamente.";
         $_SESSION['message_type'] = "success"; //error, success o info
         header("Location: menuuser.php");
?>
