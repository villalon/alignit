<?php include 'header.php';
	    include 'class.php';
	    $a = new usuario();
	    $a->sessionstarter();
	    if ($a->edit == 0){
	    	echo "You can't be here";
	    	include 'footer.php';
	    	die();
	    }
	    
	    $c = new it_excellence();
	    $c->check();
	    ?>
		

<a href = 'menuuser.php'>Volver</a>
<?php include 'footer.php' ?>
