<?php
include 'style-inv.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Noite Escura - Menu de Busca</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <header id="header">
        <div class="container">
            <div class="flex">
                <a><i class="bi bi-moon"></i></a>
                <div class="btn-contato">
                    <a onclick="window.location.href='../lobby.php'"><button>Retornar</button></a>
                    <a><button>Filtro</button></a>
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
        <div id="resultado">
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#searchInput").keyup(function() {
                        var input = $(this).val().trim();
                        if (input != "") {
                            $.ajax({
                                url: "function-inv.php",
                                method: "POST",
                                data: {
                                    input: input
                                },
                                success: function(data) {
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

                function valores(nome, tipo, alcance, descricao, historia, entidade, teste, dano, critico, peso, tipoDano, venda, defesa, penalidade, acao, efeito) {
                    let LocalImagem = `../../Imagens/ITENS NE/${nome}.png`;

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

                    switch (tipo) {
                        case "Arma":
                            if(entidade == "Sol"){
                                if(nome == "Parisa"){
                                    window.location.href = 'Valores/Parisa.html'
                                }else{
                                    window.location.href = 'Valores/ArmaSol.html'
                                }
                            } 
                            else if(entidade == "Lua"){
                                window.location.href = 'Valores/ArmaLua.html'
                            }
                            else{
                                window.location.href = 'Valores/ArmaPadrão.html'
                            }
                            break;
                        case "Material":
                            window.location.href = 'Valores/MaterialPadrão.html'
                            break;
                        case "Poção":
                            if(entidade == "Lua"){
                                window.location.href = 'Valores/PoçãoLua.html'
                            } else if(entidade == "Sol"){
                                if(nome == "Poção dos Sentidos Enfadonhos"){
                                    window.location.href = 'Valores/PoçãoBobby.html'
                                }else{
                                    window.location.href = 'Valores/PoçãoSol.html'
                            }}else{
                                window.location.href = 'Valores/PoçãoPadrão.html'
                            }
                            break;
                        case "Moeda":
                            window.location.href = 'Valores/MoedaPadrão.html'
                            break;
                        case "Item":
                            if(entidade == "Lua"){
                                window.location.href = 'Valores/ItensLua.html'
                            } else if(entidade == "Sol"){
                                if(nome == ""){
                                    window.location.href = 'Valores/ItensBobby.html'
                                }else{
                                    window.location.href = 'Valores/ItensSol.html'
                                }
                                window.location.href = 'Valores/ItensLua.html'
                            }else{
                                window.location.href = 'Valores/ItensPadrão.html'
                            }
                            break;
                        case "Armadura":
                            window.location.href = 'Valores/ArmaduraPadrão.html'
                            break;
                    }

                }
                
            </script>
        </div>
    </section>
</body>

</html>
<script>
    window.addEventListener("scroll", function() {
    const header = document.querySelector('#header');
    if (window.scrollY > 500) {
        header.classList.add('rolagem');
    } else {
        header.classList.remove('rolagem');
    }
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