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
                <a><i class="bi bi-moon"></i></a>
                <div class="btn-contato">
                    <a onclick="window.location.href='../lobby.php'"><button>Retornar</button></a>
                    <a onclick="window.location.href='../lobby.php'"><button>Filtro</button></a>
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
        $(document).ready(function(){
            $("#searchInput").keyup(function(){
                var input = $(this).val().trim(); 
                if(input != ""){
                    $.ajax({
                        url: "function.php",
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
            let LocalImagem = `../Imagens/PlaceHolder.png`;

            sessionStorage.setItem('nome', nome);
            sessionStorage.setItem('tipo', tipo);
            sessionStorage.setItem('alcance', alcance);
            sessionStorage.setItem('descricao', descricao);
            sessionStorage.setItem('historia', historia);
            sessionStorage.setItem('entidade', entidade);
            sessionStorage.setItem('teste', teste);
            sessionStorage.setItem('dano', dano);
            sessionStorage.setItem('critico', critico);
            sessionStorage.setItem('peso', peso);
            sessionStorage.setItem('tipoDano', tipoDano);
            sessionStorage.setItem('venda', venda);
            sessionStorage.setItem('defesa', defesa);
            sessionStorage.setItem('penalidade', penalidade);
            sessionStorage.setItem('LocalImagem', LocalImagem);
            sessionStorage.setItem('acao', acao);
            sessionStorage.setItem('efeito', efeito);
            switch (tipo){
                case "Arma":
                    window.location.href = 'Valores/ArmaPadrão.html'
                    break;
                case "Material":
                    window.location.href = 'Valores/MaterialPadrão.html'
                    break;
                case "Poção":
                    window.location.href = 'Valores/PoçãoPadrão.html'
                    break;
                case "Moeda":
                    window.location.href = 'Valores/MoedaPadrão.html'
                    break;
                case "Itens":
                    window.location.href = 'Valores/ItensPadrão.html'
                    break;
            }
            
        }
    </script>
</body>
</html>
<script>
    window.addEventListener("scroll", function () {
    const header = document.querySelector('#header');
    header.classList.toggle('rolagem', window.scrollY > 50);
});


const particleContainer = document.createElement('div');
particleContainer.classList.add('particle-container');
document.body.appendChild(particleContainer);

const particleCount = 42;

function createParticle() {
    const particle = document.createElement('div');
    particle.classList.add('particle');
    
    particle.style.left = `${Math.random() * 100}vw`;
    particle.style.animationDuration = `${1 + Math.random() * 2}s`;
    particle.style.animationDelay = `${Math.random() * 5}s`;

    particleContainer.appendChild(particle);

    particle.addEventListener('animationend', () => {
        particle.remove();
        createParticle(); 
    });
}

for (let i = 0; i < particleCount; i++) {
    createParticle();
}

</script>
