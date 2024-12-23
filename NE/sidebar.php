<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
</head>

<body>
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="https://jbfarrow.com">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-globe fa-2x"></i>
                    <span class="nav-text">Documentos</span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-comments fa-2x"></i>
                    <span class="nav-text">Inventário</span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-camera-retro fa-2x"></i>
                    <span class="nav-text">Galeria</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-film fa-2x"></i>
                    <span class="nav-text">Mapa</span>
                </a>
            </li>
            <ul class="logout">
                <li>
                    <a href="#">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">Perfil</span>
                    </a>
                </li>
            </ul>
    </nav>
</body>

</html>


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

    /* Sidebar */
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
        background-color: #333;
        color: #fff;
    }

    .main-menu .nav-text {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .main-menu:hover .nav-text {
        opacity: 1;
    }
</style>