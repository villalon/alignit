<?php
        include 'class.php';
        $a = new usuario();
        $a->sessionstarter();
        include 'header.php';
	?>

<div class="col-md-1"></div><div class="col-md-4" class='centraTabla'>
	
	<h3>Activos TI</h3><br>
	<table id='IT' class="table" > </table><br>
	
	<?php 
	if($a->edit == 1){
		echo "<a href = 'crearit.php'>Agregar activo TI</a><br>";
	}
	?>
	<br><!--  <a href = 'granit.php'><input type='submit' value='See It Assets'></a> -->

</div><div class="col-md-2"></div><div class="col-md-4" class='centraTabla'>

	<h3>Objetivos del negocio</h3><br>
	<table id='BU' class="table" > </table><br>
	
	<?php 
	if($a->edbu == 1){
		echo "<a href = 'crearbu.php'>Agregar objetivo del negocio</a><br>";
	}
	?>
	<br><!-- <a href = 'granbu.php'><input type='submit' value=' See Business Objectives'> </a> -->


</div><div class="col-md-1"></div>

	<div class="col-md-3"></div><div class="col-md-6" class='centraTabla'>
	
	<br><br><br><h3>Matriz de alineamiento</h3>
	<br><table id='Gran' class="table"></table>
	<br><br><br><a href = 'salir.php'><input type='submit' value='Salir'> </a>
	<br><br>
	
	</div><div class="col-md-3"></div>

<script language="javascript" type="text/javascript" src ="jquery-2.1.4.min.js"></script>
<script type="text/javascript">

$.ajax({
	 type: 'POST',
	 url: 'ajaxit.php',
	 dataType: 'json',
	 success: function (response) {
		var trHTML =
		'<tr bgcolor ="#FFFFFF"><th>Nombre</th><th>Presupuesto</th><th>Personal</th><th colspan="3">Acciones</th></tr>';
		for(var f=0;f<response.length;f++){
			trHTML += '<tr bgcolor ="#FFFFFF" id="'+response[f]['id']+'">'+
			'<td>'+response [f]['name']+'</td>'+
			'<td>$'+response [f]['budget']+'</td>'+
			'<td>'+response [f]['headcount']+'</td>'+
			'<td><a href=modit.php?id='+response[f]['id']+'>Modificar</a></td>'+
			'<td><a href=detit.php?id='+response[f]['id']+'>Alinear</a></td>'+
			'<td><a class="delete-btn" >Borrar</a></td>'+
			'</tr>';
		}
		$('#IT').html(trHTML);
	 }
 });
 
  $('table#IT').on('click', '.delete-btn', function(){
	  if (confirm("Are you sure you want to delete this asset?")){
	  
        var id = $(this).parent().parent().attr('id');
    
        $.ajax({
          url: "borrarit.php",
          data: {
            id: id
          }
        })
          .done(function( html ) {
            console.log(html);
             $("#"+id).slideToggle("Slow","swing").html("");
			 
			
          });
		  
	  }});
$.ajax({
	 type: 'POST',
	 url: 'ajaxbu.php',
	 dataType: 'json',
	 success: function (response) {
		var trHTML =
		'<tr bgcolor ="#FFFFFF"><th>Nombre</th><th colspan="3">Acciones</th></tr>';
		for(var f=0;f<response.length;f++){
			trHTML += '<tr bgcolor ="#FFFFFF" id="'+response[f]['id']+'">'+
			'<td>'+response [f]['name']+'</td>'+
			'<td><a href=modbu.php?id='+response[f]['id']+'>Modificar</a></td>'+
			'<td><a href=detbu.php?id='+response[f]['id']+'>Alinear</a></td>'+
			'<td><a class="delete-btn" >Borrar</a></td>'+
			'</tr>';
		}
		$('#BU').html(trHTML);
	 }
 });
 
  $('table#BU').on('click', '.delete-btn', function(){
	  if (confirm("Are you sure you want to delete this Objetive?")){
	  
        var id = $(this).parent().parent().attr('id');
    
        $.ajax({
          url: "borrarbu.php",
          data: {
            id: id
          }
        })
          .done(function( html ) {
            console.log(html);
             $("#"+id).slideToggle("Slow","swing").html("");
			 
			
          }); 
        
	  }});
  
  $.ajax({
		 type: 'POST',
		 url: 'ajaxmenu.php',
		 dataType: 'json',
		 success: function (response) {
			var trHTML =
			'<tr bgcolor ="#FFFFFF"><td></td>';
			for(var f=0;f<response.length;f++){
				trHTML += '<th>'+response[f]['name']+'</th>';
			}
			
			trHTML += '</tr>';
			  $.ajax({
					 type: 'POST',
					 url: 'ajaxmenu2.php',
					 dataType: 'json',
					 success: function (responses) {
						 $.ajax({
							 type: 'POST',
							 url: 'ajaxmenux.php',
							 dataType: 'json',
							 success: function (responsex) {
								 var l=0;
								 for(var k=0;k<responses.length;k++){
									 if( k%2==0){
											trHTML +='<tr bgcolor ="#CBD8F5"><th>'+responses[k]['name']+'</th>';
											}
										else {
											trHTML +='<tr bgcolor ="#FFFFFF"><th>'+responses[k]['name']+'</th>';
											}
					
										for(var m=0;m<f;m++){
											trHTML += '<td>'+responsex[l]['equis']+'</td>';
											l++;
										}
									}

									trHTML += '</tr>';
								  $('#Gran').html(trHTML);
							 }});
					 }});
		}
	 });
 
 
</script>
</body>  
</html>