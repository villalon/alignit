<?php 
array ( $arr[1] = 'manage_service_quality',
				$arr[2] = 'realize_scale_economies',
				$arr[3] = 'optimize_it_internal_processes',
				$arr[4] = 'standardize_platforms_and_architecture',
				$arr[5] = 'deliver_on_schedule',
				$arr[6] = 'effectively_support_end_users',
				$arr[7] = 'improve_business_productivity',
				$arr[8] = 'propose_enabling_solutions',
				$arr[9] = 'understand_emerging_technologies',
				$arr[10] = 'understand_business_units_strengths'
		);
$i = 1;
while (isset($arr[$i])){
	
echo 'if(isset($_REQUEST["ed0'.$i.'"]) == '.$i.'){
		$c->'.$arr[$i].' = "X";
		} else { $c-> '.$arr[$i].' = "";}<br>';
		
$i++;
}
?>