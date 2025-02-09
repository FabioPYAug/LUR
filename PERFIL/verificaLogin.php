<?php
session_start();

function verificaLogin() {
    if (!isset($_SESSION['us_ID'])) {
        header("Location: login.php"); 
        exit;
    }
}

verificaLogin();
?>
