<?php
$host = "x";
$dbuser = "x";
$dbpass = "x";
$dbname = "x";
$dbcon = mysqli_connect($host, $dbuser, $dbpass, $dbname);

// $sql_insert = "INSERT INTO data (temperature, humidity, heat_index) VALUES ('".$_GET["temperature"]."', '".$_GET["humidity"]."', '".$_GET["heat_index"]."')";

$sql_insert = "INSERT INTO sysvol (sysvol) VALUES ('".$_GET["sysvol"]."')";
$sql_sensor = "INSERT INTO data (temperatur, humidity, temperatur2, humidity2) VALUES ('" . $_GET["temperatur"] . "', '" . $_GET["humidity"] . "', '" . $_GET["temperatur2"] . "', '" . $_GET["humidity2"] . "')";
// $sql_sensor2 = "INSERT INTO data (temperatur, humidity, sensor) VALUES ('" . $_GET["temperatur2"] . "', '" . $_GET["humidity2"] . "', '" . $_GET["sensor2"] . "')";

// $sql_sensor1 = "INSERT INTO data (temperatur, humidity, sensor) VALUES ('" . $_GET["temperatur"] . "', '" . $_GET["humidity"] . "', '" . $_GET["sensor"] . "')";
// $sql_sensor2 = "INSERT INTO data (temperatur, humidity, sensor) VALUES ('" . $_GET["temperatur2"] . "', '" . $_GET["humidity2"] . "', '" . $_GET["sensor2"] . "'

if (mysqli_query($dbcon, $sql_sensor) && mysqli_query($dbcon, $sql_insert)) {
// if (mysqli_query($dbcon, $sql_sensor)) {
    echo "Eingetragen!";
    mysqli_close($dbcon);
} else {
    echo "ERROR: " . mysqli_error($dbcon);
}

?>
