<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria com Filtro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <svg id="undo-icon" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-linecap="round"
        stroke-linejoin="round" stroke-width="2" class="icon" onclick="window.location.href='../lobby.php'">
            <path d="M12 22 L2 12 L12 3 M2 12 L16 12 C24 12 29 18 29 28" />
        </svg>

        <ul class="controls">
            <li class="buttons" data-filter="Gerais">Gerais</li>
            <li class="buttons" data-filter="Conto">Conto</li>
            <li class="buttons" data-filter="Emotes">Emotes</li>
            <li class="buttons" data-filter="Minis">Minis</li>
            <li class="buttons" data-filter="Tokens">Tokens</li>
            <li class="buttons" data-filter="Memes">Memes</li>
        </ul>
    </header>

    <div class="gallery">
        <div class="image-container"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            // Carregar imagens do JSON
            $.getJSON('galeria.json', function(data) {
                data.forEach(function(image) {
                    let imgElement = `<a href="${image.url}" class="image ${image.categoria}">
                                        <img src="${image.url}" alt="Imagem">
                                      </a>`;
                    $('.image-container').append(imgElement);
                });

                // Função de filtragem
                $('.buttons').click(function() {
                    $(this).addClass('active').siblings().removeClass('active');
                    var filter = $(this).data('filter');

                    if (filter === 'all') {
                        $('.image').show(400);
                    } else {
                        $('.image').hide(200).filter('.' + filter).show(400);
                    }
                });

                // Inicializar Magnific Popup
                $('.gallery').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });

            // Função para criar estrelas
            function createStar() {
                const star = document.createElement("div");
                star.className = "star";
                document.body.appendChild(star);
                star.style.left = Math.random() * innerWidth + "px"; 
                star.style.fontSize = (9 + Math.random() * 12) + "px";

                const duration = 2 + Math.random() * 3;
                star.style.animationDuration = duration + "s"; 
                star.innerHTML = '<i class="fas fa-star"></i>'; 
                setTimeout(() => {
                    document.body.removeChild(star);    
                }, (2000 + duration * 1000));
            }

            setInterval(createStar, 150);

            // Efeito de rolagem para o cabeçalho
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('header').addClass('scrolled');
                } else {
                    $('header').removeClass('scrolled');
                }
            });
        });
    </script>

</body>
</html>


<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(to bottom, #1c0130, #000);
            min-height: 100vh;
            overflow-y: auto; 
            scroll-behavior: smooth; 
            position: relative; 
        }

        /* Estilo da barra de rolagem */
        ::-webkit-scrollbar {
            width: 12px; 
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(155, 89, 182, 0.8); /* Cor do "thumb" */
            border-radius: 6px; 
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: rgba(142, 68, 173, 0.8); /* Cor do "thumb" ao passar o mouse */
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1); /* Cor da pista da barra de rolagem */
            border-radius: 6px; 
        }

        /* Estilo da barra de rolagem para Firefox */
        * {
            scrollbar-width: thin; 
            scrollbar-color: rgba(155, 89, 182, 0.8) rgba(255, 255, 255, 0.1);
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
            background: rgba(28, 1, 48, 0.8);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            transition: background 0.3s ease; 
        }

        header.scrolled {
            background: rgba(28, 1, 48, 1);
        }

        .icon {
            width: 52px;
            height: 52px;
            color: white; 
            cursor: pointer; 
            transition: color 0.3s ease;
        }

        .icon:hover {
            color: rgb(255, 0, 234); 
        }

        .controls {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            padding: 0;
            list-style-type: none;
        }

        .controls .buttons {
            height: 45px;
            width: 150px;
            background: #a68bdb; 
            color: #fff; 
            font-size: 20px;
            line-height: 40px;
            cursor: pointer;
            margin: 0 10px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: background 0.3s, color 0.3s;
        }

        .controls .buttons.active {
            background: #ba55d3; 
            color: #fff;
        }

        .gallery {
            padding-top: 80px;
            min-height: 100vh;
            padding-bottom: 100px;
            position: relative;
            z-index: 1;
        }

        .gallery .image-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .gallery .image-container .image {
            height: auto; /* Altura automática */
            width: calc(33.33% - 40px); /* Ajuste de largura com margem */
            overflow: hidden;
            border: 7px solid #513e79; 
            box-shadow: 0 3px 10px rgba(148, 0, 211, 0.5);
            margin: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
        }

        .gallery .image-container .image:hover {
            transform: scale(1.05); 
            box-shadow: 0 0 15px rgba(148, 0, 211, 1);
        }

        .gallery .image-container .image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 0.3s ease; 
        }

        .gallery .image-container .image:hover img {
            transform: scale(1.1); 
        }

        .star {
            position: fixed;
            bottom: -20px; 
            color: rgba(199, 68, 255, 0.9);
            font-size: 30px;
            animation: animate 5s linear forwards;
            z-index: 0; 
            text-shadow: 0 0 20px rgb(239, 174, 255), 0 0 30px rgba(120, 34, 156, 0.5);
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            80% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }

        @media screen and (max-width: 900px) {
            .gallery .image-container .image {
                width: calc(50% - 40px); /* Ajusta para duas colunas */
            }
        }

        @media screen and (max-width: 600px) {
            .gallery .image-container .image {
                width: calc(100% - 40px); /* Ajusta para uma coluna */
            }
            .star {
                font-size: 15px;
            }
            header {
                flex-direction: column; /* Empilha os elementos do cabeçalho */
                align-items: flex-start; /* Alinha os itens à esquerda */
            }
        }

    #sidebar {
        box-sizing: border-box;
        height: 100vh;
        width: 250px;
        padding: 5px 1em;
        background-color: var(--base-clr);
        border-right: 1px solid var(--line-clr);

        position: sticky;
        top: 0;
        align-self: start;
        transition: 300ms ease-in-out;
        overflow: hidden;
        text-wrap: nowrap;
    }

    #sidebar.close {
        padding: 5px;
        width: 60px;
    }

    #sidebar ul {
        list-style: none;
    }

    #sidebar>ul>li:first-child {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 16px;

        .logo {
            font-weight: 600;
        }
    }

    #sidebar ul li.active a {
        color: var(--accent-clr);

        svg {
            fill: var(--accent-clr);
        }
    }

    #sidebar a,
    #sidebar .dropdown-btn,
    #sidebar .logo {
        border-radius: .5em;
        padding: .85em;
        text-decoration: none;
        color: var(--text-clr);
        display: flex;
        align-items: center;
        gap: 1em;
    }

    .dropdown-btn {
        width: 100%;
        text-align: left;
        background: none;
        border: none;
        font: inherit;
        cursor: pointer;
    }

    #sidebar svg {
        flex-shrink: 0;
        fill: var(--text-clr);
    }

    #sidebar a span,
    #sidebar .dropdown-btn span {
        flex-grow: 1;
    }

    #sidebar a:hover,
    #sidebar .dropdown-btn:hover {
        background-color: var(--hover-clr);
    }

    #sidebar .sub-menu {
        display: grid;
        grid-template-rows: 0fr;
        transition: 300ms ease-in-out;

        >div {
            overflow: hidden;
        }
    }

    #sidebar .sub-menu.show {
        grid-template-rows: 1fr;
    }

    .dropdown-btn svg {
        transition: 200ms ease;
    }

    .rotate svg:last-child {
        rotate: 180deg;
    }

    #sidebar .sub-menu a {
        padding-left: 2em;
    }

    #toggle-btn {
        margin-left: auto;
        padding: 1em;
        border: none;
        border-radius: .5em;
        background: none;
        cursor: pointer;

        svg {
            transition: rotate 150ms ease;
        }
    }

    #toggle-btn:hover {
        background-color: var(--hover-clr);
    }

    main {
        padding: min(30px, 7%);
    }

    main p {
        color: var(--secondary-text-clr);
        margin-top: 5px;
        margin-bottom: 15px;
    }

    .container {
        border: 1px solid var(--line-clr);
        border-radius: 1em;
        margin-bottom: 20px;
        padding: min(3em, 15%);

        h2,
        p {
            margin-top: 1em
        }
    }

    @media(max-width: 800px) {
        body {
            grid-template-columns: 1fr;
        }

        main {
            padding: 2em 1em 60px 1em;
        }

        .container {
            border: none;
            padding: 0;
        }

        #sidebar {
            height: 60px;
            width: 100%;
            border-right: none;
            border-top: 1px solid var(--line-clr);
            padding: 0;
            position: fixed;
            top: unset;
            bottom: 0;

            >ul {
                padding: 0;
                display: grid;
                grid-auto-columns: 60px;
                grid-auto-flow: column;
                align-items: center;
                overflow-x: scroll;
            }

            ul li {
                height: 100%;
            }

            ul a,
            ul .dropdown-btn {
                width: 60px;
                height: 60px;
                padding: 0;
                border-radius: 0;
                justify-content: center;
            }

            ul li span,
            ul li:first-child,
            .dropdown-btn svg:last-child {
                display: none;
            }

            ul li .sub-menu.show {
                position: fixed;
                bottom: 60px;
                left: 0;
                box-sizing: border-box;
                height: 60px;
                width: 100%;
                background-color: var(--hover-clr);
                border-top: 1px solid var(--line-clr);
                display: flex;
                justify-content: center;

                >div {
                    overflow-x: auto;
                }

                li {
                    display: inline-flex;
                }

                a {
                    box-sizing: border-box;
                    padding: 1em;
                    width: auto;
                    justify-content: center;
                }
            }
        }
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(to bottom, #1c0130, #000);
        min-height: 100vh;
        overflow-y: auto;
        scroll-behavior: smooth;
        position: relative;
    }

    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: rgba(155, 89, 182, 0.8);
        border-radius: 6px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: rgba(142, 68, 173, 0.8);
    }

    ::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        /* Cor da pista da barra de rolagem */
        border-radius: 6px;
    }

    /* Estilo da barra de rolagem para Firefox */
    * {
        scrollbar-width: thin;
        scrollbar-color: rgba(155, 89, 182, 0.8) rgba(255, 255, 255, 0.1);
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 10;
        background: rgba(28, 1, 48, 0.8);
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        transition: background 0.3s ease;
    }

    header.scrolled {
        background: rgba(28, 1, 48, 1);
    }

    .icon {
        width: 52px;
        height: 52px;
        color: white;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .icon:hover {
        color: rgb(255, 0, 234);
    }

    .controls {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        padding: 0;
        list-style-type: none;
    }

    .controls .buttons {
        height: 45px;
        width: 150px;
        background: #a68bdb;
        color: #fff;
        font-size: 20px;
        line-height: 40px;
        cursor: pointer;
        margin: 0 10px;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
        text-align: center;
        transition: background 0.3s, color 0.3s;
    }

    .controls .buttons.active {
        background: #ba55d3;
        color: #fff;
    }

    .gallery {
        padding-top: 80px;
        min-height: 100vh;
        padding-bottom: 100px;
        position: relative;
        z-index: 1;
    }

    .gallery .image-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    .gallery .image-container .image {
        height: auto;
        /* Altura automática */
        width: calc(33.33% - 40px);
        /* Ajuste de largura com margem */
        overflow: hidden;
        border: 7px solid #513e79;
        box-shadow: 0 3px 10px rgba(148, 0, 211, 0.5);
        margin: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery .image-container .image:hover {
        transform: scale(1.05);
        box-shadow: 0 0 15px rgba(148, 0, 211, 1);
    }

    .gallery .image-container .image img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .gallery .image-container .image:hover img {
        transform: scale(1.1);
    }

    .star {
        position: fixed;
        bottom: -20px;
        color: rgba(199, 68, 255, 0.9);
        font-size: 30px;
        animation: animate 5s linear forwards;
        z-index: 0;
        text-shadow: 0 0 20px rgb(239, 174, 255), 0 0 30px rgba(120, 34, 156, 0.5);
    }

    @keyframes animate {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
        }

        80% {
            opacity: 1;
        }

        100% {
            transform: translateY(-100vh) rotate(360deg);
            opacity: 0;
        }
    }

    @media screen and (max-width: 900px) {
        .gallery .image-container .image {
            width: calc(50% - 40px);
            /* Ajusta para duas colunas */
        }
    }

    @media screen and (max-width: 600px) {
        .gallery .image-container .image {
            width: calc(100% - 40px);
            /* Ajusta para uma coluna */
        }

        .star {
            font-size: 15px;
        }

        header {
            flex-direction: column;
            /* Empilha os elementos do cabeçalho */
            align-items: flex-start;
            /* Alinha os itens à esquerda */
        }
    }
</style>