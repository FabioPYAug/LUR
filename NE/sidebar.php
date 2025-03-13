<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu com Submenu e Imagens Aleatórias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Lara';
            src: url('../FONTES/NE.otf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }


        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .main-menu {
            margin-bottom: 15px;
            background: #000;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 80px;
            overflow: hidden;
            transition: width 0.3s ease, background-color 0.3s ease, color 0.3s ease;
            z-index: 1000;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-menu:hover {
            width: 250px;
            background: #fff;
            color: #000;
        }

        .main-menu li {
            display: block;
            width: 100%;
            margin-bottom: 20px;
        }

        .main-menu a {
            color: inherit;
            font-family: Lara, sans-serif;
            font-size: 20px;
            text-decoration: none;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s, color 0.3s;
        }

        .main-menu a:hover {
            background-color: #d3d3d3;
            color: inherit;
        }

        .main-menu .nav-text {
            opacity: 0;
            margin-left: 10px;
            transition: opacity 0.3s ease;
        }

        .main-menu:hover .nav-text {
            opacity: 1;
        }

        .sub-menu {
            font-family: Lara, sans-serif;
            list-style: none;
            padding-left: 20px;
            margin: 0;
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.3s ease;
        }

        .sub-menu li {
            margin: 0;
        }

        .sub-menu a {
            color: inherit;
            font-size: 0.9em;
            font-family: Lara, sans-serif;
            padding: 8px 10px;
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }

        .sub-menu a:hover {
            background-color: inherit;
            color: inherit;
        }

        .sub-menu.open {
            max-height: 200px;
        }

        .logout a {
            color: inherit;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .logout a:hover {
            background-color: inherit;
            color: inherit;
        }
    </style>
</head>

<body>
    <div class="area"></div>
    <nav class="main-menu" onmouseleave="closeAllSubmenus()">
        <li class="has-subnav">
            <a href="DOCUMENTOS/index-doc.php">
                <i class="fa fa-book fa-2x"></i>
                <span class="nav-text">Documentos</span>
            </a>
        </li>
        <li>
            <a href="INVENTARIO/index-inv.php">
                <i class="fa fa-inbox fa-2x"></i>
                <span class="nav-text">Inventário</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" onclick="toggleSubmenu(this)">
                <i class="fa fa-camera-retro fa-2x"></i>
                <span class="nav-text">Galeria</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-map fa-2x"></i>
                <span class="nav-text">Mapa</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-user fa-2x"></i>
                <span class="nav-text">Perfil</span>
            </a>
        </li>
    </nav>

    <script>
        function toggleSubmenu(element) {
            const submenu = element.nextElementSibling;
            if (submenu.classList.contains('open')) {
                submenu.classList.remove('open');
            } else {
                closeAllSubmenus();
                submenu.classList.add('open');
            }
        }

        function closeAllSubmenus() {
            const submenus = document.querySelectorAll('.sub-menu');
            submenus.forEach((submenu) => submenu.classList.remove('open'));
        }
    </script>
</body>

</html>