<?php
	session_start();
	include 'class.php';
    $a = new usuario();
    $a->sessionstarter();
    $b = new bu_excellence();
	$c = new Business_Objectives();
    if ($a->edbu == 0){
	    	echo "Ud no tiene permiso para estar aca.";
	    }
	else {

		$_SESSION['message'] = "Alineación actualizada correctamente.";
        $_SESSION['message_type'] = "success"; //error, success o info
        header("Location: menuuser.php");
	} 
  
	// </div>
	// <div class="col-md-1"></div>
	
	// <script language="javascript" type="text/javascript" src ="jquery-2.1.4.min.js"></script>
	// <script type="text/javascript">
 // $.ajax({
	//  type: 'POST',
	//  url: 'ajaxgranbu.php',
	//  dataType: 'json',
	//  success: function (response) {
	// 	var trHTML =
	// 	'<tr bgcolor ="#FFFFFF"><th></th>'+
	// 	'<th>Manage Service Quality</th>'+
	// 	'<th>Realize Scale Economies</th>'+
	// 	'<th>Optimize IT Internal Process</th>'+
	// 	'<th>Standardize Platforms and Architecture</th>'+
	// 	'<th>Deliver on Schedule</th>'+
	// 	'<th>Effectively Support End Users</th>'+
	// 	'<th>Improve Business Productivity</th>'+
	// 	'<th>Propose Enabling Solutions</th>'+
	// 	'<th>Understand Emerging Technologies</th>'+
	// 	'<th>Understand Business Units Strenghs</th></tr>';
	// 	for(var f=0;f<response.length;f++){
	// 		if( f%2==0){
	// 			trHTML +='<tr id="'+response[f]['idob']+'" bgcolor ="#CBD8F5">';
	// 			}
	// 		else {
	// 			trHTML +='<tr id="'+response[f]['idob']+'" bgcolor ="#FFFFFF">';
	// 			}
			
	// 		trHTML += '<th>'+response [f]['name']+'</th>'+
	// 		'<td>'+response [f]['manage_service_quality']+'</td>'+
	// 		'<td>'+response [f]['realize_scale_economies']+'</td>'+
	// 		'<td>'+response [f]['optimize_it_internal_processes']+'</td>'+
	// 		'<td>'+response [f]['standardize_platforms_and_architecture']+'</td>'+
	// 		'<td>'+response [f]['deliver_on_schedule']+'</td>'+
	// 		'<td>'+response [f]['effectively_support_end_users']+'</td>'+
	// 		'<td>'+response [f]['improve_business_productivity']+'</td>'+
	// 		'<td>'+response [f]['propose_enabling_solutions']+'</td>'+
	// 		'<td>'+response [f]['understand_emerging_technologies']+'</td>'+
	// 		'<td>'+response [f]['understand_business_units_strengths']+'</td>'+
	// 		'</tr>';
	// 	}
	// 	$('#2').html(trHTML);
	//  }
 // });	

	// </script>

?>