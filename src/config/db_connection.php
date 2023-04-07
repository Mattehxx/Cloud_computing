<?php
    $hostname="18.204.198.161/db";
    $username="user";
    $password="password";
    $database="cloud_computing";
    $port="3306";
    // creo la connessione
    $conn=new mysqli($hostname,$username,$password,$database,$port);
    // controllo la connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
?>