<?php
    require_once('../functions/sanitize_string.php');
    require_once('../functions/response.php');
    require_once('../functions/redirect.php');
    require_once('../config/db_connection.php');

    //prende i valori dal form e li assegna alle variabili
    $username=sanitize_string($_POST['username']); //sanitizzazione dello username
    $password=$_POST['password'];
    $first_name=sanitize_string($_POST['first_name']); //sanitizzazione del nome
    $last_name=sanitize_string($_POST['last_name']); //sanitizzazione del cognome
    $birthday_date=$_POST['birthday_date'];
    $id_gender=$_POST['gender'];

    $password_hash=password_hash($password, PASSWORD_BCRYPT);

    $prpstm=$conn->prepare("INSERT INTO accounts (username, password, first_name, last_name, dob, id_gender) VALUES (?, ?, ?, ?, ?, ?)");
    $prpstm->bind_param('sssssi', $username, $password_hash, $first_name, $last_name, $birthday_date, $id_gender);

    //se la query fallisce
    if (!$prpstm->execute()) {
        bad();
    }

    //se tutte le operazioni vanno a buon fine
    ok();
?>