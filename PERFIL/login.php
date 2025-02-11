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

        if ($us_senha == $user['us_senha']) {
            $_SESSION['us_ID'] = $user['us_ID'];
            $_SESSION['us_login'] = $us_login;
            header("Location: pfl-frontend.php"); 
            exit;
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>

<form method="POST" action="login.php" class="login-form">
  <p class="login-text">
    Entrar
  </p>
  <input type="text" name="us_login" class="login-username" placeholder="Usuário" required><br>
  <input type="password" name="us_senha" class="login-password" placeholder="Senha" required><br>
  <input type="submit" class="login-submit" value="Entrar">
</form>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');

body, html {
  height: 100%;
  margin: 0;
  font-family: 'Open Sans', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #121212;
}

.login-form {
  background: rgba(0, 0, 0, 0.6);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  border-radius: 8px;
  padding: 2rem;
  text-align: center;
  width: 100%;
  max-width: 400px;
}

.login-text {
  color: white;
  font-size: 2rem;
  margin-bottom: 1.5rem;
}

.login-username, .login-password {
  background: transparent;
  border: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  color: white;
  padding: 0.75rem;
  width: 100%;
  margin-bottom: 1.25rem;
  font-size: 1rem;
  transition: border-color 0.3s ease-in-out;
}

.login-username::placeholder, .login-password::placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.login-username:focus, .login-password:focus {
  outline: none;
  border-color: white;
}

.login-submit {
  background-color: #2d87f0;
  color: white;
  border: none;
  padding: 0.75rem;
  width: 100%;
  font-size: 1.1rem;
  cursor: pointer;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.login-submit:hover {
  background-color: #1c63c7;
}

.underlay-photo {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('https://31.media.tumblr.com/41c01e3f366d61793e5a3df70e46b462/tumblr_n4vc8sDHsd1st5lhmo1_1280.jpg') no-repeat center center/cover;
  filter: grayscale(30%);
  z-index: -1;
}

.underlay-black {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  z-index: -1;
}

</style>