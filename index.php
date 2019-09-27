<?php 
session_start();
require_once("templates/config.inc.php");
require_once("templates/functions.inc.php");
include("templates/header.inc.php")
?>

    <div class="jumbotron">
      <div class="container">
        <h1>Davids Testseite</h1>
        <p>Herzlich Willkommen auf meiner Website.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Registrieren:</h3>
          <a class="btn btn-primary btn-lg" href="register.php" role="button">Jetzt registrieren</a>
         
        </div>
        <div class="col-md-4">
          <h3>Login:</h3>
          <p><a class="btn btn-primary btn-lg" href="login.php" target="_blank" role="button">Zum Login</a></p>
       </div>
      </div>
	</div>

<?php 
include("templates/footer.inc.php")
?>
