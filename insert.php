<?php
//Deze regel moet blijven staan
require('include/functions.php');

//Stopt de met het formulier geposte data in variabelen
$student_id = $_POST['id'];
$naam = $_POST['student_name'];
$klas = $_POST['student_class'];
$aantal_minuten = $_POST['student_minutes-to-late'];
$reden_student = $_POST['reason'];

$sqlVoegToe = "INSERT INTO `te_laat` (`naam_student`, `klas`, `aantal_minuten`, `reden_student`) VALUES ('$naam','$klas',$aantal_minuten,'$reden_student');";

//tijdelijke function replacement
require('include/database.php');
$db_conn->exec($sqlVoegToe);
header("location: index.php");

// Roep de functie voegToe aan met als argument de variabele $sqlVoegToe