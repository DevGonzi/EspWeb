<?php
session_start();
require_once("templates/config.inc.php");
require_once("templates/functions.inc.php");
#$user = check_user();
include("templates/header.inc.php");
?>


<html> 
<title>David - Löschen</title> 
<center><h1><strong>Diese Seite kann nicht genutzt werden. Bitte folge dem <a href="daten.php">Link!</a></h1></strong></center>

<script>
alert('Für diesen Vorgang hast du keine Berechtigung!')
</script>

</html>

<?php
	$del_id = $_GET['delete'];

	$servername = "localhost";
	$username = "esp";
	$password = "AgfA$0000";
	$dbname = "esp";
    $db = new mysqli($servername, $username, $password, $dbname); 
        if (mysqli_connect_errno()) { 
        die ('Konnte keine Verbindung zur Datenbank aufbauen:  
                '.mysqli_connect_error().'('.mysqli_connect_errno().')'); 
        } 

    $sql = 'SELECT * FROM data';
    $erg = $db->query($sql);
        if (!$erg){
        die ('Etwas stimmte mit dem MySQL Server nicht: (delete) '.$db->error); 
        }
	$sql = "DELETE FROM data WHERE ID=$del_id";
	$query = mysqli_query($db, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($db), E_USER_ERROR);

	#echo "Die ID: $del_id sollte nun gelöscht sein. Leite weiter auf die Hauptseite.";
	$erg->close(); 
	# Messung wurde nun gelöscht und es wird auf die unten angegebe URL weitergeleitet.
    header('Location: daten.php'); 
?>


