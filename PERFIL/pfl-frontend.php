<?php
include('verificaLogin.php');

if (!isset($_SESSION['us_ID'])) {
    header("Location: login.php"); 
    exit;
}

include 'Skins/pfl-basico.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Perfil do Jogador - RPG</title>
</head>

<body>
    <?php
    include 'pfl-script.php';
    ?>
    <div class="container">
        <div class="header">
            <div class="avatar"></div>
            <div class="details">
                <h1 id="nome">João RPG</h1>
                <p class="Detalhes" id="detalhes">descrição</p>
                <button id="logoutBtn">Logout</button>
            </div>
        </div>

        <!-- Seções do Perfil -->
        <div class="profile-sections">

            <!-- Dados do Jogador -->
            <div class="section">
                <h2>Dados</h2>
                <p><strong>Sessões Jogadas:</strong></p>
                <p id="valorsessão">0</p>
                <p><strong>Oneshots:</strong></p>
                <p id="valoroneshot">0</p>
                <p><strong>Campanhas:</strong></p>
                <p id="valorcampanha">0</p>
                <!-- Gráfico de Pizza -->
                <div class="pie-chart-container">
                    <canvas id="pizza-chart"></canvas>
                </div>
            </div>


            <!-- Personagens -->
            <div class="section personagens">
                <h2>Personagens</h2>
                <label for="personagem-select" class="label">Selecione um Personagem:</label>
                <select id="personagem-select" class="styled-select">
                    <option value="1">Personagem 1</option>
                </select>
                <div class="carrossel-container">
                    <div class="carrossel" id="carrossel">
                        <div class="token" data-personagem="1">
                            <img src="https://via.placeholder.com/300" alt="Token 1">
                            <p class="periodo">Período</p>
                            <p class="nomeskin">Carlos</p>
                        </div>
                    </div>
                    <button class="carousel-btn left" onclick="moveCarousel(-1)">&#8249;</button>
                    <button class="carousel-btn right" onclick="moveCarousel(1)">&#8250;</button>
                </div>
            </div>



            <div class="section inventory">
                <h2>Histórias Jogadas</h2>
                <ul>
                    <li>
                        <img src="Icons/Noite Escura.png" alt="Noite Escura">
                        <p>Noite Escura</p>
                    </li>
                    <li>
                        <img src="Icons/Noite Escura.png" alt="Noite Escura">
                        <p>Noite Escura</p>
                    </li>
                    <li>
                        <img src="Icons/Noite Escura.png" alt="Noite Escura">
                        <p>Noite Escura</p>
                    </li>
                    <li>
                        <img src="Icons/Noite Escura.png" alt="Noite Escura">
                        <p>Noite Escura</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Lateral com lista de amigos e sugestões -->
    <div class="side-container">
        <div class="friends">
            <h2>Amigos</h2>
            <ul>
                <li>
                    <img src="https://via.placeholder.com/40" alt="Amigo 1">
                    <span>Amigo 1</span>
                </li>
            </ul>
        </div>
        <div class="suggested-friends">
            <h2>Talvez Conheça</h2>
            <ul>
                <li>
                    <img src="https://via.placeholder.com/40" alt="Amigo Sugerido 1">
                    <span>Amigo Sugerido 1</span>
                </li>
            </ul>
        </div>
    </div>
</body>

<script>
    $('#logoutBtn').on('click', function() {
    $.ajax({
        url: 'logout.php',
        type: 'GET',
        success: function() {
            window.location.href = 'login.php';
        },
        error: function(xhr, status, error) {
            console.error('Erro ao tentar deslogar: ', error);
        }
    });
});


    var criticos;
    var falhas;
    carregarDadosUsuario()
    function carregarDadosUsuario() {
    $.ajax({
        url: 'dadosuser.php',
        type: 'GET',
        dataType: 'json', 
        cache: false,
        success: function(response) {
            console.log(response); 
            if (response.error) {
                console.error('Erro: ' + response.error);
            } else {
                $('#nome').text(response.us_login); 
                $('#detalhes').text('Descrição: ' + response.us_criticos); 
                $('#valorsessão').text(response.us_sessoes);
                $('#valoroneshot').text(response.us_oneshots);
                $('#valorcampanha').text(response.us_campanhas);
                criticos = response.us_criticos;
                falhas = response.us_falhas

                criarGraficoPizza(criticos, falhas);
            }
        },
        error: function(xhr, status, error) {
            console.error('Erro na requisição AJAX: ', status, error);
        }
    });
}

</script>  
</html>