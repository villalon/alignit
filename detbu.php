<?php
		include 'header.php';
	    include 'class.php';
	    $a = new usuario();
	    $a->sessionstarter();
	    if ($a->edbu == 0){
	    	echo "You can be here";
	    }
	    
	    $c = new bu_excellence();
	    $c->check();
	    ?>

		
<a href = 'menuuser.php'>Volver</a>

<?php
	include 'footer.php';
?>


