<?php 
include 'style-doc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Solar Ancestral - Menu de Busca</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <header id="header">
        <div class="container">
            <div class="flex">
                <a><i class="bi bi-sun"></i></a>
                <div class="btn-contato">
                    <a onclick="window.location.href='../lobby.php'"><button>Retornar</button></a>
                    <a><button>Filtro</button></a>
                </div>
            </div>
        </div>
    </header>

    <section class="banner banner-1">
        <div class="centered-text">
            <h1>PESQUISA NA <span>ORIGEM SOLAR</span></h1>
        </div>
    </section>

    <section class="banner banner-2">
        <div class="search">
            <label for="searchInput">
                <span class="material-symbols-outlined"></span>
            </label>
            <input type="text" id="searchInput" placeholder="Pesquisar...">
        </div>
        <div id="resultado"></div>
        <div class="sun-symbol-container"></div>
    </section>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#searchInput").keyup(function(){
                var input = $(this).val().trim(); 
                if(input != ""){
                    $.ajax({
                        url: "functionDoc.php",
                        method: "POST",
                        data: {input: input},
                        success: function(data) {
                            if(data.trim() != "") {
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

        function valores(nome, tipo, alcance, descricao, historia, entidade, teste, dano, critico, peso, tipoDano, venda, defesa, penalidade, acao, efeito){
            let LocalImagem = `../Imagens/SolarPlaceholder.png`;

            sessionStorage.setItem('nome', nome);
            sessionStorage.setItem('tipo', tipo);
            sessionStorage.setItem('historia', relacao);
        }
    </script>
</body>
</html>

<script>
    window.addEventListener("scroll", function () {
        let header = document.querySelector('#header')
        header.classList.toggle('rolagem', window.scrollY > 500)
    })
</script>
