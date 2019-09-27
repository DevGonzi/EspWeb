<?php
session_start();
require_once("templates/config.inc.php");
require_once("templates/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
include "templates/blattern.php"; 
?>

<html> 
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Davids Sensor Daten</title>
<meta http-equiv="refresh" content="30">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">


<style>
#tabelle_daten {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tabelle_daten td, #tabelle_daten th {
  border: 1px solid #ddd;
  padding: 5px;
}

#tabelle_daten tr:nth-child(even){background-color: #d4d4d4;}

#tabelle_daten tr:hover {background-color: #FE9000;}

#tabelle_daten th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #FE0101;
  color: white;
}
</style>
</head> 
<body> 

<?php
	$eintraege_pro_seite = 25;

	if(isset($_GET['seite']) && !empty($_GET['seite'])){
		$seite = $_GET["seite"];
	} else {
		header("Location: daten.php?seite=1");
	}

	$start = $seite * $eintraege_pro_seite - $eintraege_pro_seite;

  $db = $mysqli;
    $sql = "SELECT * FROM data ORDER BY id DESC LIMIT $start, $eintraege_pro_seite"; //Um wieder Aufsteigend (1 ganz oben) folgende Abfrage verwenden: "SELECT * FROM data ORDER BY id ASC LIMIT $start, $eintraege_pro_seite"
			//ASC = Aufsteigend (1 am Anfang) | DESC = Absteigend (Höchste Zahl am Anfang)
    
	$erg = $db->query($sql);
        if (!$erg){
        die ('Etwas stimmte mit dem MySQL Server nicht: (daten) '.$db->error); 
        }
	$query = mysqli_query($db, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($db), E_USER_ERROR);
?>

<table id="tabelle_daten">

        <tr>
                <th>ID</th>
				<th>Datum</th> 
                <!-- <th>Uhrzeit</th> --> 
                <th>Temperatur</th>
                <th>Luftfeuchtigkeit</th>
				
				<th>Löschen</th>
        </tr> 

        <?php
             while ($row = $erg->fetch_assoc()) {       
         ?> 

        <tr> 
            <td><center><?php echo $row['id']; ?></center></td>
			<td><center><?php echo $row['datum']; ?></center></td>  
            <!--  <td><center><?php // echo $row['zeit']; ?> Uhr</center></td>  -->
            <td><center><?php echo $row['temperatur']; ?> °</center></td>
            <td><center><?php echo $row['humidity']; ?> %</center></td>
			<td><center><a href="delete.php?delete=<?php echo $row['id']; ?>">Löschen</a></center></td>
        </tr> 

        <?php 
                } 
        ?> 
</table> 

<?php
$ergebnis = $db->query($sql); 
$result = $db->query("SELECT COUNT(*) FROM data") or die($db->error);; 
$menge = $result->fetch_row(); 
$menge = $menge[0]; 
$wieviele_seiten = ceil($menge / $eintraege_pro_seite); 
echo "<div align=\"center\">"; 
echo "<br><b>Seite:</b> "; 
echo blaetterfunktion($seite,  $wieviele_seiten); 
echo "</div>"; 
?> 
</body> 
</html>
<?php include("templates/footer.inc.php"); ?>