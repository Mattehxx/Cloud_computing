<?php
    session_start();

    function islogged() {
        if (empty($_SESSION['id_user'])) return false;
        else return true;
    }
?>