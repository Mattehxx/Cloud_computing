<?php
    session_start();

    require_once('../functions/sanitize_string.php');
    require_once('../functions/response.php');
    require_once('../config/db_connection.php');

    //prende i valori dal form e li assegna alle variabili
    $username=sanitize_string($_POST['username']); //sanitizzazione dello username
    $password=$_POST['password'];

    $prpstm=$conn->prepare("SELECT id, password FROM accounts WHERE username LIKE ?");
    $prpstm->bind_param('s', $username);

    if (!$prpstm->execute()) {
        bad();
    }

    $prpstm->bind_result($id, $password_hashed);
    $prpstm->fetch();

    //se l'hash della password corrisponde
    if(!password_verify($password, $password_hashed)) {
        bad();
    }

    //se non è presente l'utente all'interno del db
    if ($id===NULL) {
        unauthorized();
    }

    //se tutto va bene e le credenziali corrispondono
    $_SESSION['id_user']=$id;
    ok();
?>