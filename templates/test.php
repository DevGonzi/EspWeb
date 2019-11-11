<?php

echo $_GET["sysvol"];


$host = "85.214.153.77";
$dbuser = "esp";
$dbpass = "WqvYd3D5ptsF9tAWXONb";
$dbname = "esp";
$dbcon = mysqli_connect($host, $dbuser, $dbpass, $dbname);




$sql_insert = "INSERT INTO sysvol (sysvol) VALUES ('".$_GET["sysvol"]."')";
if (mysqli_query($dbcon, $sql_insert)) {
    echo "Eingetragen!";
    mysqli_close($dbcon);
} else {
    echo "ERROR: " . mysqli_error($dbcon);
}

?>