<?php 
session_start();
session_destroy();
unset($_SESSION['userid']);

//Remove Cookies
setcookie("identifier","",time()-(3600*24*365)); 
setcookie("securitytoken","",time()-(3600*24*365)); 

require_once("templates/config.inc.php");
require_once("templates/functions.inc.php");

include("templates/header.inc.php");
?>

<div class="container main-container">
Der Logout war erfolgreich. <a href="login.php">Zurück zum Login</a>.
</div>
<?php 
include("templates/footer.inc.php")
?>