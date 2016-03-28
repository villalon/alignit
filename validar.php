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
                echo 'Invalid Password';
				echo "<br><a href = 'login.php'>Go to Login</a>";
            }
        }
        }
else{
    echo 'Fill all the fields';
	echo "<br><a href = 'login.php'>Go to Login</a>";
}
?>