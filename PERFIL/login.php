<?php
session_start();
include('../NE/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $us_login = mysqli_real_escape_string($conexao, $_POST['us_login']);
    $us_senha = $_POST['us_senha'];

    $query = "SELECT us_ID, us_senha FROM users WHERE us_login = '$us_login'";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($us_senha, $user['us_senha'])) {
            $_SESSION['us_ID'] = $user['us_ID'];
            $_SESSION['us_login'] = $us_login;
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>

<form method="POST" action="">
    Login: <input type="text" name="us_login" required><br>
    Senha: <input type="password" name="us_senha" required><br>
    <input type="submit" value="Entrar">
</form>
