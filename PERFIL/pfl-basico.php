<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Jogador - RPG</title>
    <style>
        /* Reset e estilo básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #171a21;
            color: #d1d1d1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 70%;
            max-width: 1300px;
            margin-top: 30px;
            background-color: #2e2f36;
            border-radius: 12px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            color: #fff;
            display: flex;
            flex-direction: column;
        }

        .side-container {
            width: 30%;
            background-color: #2e2f36;
            border-radius: 12px;
            margin-left: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Header (Banner e Avatar) */
        .header {
            background-color: #1b1e22;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            border-bottom: 2px solid #333;
        }

        .header .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-image: url('https://via.placeholder.com/120');
            background-size: cover;
            background-position: center;
        }

        .header .details {
            display: flex;
            flex-direction: column;
        }

        .header .details h1 {
            font-size: 2rem;
            margin-bottom: 5px;
            color: #fff;
        }

        .header .details .Detalhes {
            font-size: 1.2rem;
            color: #a8a8a8;
        }

        /* Seções do Perfil */
        .profile-sections {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
            padding: 20px;
            width: 100%;
        }

        /* Estilo das seções */
        .section {
            background-color: #3b3f47;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }

        .section h2 {
            font-size: 1.6rem;
            margin-bottom: 10px;
            color: #fff;
        }

        .section p {
            margin-bottom: 10px;
        }

        .stats ul {
            list-style: none;
            font-size: 1.1rem;
        }

        .stats li {
            margin-bottom: 8px;
            color: #ccc;
        }

        /* Inventário */
        .inventory ul {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 10px;
        }

        .inventory li {
            background-color: #4a4f58;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }

        .inventory img {
            width: 50px;
            height: 50px;
            margin-bottom: 5px;
        }

        /* Lista de Amigos */
        .friends, .suggested-friends {
            background-color: #3b3f47;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }

        .friends h2, .suggested-friends h2 {
            font-size: 1.6rem;
            color: #fff;
            margin-bottom: 10px;
        }

        .friends ul, .suggested-friends ul {
            list-style: none;
            max-height: 300px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .friends li, .suggested-friends li {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px;
            border-bottom: 1px solid #444;
        }

        .friends li img, .suggested-friends li img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .friends li span, .suggested-friends li span {
            font-size: 1.1rem;
            color: #d1d1d1;
        }

        /* Estilo da Barra de Rolagem */
        ::-webkit-scrollbar {
            width: 12px;
            background-color: #2e2f36;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #555;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #777;
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

            .friends ul, .suggested-friends ul {
                max-height: 150px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <div class="avatar"></div>
            <div class="details">
                <h1 id="nome">João RPG</h1>
                <p class="Detalhes" id="detalhes">Mago - Nível 10</p>
            </div>
        </div>

        <!-- Seções do Perfil -->
        <div class="profile-sections">
            <!-- Dados do Jogador -->
            <div class="section">
                <h2>Dados</h2>
                <p><strong>Sessões Jogadas:</strong></p><p id="valorsessão">0</p>
                <p><strong>Críticos:</strong></p><p id="valorcritico">0</p>
                <p><strong>Falhas:</strong></p><p id="valorfalhas">0</p>
                <p><strong>Oneshots:</strong></p><p id="valoroneshot">0</p>
                <p><strong>Campanhas:</strong></p><p id="valorcampanha">0</p>
            </div>

            <!-- Estatísticas do Jogador -->
            <div class="section stats">
                <h2>Estatísticas</h2>
                <ul>
                    <li><strong>Força:</strong> 10</li>
                    <li><strong>Agilidade:</strong> 12</li>
                    <li><strong>Inteligência:</strong> 18</li>
                    <li><strong>Carisma:</strong> 14</li>
                </ul>
            </div>

            <!-- Inventário do Jogador -->
            <div class="section inventory">
                <h2>Histórias Jogadas</h2>
                <ul>
                    <li><img src="https://via.placeholder.com/50"><p>Noite Escura</p></li>
                    <li><img src="https://via.placeholder.com/50"><p>Empíreo</p></li>
                    <li><img src="https://via.placeholder.com/50"><p>Thanatos</p></li>
                    <li><img src="https://via.placeholder.com/50"><p>Solarens</p></li>
                    <li><img src="https://via.placeholder.com/50"><p>Noite Escura</p></li>
                    <li><img src="https://via.placeholder.com/50"><p>Empíreo</p></li>
                    <li><img src="https://via.placeholder.com/50"><p>Thanatos</p></li>
                    <li><img src="https://via.placeholder.com/50"><p>Solarens</p></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Lateral com lista de amigos e sugestões -->
    <div class="side-container">
        <!-- Amigos -->
        <div class="friends">
            <h2>Amigos</h2>
            <ul>
                <li>
                    <img src="https://via.placeholder.com/40" alt="Amigo 1">
                    <span>Amigo 1</span>
                </li>
            </ul>
        </div>

        <!-- Amigos que Talvez Conheça -->
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
</html>
