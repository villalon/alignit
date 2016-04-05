<?php
session_start();
include 'class.php';
//Lo qe se recibe de la pag anterior
$user = $_POST['user'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$com1 = $_POST['com1']; //id de compañia qe eligio
$com2 = $_POST['com2']; //nombre de compañia qe agrego
$posi = $_POST['posi'];
$depa = $_POST['depa'];
//$edit = $_POST['edit'];
//$edbu = $_POST['edbu'];
//ocd ftw
$a = new usuario();
$a->connect();


if ($a->isUserRegistered($mail)) {
	$_SESSION['message'] = "Mail ya registrado, por favor utilice uno diferente";
	$_SESSION['message_type']  = "error";
	header("Location:reg.php");
}
else{
	
if($pass != "" && $user != "" && $mail != "" && $posi != "" && $depa != ""){


	if($pass != $pass2) {
		$_SESSION['message'] = "Contraseñas no coinciden.";
		$_SESSION['message_type']  = "error";
		header("Location:reg.php");
	}

	$a->user = $user;
	$a->mail = $mail;
	$a->pass = $pass;
	$a->posi = $posi;
	$a->depa = $depa;
	$b = new company();
	if ($com1 != 0){
		$a->compid = $com1;
		$b->porsiacaso = 1;
	}
	elseif ($com1 == 0 && $com2 != ""){
		//$b = new company();
		$b->name = $com2;
		$b->crearco();
		$a->compid = $b->id;
		$b->porsiacaso = 1;
	}
	else {
		$_SESSION['message'] = "Error en la selección de empresa";
		$_SESSION['message_type']  = "error";
		header("Location:reg.php");

	}
	
	if ($b->porsiacaso == 1){
		if (isset($_POST['edit'])){
			$a->edit = 1;
		}
		else{
			$a->edit = 0;
		}
		if (isset($_POST['edbu'])){
			$a->edbu = 1;
		}
		else{
			$a->edbu = 0;
		}
		$a->Create_User($a->compid);
		if ($a->itsalive == 1){
			$_SESSION['message'] = "Usuario registrado satisfactoriamente.";
			$_SESSION['message_type']  = "success";
			header("Location:login.php");
		}
		else{
			$_SESSION['message'] = "Ha ocurrido un error en el registro. Por favor intente más tarde";
			$_SESSION['message_type']  = "error";
			header("Location:reg.php");
		}
	}
}
else
{
	$_SESSION['message'] = "Por favor rellene todos los campos";
	$_SESSION['message_type']  = "error";
	header("Location:reg.php");

	// if($user == ""){

	// 	$_SESSION['message'] = "What's your name?");
	// }
	// if($mail==""){
	// 	echo ("Enter a Mail");
	// }
	// if ($pass=="")
	// {
	// 	echo("Chose a Password");
	// //	echo "PORFAVOR LLENE TODOS LOS CAMPOS OBLIGATORIOS";
	// }
	// if($com1 == '' && $com2 == ""){
	// 	echo ("In what company works?");
	// }
	// if($posi==""){
	// 	echo ("Enter a valid Position");
	// }
	// if($depa == ""){
	// 	echo ("Enter a valid Departament");
	// }
}
}
?>
 <link type="text/css" rel="stylesheet" href="css.css">
 <br>
<a href = "reg.php">Back to Sign In</a>