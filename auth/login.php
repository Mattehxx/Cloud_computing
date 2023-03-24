<?php
    session_start();

    require_once('../functions/sanitize_string.php');
    require_once('../config/db_connection.php');

    //prende i valori dal form e li assegna alle variabili
    $username=sanitize_string($_POST['username']); //sanitizzazione dello username
    $password=$_POST['password'];

    $prpstm=$conn->prepare("SELECT id, password FROM accounts WHERE email LIKE ? OR username LIKE ?");
    $prpstm->bind_param('ss', $username, $username);

    if (!$prpstm->execute()) {
        http_response_code(400);
        echo json_encode(['message' => "Non è stato possibile eseguire l'operazione"]);
    }

    $prpstm->bind_result($id, $passworddb);
    $prpstm->fetch();

    //se l'hash della password corrisponde
    if(!password_verify($password, $passworddb)) {
        http_response_code(400);
        echo json_encode(['message' => "Non è stato possibile eseguire l'operazione"]);
    }

    //se non è presente l'utente all'interno del db
    if ($id===NULL) {
        http_response_code(401);
        echo json_encode(['message' => "Nessun è stato possibile trovare un utente con le credenziali fornite"]);
    }

    //se tutto va bene e le credenziali corrispondono
    $_SESSION['idUser']=$id;
    http_response_code(400);
    echo json_encode(['message' => "Operazione andata a buon fine"]);
?>