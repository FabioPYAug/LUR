<?php
session_start();

if (!isset($_SESSION['us_ID'])) {
    header("Location: login.php");
    exit;
}
?>
