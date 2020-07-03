<?php
require('include/functions.php');


// Haal het id op dat in de url is meegegeven
$student_id = $_GET['id'];

$sqlVerwijder = "DELETE FROM `te_laat` WHERE id = '$student_id';";

//tijdelijke function replacement
require('include/database.php');
$db_conn->exec($sqlVerwijder);
header("location: index.php");


// Roep de functie voerUit aan met als argument de variabele $sqlVerwijder;
