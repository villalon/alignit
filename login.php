<?php include "header.php" ?>

<div class="row">
	<div class="col-md-4" ></div>
	<div class="col-md-4" >
		<h1>AlignIT</h1>
		<h4>Gestión estratégica de Tecnologías de la Información<h4>
		<form class="form-signin" action="validar.php" method="post">

	        <label for="inputEmail" class="sr-only">Email address</label>
	        <input name="mail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

	        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		 </form>
		<a href = "reg.php">Registrarse</a>
	</div>
	<div class="col-md-4" ></div>
</div>

<style type="text/css">
	body {
  padding-bottom: 40px;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
			
		
<?php include "footer.php" ?>
