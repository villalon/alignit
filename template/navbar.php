    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">AlignIT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
          <?php 
            if(isset($_SESSION['id'])){
              ?>
            
            <a href="salir.php" class="btn btn-success">Cerrar Sesión</a>
            <?php 
          }
          ?>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
