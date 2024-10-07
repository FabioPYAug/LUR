<?php
    $conexao = mysqli_connect("localhost", "root", "", "projetoiniciante");
    if (!$conexao) {
    echo "Conexão Falhou" . mysqli_connect_error();
    }
?>