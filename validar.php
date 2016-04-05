<?php
session_start();
include 'class.php';
$mail = $_POST['mail']; 
$pass = $_POST['pass'];
if($mail != "" && $pass != ""){
    $a = new usuario();
    $a->log_me_in($mail);
    if ($a->itsalive = 1){
            if($a->pass == $pass)
                {
                $_SESSION['id'] = $a->id;
                $_SESSION['company'] = $a->compid;
                header("Location: menuuser.php");
            }
            else{
                $_SESSION['message'] = "Usuario o contraseña inválida";
                $_SESSION['message_type'] = "error"; //error, success o info
                header("Location: login.php");
            }
        }
        }
else{
    $_SESSION['message'] = "Usuario o contraseña inválida";
    $_SESSION['message_type'] = "error"; //error, success o info
    header("Location: login.php");
}
?>