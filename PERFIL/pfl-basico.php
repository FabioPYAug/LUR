<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Jogador - RPG</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 1400px;
            margin-top: 30px;
            background-color: #23272a;
            border-radius: 15px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.6);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transform: scale(1);
            transition: all 0.3s ease-in-out;
        }

        .side-container {
            width: 28%;
            background-color: #2a2f38;
            border-radius: 12px;
            margin-left: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease-in-out;
        }

        .side-container:hover {
            background-color: #353c45;
        }

        /* Header (Banner e Avatar) */
        .header {
            background-color: #1b1e22;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            border-bottom: 2px solid #444;
        }

        .header .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-image: url('https://via.placeholder.com/120');
            background-size: cover;
            background-position: center;
            border: 3px solid #ffcc00;
            box-shadow: 0px 0px 12px rgba(255, 204, 0, 0.6);
            transition: all 0.3s ease-in-out;
        }

        .header .avatar:hover {
            transform: scale(1.1);
        }

        .header .details {
            display: flex;
            flex-direction: column;
            color: #f1f1f1;
        }

        .header .details h1 {
            font-size: 2rem;
            margin-bottom: 5px;
            color: #ffcc00;
        }

        .header .details .Detalhes {
            font-size: 1.2rem;
            color: #b2b2b2;
        }

        .header .details #skin {
            margin-left: auto;
            /* Isso garante que "skin" fique à direita */
        }

        /* Seções do Perfil */
        .profile-sections {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
            padding: 30px;
            width: 100%;
        }

        /* Estilo das seções */
        .section {
            background-color: #2e3338;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .section:hover {
            background-color: #3a4348;
        }

        .section h2 {
            font-size: 1.7rem;
            margin-bottom: 10px;
            color: #ffcc00;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
        }

        .section p {
            margin-bottom: 10px;
            color: #b2b2b2;
        }

        .stats ul {
            list-style: none;
            font-size: 1.2rem;
        }

        .stats li {
            margin-bottom: 8px;
            color: #ccc;
        }

        /* Inventário */
        .inventory ul {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
            gap: 15px;
        }

        .inventory li {
            background-color: #444d57;
            padding: 12px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .inventory li:hover {
            background-color: #5a646c;
            transform: translateY(-5px);
        }

        .inventory img {
            width: 60px;
            height: 60px;
            margin-bottom: 5px;
        }

        /* Lista de Amigos */
        .friends,
        .suggested-friends {
            background-color: #2e3338;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .friends h2,
        .suggested-friends h2 {
            font-size: 1.6rem;
            color: #ffcc00;
            margin-bottom: 10px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
        }

        .friends ul,
        .suggested-friends ul {
            list-style: none;
            max-height: 300px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .friends li,
        .suggested-friends li {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px;
            border-bottom: 1px solid #444;
            transition: background-color 0.3s ease;
        }

        .friends li:hover,
        .suggested-friends li:hover {
            background-color: #3a4348;
        }

        .friends li img,
        .suggested-friends li img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        .friends li span,
        .suggested-friends li span {
            font-size: 1.2rem;
            color: #d1d1d1;
        }

        /* Estilo da Barra de Rolagem */
        ::-webkit-scrollbar {
            width: 10px;
            background-color: #2e2f36;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #666;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #888;
        }

        ::-webkit-scrollbar-track {
            background-color: #2e2f36;
        }

        /* Rodapé */
        .footer {
            background-color: #1b1e22;
            text-align: center;
            padding: 15px;
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .profile-sections {
                grid-template-columns: 1fr;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .header .avatar {
                margin-bottom: 15px;
            }

            .header .details h1 {
                font-size: 1.6rem;
            }

            .side-container {
                width: 100%;
                margin-left: 0;
                margin-top: 20px;
            }

            .friends ul,
            .suggested-friends ul {
                max-height: 150px;
            }
        }

        /* Estilo do Select */
.styled-select {
    background-color: #2e3338;
    color: #e0e0e0;
    font-size: 1.2rem;
    border: none;
    border-radius: 8px;
    padding: 10px;
    width: 100%;
    outline: none;
    appearance: none;
    transition: all 0.3s ease;
}

.styled-select:hover {
    background-color: #353c45;
}   

.styled-select:focus {
    background-color: #444d57;
    box-shadow: 0 0 5px rgba(255, 204, 0, 0.8);
}

.label {
    font-size: 1.1rem;
    color:#e0e0e0;
    margin-bottom: 10px;
    display: inline-block;
}

.carrossel-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    margin-top: 20px;
}

.carrossel {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.token {
    min-width: 300px;
    margin-right: 20px;
    border-radius: 15px;
    background-color: #2e3338;
    padding: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
    color: #fff;
    text-align: center;
    flex-shrink: 0;
}

.token:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.3);
}

.token img {
    width: 100%;
    border-radius: 10px;
    max-height: 200px;
    object-fit: cover;
    margin-bottom: 10px;
}

.token p {
    margin: 5px 0;
}

/* Botões de Navegação do Carrossel */
.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: #ffcc00;
    font-size: 2rem;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    z-index: 10;
}

.carousel-btn.left {
    left: 10px;
}

.carousel-btn.right {
    right: 10px;
}

.carousel-btn:hover {
    background-color: rgba(0, 0, 0, 0.7);
}

    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <div class="avatar"></div>
            <div class="details">
                <h1 id="nome">João RPG</h1>
                <p class="Detalhes" id="detalhes">descrição</p>
            </div>
        </div>

        <!-- Seções do Perfil -->
        <div class="profile-sections">
            <!-- Dados do Jogador -->
            <div class="section">
                <h2>Dados</h2>
                <p><strong>Sessões Jogadas:</strong></p>
                <p id="valorsessão">0</p>
                <p><strong>Críticos:</strong></p>
                <p id="valorcritico">0</p>
                <p><strong>Falhas:</strong></p>
                <p id="valorfalhas">0</p>
                <p><strong>Oneshots:</strong></p>
                <p id="valoroneshot">0</p>
                <p><strong>Campanhas:</strong></p>
                <p id="valorcampanha">0</p>
            </div>

            <!-- Personagens -->
            <div class="section personagens">
                <h2>Personagens</h2>
                <label for="personagem-select" class="label">Selecione um Personagem:</label>
                <select id="personagem-select" class="styled-select">
                    <option value="personagem1">Personagem 1</option>
                    <option value="personagem2">Personagem 2</option>
                </select>

                <div class="carrossel-container">
                    <div class="carrossel" id="carrossel">
                        <div class="token">
                            <img src="https://via.placeholder.com/300" alt="Token 1">
                            <p>Período: 2025</p>
                            <p>Apelido: O Valente</p>
                        </div>
                        <div class="token">
                            <img src="https://via.placeholder.com/300" alt="Token 2">
                            <p>Período: 2024</p>
                            <p>Apelido: O Mágico</p>
                        </div>
                    </div>
                    <button class="carousel-btn left" onclick="moveCarousel(-1)">&#8249;</button>
                    <button class="carousel-btn right" onclick="moveCarousel(1)">&#8250;</button>
                </div>
            </div>

            <div class="section inventory">
                <h2>Histórias Jogadas</h2>
                <ul>
                    <li><img src="https://via.placeholder.com/50">
                        <p>Noite Escura</p>
                    </li>
                    <li><img src="https://via.placeholder.com/50">
                        <p>Empíreo</p>
                    </li>
                    <li><img src="https://via.placeholder.com/50">
                        <p>Thanatos</p>
                    </li>
                    <li><img src="https://via.placeholder.com/50">
                        <p>Solarens</p>
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

    <script>
        let currentIndex = 0;

        function moveCarousel(direction) {
            const carrossel = document.getElementById('carrossel');
            const totalTokens = carrossel.children.length;
            currentIndex = (currentIndex + direction + totalTokens) % totalTokens;
            const newTransformValue = -currentIndex * (300 + 20);
            carrossel.style.transform = `translateX(${newTransformValue}px)`;
        }
    </script>
</body>

</html>