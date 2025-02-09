<?php
session_start();
include('../NE/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $us_login = mysqli_real_escape_string($conexao, $_POST['us_login']);
    $us_senha = $_POST['us_senha'];

    // Consulta para pegar a senha em texto simples do banco
    $query = "SELECT us_ID, us_senha FROM users WHERE us_login = '$us_login'";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Compara diretamente a senha inserida com a senha armazenada no banco
        if ($us_senha == $user['us_senha']) {
            $_SESSION['us_ID'] = $user['us_ID'];
            $_SESSION['us_login'] = $us_login;
            header("Location: dashboard.php"); // Redireciona para o dashboard
            exit;
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>

<form method="POST" action="pfl-frontend.php">
    Login: <input type="text" name="us_login" required><br>
    Senha: <input type="password" name="us_senha" required><br>
    <input type="submit" value="Entrar">
</form>
