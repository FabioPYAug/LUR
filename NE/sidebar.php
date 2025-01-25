<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu com Submenu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
        @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

        .fa-2x {
            font-size: 2em;
        }

        .fa {
            position: relative;
            display: table-cell;
            width: 60px;
            height: 36px;
            text-align: center;
            vertical-align: middle;
            font-size: 20px;
        }

        .main-menu {
            background: #212121;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 60px;
            overflow: hidden;
            transition: width 0.3s ease;
            z-index: 1000;
            padding-top: 20px;
        }

        .main-menu:hover {
            width: 250px;
        }

        .main-menu li {
            display: block;
            width: 100%;
        }

        .main-menu a {
            color: #999;
            font-family: Arial, sans-serif;
            text-decoration: none;
            padding: 10px;
            display: block;
            transition: background-color 0.3s;
        }

        .main-menu a:hover {
            background-color: rgb(149, 123, 184);
            color: #fff;
        }

        .main-menu .nav-text {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .main-menu:hover .nav-text {
            opacity: 1;
        }

        .sub-menu {
            font-family: Arial, sans-serif;
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
            color: #ccc;
            font-size: 0.9em;
            font-family: Arial, sans-serif;
            padding: 8px 10px;
            display: block;
            transition: background-color 0.3s;
        }

        .sub-menu a:hover {
            background-color: #575757;
            color: #fff;
        }

        .sub-menu.open {
            max-height: 200px;
        }
    </style>
</head>

<body>
    <div class="area"></div>
    <nav class="main-menu" onmouseleave="closeAllSubmenus()">
        <li class="has-subnav">
            <a href="../DOCUMENTOS/index-doc.php">
                <i class="fa fa-book fa-2x"></i>
                <span class="nav-text">Documentos</span>
            </a>
        </li>
        <li>
            <a href="../INVENTARIO/index-inv.php">
                <i class="fa fa-shield fa-2x"></i>
                <span class="nav-text">Inventário</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" onclick="toggleSubmenu(this)">
                <i class="fa fa-camera-retro fa-2x"></i>
                <span class="nav-text">Galeria</span>
            </a>
            <ul class="sub-menu">
                <li><a href="../DOCUMENTOS/relatorios.php">Gerais</a></li>
                <li><a href="../DOCUMENTOS/guias.php">Conto</a></li>
                <li><a href="../DOCUMENTOS/contratos.php">Emotes</a></li>
                <li><a href="../DOCUMENTOS/relatorios.php">Minis</a></li>
                <li><a href="../DOCUMENTOS/guias.php">Tokens</a></li>
                <li><a href="../DOCUMENTOS/contratos.php">Memes</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-map fa-2x"></i>
                <span class="nav-text">Mapa</span>
            </a>
        </li>
        <ul class="logout">
            <li>
                <a href="#">
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">Perfil</span>
                </a>
            </li>
        </ul>
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
