<?php
    $conexao = mysqli_connect("localhost", "root", "", "luna");
    if (!$conexao) {
    echo "Conexão Falhou" . mysqli_connect_error();
    }
?>