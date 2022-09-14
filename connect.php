<?php

$username = "root";

$password = "";

try {
    $conn = new PDO('mysql:host=localhost;dbname=webcourse; charset=utf8', $username, $password);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
