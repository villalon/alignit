<?php
		include 'header.php'; 
        include 'class.php';
        $a = new usuario();
        $a->sessionstarter(); //la sesion se inicia después de enviar el header html?
        
	?>
<div class="row">
<div class="col-md-5">
	
	<h3>Activos TI 
	<?php 
	if($a->edit == 1){
		echo "<a href = 'crearit.php' class='btn btn-sm btn-primary'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a><br>";
	}
	?></h3>
	<table id='IT' class="table table-striped" > </table>
	
	
	<!--  <a href = 'granit.php'><input type='submit' value='See It Assets'></a> -->

</div>
<div class="col-md-1"></div>

<div class="col-md-5" >

	<h3>Objetivos del negocio
	<?php 
	if($a->edbu == 1){
		echo "<a href = 'crearbu.php' class='btn btn-sm btn-primary'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a><br>";
	}
	?>
	</h3>
	<table id='BU' class="table  table-striped" > </table><br>
	
	
	<!-- <a href = 'granbu.php'><input type='submit' value=' See Business Objectives'> </a> -->


</div>
<div class="col-md-1"></div>

</div>
<div class="row">

	

	<!-- <div class="col-md-3"></div> -->
	<div class="col-md-12">
	<div class="page-header">
		<h3>Matriz de alineamiento</h3>
	</div>
	
	<table id='Gran' class="table table-striped"></table>

	
	
	</div>
	<!-- <div class="col-md-3"></div> -->
</div>
<script type="text/javascript">

$.ajax({
	 type: 'POST',
	 url: 'ajaxit.php',
	 dataType: 'json',
	 success: function (response) {
		var trHTML =
		'<thead><tr><th>Nombre</th><th>Presupuesto</th><th>Personal</th><th colspan="3">Acciones</th></tr></thead>';
		for(var f=0;f<response.length;f++){
			trHTML += '<tr id="'+response[f]['id']+'">'+
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
		'<thead><tr><th>Nombre</th><th colspan="3">Acciones</th></tr></thead>';
		for(var f=0;f<response.length;f++){
			trHTML += '<tr id="'+response[f]['id']+'">'+
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
			'<thead><tr><td></td>';
			for(var f=0;f<response.length;f++){
				trHTML += '<th>'+response[f]['name']+'</th>';
			}
			
			trHTML += '</tr></thead>';
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
											trHTML +='<tr><th>'+responses[k]['name']+'</th>';
											}
										else {
											trHTML +='<tr><th>'+responses[k]['name']+'</th>';
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
<?php
include 'footer.php'; 
?>