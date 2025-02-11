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
                </select>
                <div class="carrossel-container">
                    <div class="carrossel" id="carrossel">
                        <div class="token" data-personagem="1">
                        </div>
                    </div>
                    <button class="carousel-btn left" onclick="moveCarousel(-1)">&#8249;</button>
                    <button class="carousel-btn right" onclick="moveCarousel(1)">&#8250;</button>
                </div>
            </div>



            <div class="section inventory">
                <h2>Participações</h2>
                <ul>
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
            $('#nome').text(response.user.us_login);
            $('#detalhes').text('Descrição: ' + response.user.us_criticos);
            $('#valorsessao').text(response.user.us_sessoes);
            $('#valoroneshot').text(response.user.us_oneshots);
            $('#valorcampanha').text(response.user.us_campanhas);

            let criticos = response.user.us_criticos;
            let falhas = response.user.us_falhas;
            criarGraficoPizza(criticos, falhas);
            $('.inventory ul').empty();
            var valor = 0

            if (response.campanhas.length > 0) {
                response.campanhas.forEach(function(campanha) {
                    $('.inventory ul').append(`
                        <li>
                            <img src="${response.campanhas[valor].us_campanha}" alt="${response.campanhas[valor].us_nome}">
                            <p>${response.campanhas[valor].us_nome}</p>
                        </li>
                    `);
                valor++
                });
            } else {
                $('#campanhas').append('<p>Nenhuma campanha encontrada.</p>');
            }

            if (response.tokens.length > 0) {
                $('#personagem-select').empty(); 
                $('#carrossel').empty();
                var teste = ""
                response.tokens.forEach(function(token) {
                    if(teste == token.ID_token){
                        console.log("passei aq")
                    }else{
                        $('#personagem-select').append(`
                            <option value="${token.ID_token}">${token.us_personagem}</option>
                        `);
                    }
                    teste = token.ID_token
                    $('#carrossel').append(`
                        <div class="token" data-personagem="${token.ID_token}">
                            <img src="${token.us_imagem}" alt="Token ${token.ID_token}">
                            <p class="periodo">${token.us_periodo}</p>
                            <p class="nomeskin">${token.us_nome}</p>
                        </div>
                    `);
                    
                });
            } else {
                $('#personagem-select').append('<option value="">Nenhum personagem encontrado</option>');
            }
        }
    },
    error: function(xhr, status, error) {
        console.error('Erro na requisição AJAX: ', status, error);
    }
});

}

</script>  
</html>