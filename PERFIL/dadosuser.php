<?php
session_start();
include('../NE/conexao.php');

if (!isset($_SESSION['us_ID'])) {
    echo json_encode(["error" => "Usuário não está logado!"]);
    exit;
}

$us_ID = $_SESSION['us_ID'];

$query_user = "
    SELECT u.us_ID, u.us_login, u.us_senha, 
           ud.us_criticos, ud.us_falhas, ud.us_sessoes, 
           ud.us_oneshots, ud.us_campanhas
    FROM users u
    INNER JOIN users_dados ud ON u.us_ID = ud.us_ID
    WHERE u.us_ID = '$us_ID'
";
$result_user = mysqli_query($conexao, $query_user);

if (!$result_user || mysqli_num_rows($result_user) == 0) {
    echo json_encode(["error" => "Dados do usuário não encontrados"]);
    exit;
}

$user_data = mysqli_fetch_assoc($result_user);

$query_campanhas = "
    SELECT * 
    FROM users_campanhas 
    WHERE us_ID = '$us_ID'
";
$result_campanhas = mysqli_query($conexao, $query_campanhas);

$campanhas_data = [];
if ($result_campanhas && mysqli_num_rows($result_campanhas) > 0) {
    while ($row = mysqli_fetch_assoc($result_campanhas)) {
        $campanhas_data[] = $row;
    }
}

// Combinar os dados do usuário e das campanhas
$response = [
    "user" => $user_data,
    "campanhas" => $campanhas_data
];

// Retornar a resposta como JSON
echo json_encode($response);
?>
