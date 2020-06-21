<?php
/********************************
Dit bestand is nodig om jouw queries uit te voeren.

Je hoeft niets aan onderstaande toe te voegen of aan te passen
********************************/


//functie voor het toevoegen of verwijderen van een te laat gekomen student
function voerUit($sqlVoerUit)
{
    require('database.php');
    $db_conn->exec($sqlVoerUit);
    header("location: index.php");
}

//functie voor het ophalen van alle gegevens uit de 'te laat kom'-tabel
function haalAllesOp()
{
    require('database.php');
    $sql = "SELECT * FROM te_laat ORDER BY id DESC";
    $statement = $db_conn->prepare($sql);
    $statement->execute();
    $students = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $students;
}

//functie voor het ophalen van een statistische waarde op basis van een querystring
function haalStatistiek($sqlStat)
{
    require('database.php');
    $stmt = $db_conn->prepare($sqlStat);
    $stmt->execute();
    $stat = $stmt->fetch(PDO::FETCH_ASSOC);
    return $stat['statistiek'];
}
