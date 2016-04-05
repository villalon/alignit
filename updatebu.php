<?php
	include 'class.php';
    $a = new usuario();
    $a->sessionstarter();
    $b = new Business_Objectives();
    $b->id = $_POST['id'];
    $b->name = $_POST['name'];
    $b->editar();
    if ($b->helpme == 1){
        $_SESSION['message'] = "Actualización realizada correctamente.";
        $_SESSION['message_type'] = "success"; //error, success o info
        header("Location: menuuser.php");

    }
    else{
    	//header("Location: ModifIT.php");
        $_SESSION['message'] = "Ha ocurrido un error al actualizar.";
        $_SESSION['message_type'] = "error"; //error, success o info
        header("Location: menuuser.php");
    }
    ?>
