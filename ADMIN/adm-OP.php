<?php
include("adm-style.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
    <div id="wrapper">
        <!-- SIDEBAR -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="adm-lobby.php">Lobby</a></li>
                <li><a href="adm-NE.php">Noite Escura</a></li>
                <li><a href="adm-OP.php">Ordem Paranormal</a></li>
                <li><a href="adm-SH.php">Sussurros Históricos</a></li>
            </ul>
        </div>
        <!-- CONTEÚDO -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const wrapper = document.getElementById("wrapper");
            wrapper.addEventListener("click", () => {
                wrapper.classList.toggle("toggled");
            });
        });
    </script>
</body>

</html>