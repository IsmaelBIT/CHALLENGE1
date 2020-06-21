<?php
/********************************
Dit bestand is nodig om een databaseverbinding te maken

Je hoeft niets aan onderstaande toe te voegen of aan te passen
********************************/
$user = 'root';
$pass = '';
$db_conn = new PDO('mysql:host=localhost;dbname=toets-op6', $user, $pass);