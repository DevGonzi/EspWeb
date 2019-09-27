<?php
session_start();
require_once("templates/config.inc.php");
require_once("templates/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
?>

<!doctype html>
<html>
<head>  
<meta http-equiv="refresh" content="60">
<meta charset="utf-8" />  
<title>Messdaten als Diagramm</title>  
</head>

<center>
<br><br><br>
<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/737958/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
<br><br><br> <hr> <br><br><br>
<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/737958/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
</html>
<?php include("templates/footer.inc.php"); ?>