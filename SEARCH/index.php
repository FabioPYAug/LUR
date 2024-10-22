<?php 
include 'style.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Noite Escura - Menu de Busca</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <header id="header">
        <div class="container">
            <div class="flex">
                <a href="#"><i class="bi bi-globe-americas"></i></a>
                <div class="btn-contato">
                    <a onclick="window.location.href='../lobby.php'"><button>Retornar</button></a>
                </div>
            </div>
        </div>
    </header>

    <section class="banner banner-1">
        <div class="centered-text">
            <h1>PESQUISA EM <span>NOITE ESCURA</span></h1>
        </div>
    </section>

    <section class="banner banner-2">
        
        <div class="search">
            <label for="searchInput">
                <span class="material-symbols-outlined"></span>
            </label>
            <input type="text" id="searchInput" placeholder="Pesquisar">
        </div>
        <div id="resultado"></div>
        <div class="spiral-container"></div>
    </section>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#searchInput").keyup(function () {
                var input = $(this).val().trim();
                if (input != "") {
                    $.ajax({
                        url: "function.php",
                        method: "POST",
                        data: { input: input },
                        success: function (data) {
                            if (data.trim() != "") {
                                $("#resultado").html(data).css("display", "block");
                            } else {
                                $("#resultado").css("display", "none");
                            }
                        }
                    });
                } else {
                    $("#resultado").css("display", "none");
                }
            });
        });
    </script>
</body>
</html>
<script>
    window.addEventListener("scroll", function () {
        let header = document.querySelector('#header')
        header.classList.toggle('rolagem', window.scrollY > 500)
    })
</script>
