<?php
session_start();
include('../NE/conexao.php');

if (!isset($_SESSION['us_ID'])) {
    echo json_encode(["error" => "Usuário não está logado!"]);
    exit;
}

$us_ID = $_SESSION['us_ID'];
$query = "SELECT u.us_ID, u.us_login, u.us_senha, 
       ud.us_criticos, ud.us_falhas, ud.us_sessoes, 
       ud.us_oneshots, ud.us_campanhas
FROM users u
INNER JOIN users_dados ud 
    ON u.us_ID = ud.us_ID
WHERE u.us_ID = '$us_ID'";
$result = mysqli_query($conexao, $query);

$us_ID = $_SESSION['us_ID'];
$query = "SELECT *
FROM users_campanhas
WHERE u.us_ID = '$us_ID'";
$result = mysqli_query($conexao, $query);

if (mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
    echo json_encode($user_data); 
} else {
    echo json_encode(["error" => "Dados do usuário não encontrados"]);
}
?>
