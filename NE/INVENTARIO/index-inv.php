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
    <?php include '../sidebar.php'; ?>

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

                function valores(nome, tipo, alcance, descricao, historia, entidade, teste, dano, critico, peso, tipoDano, venda, defesa, penalidade, acao, efeito, custo, requesito) {
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
                    sessionStorage.setItem('custo', custo);
                    sessionStorage.setItem('requesito', requesito);

                    switch (tipo) {
                        case "Arma":
                            if (entidade == "Sol") {
                                if (nome == "Parisa") {
                                    window.open('Valores/Parisa.html', '_blank')
                                } else {
                                    window.open('Valores/ArmaSol.html', '_blank')
                                }
                            } else if (entidade == "Lua") {
                                window.open('Valores/ArmaLua.html', '_blank')
                            } else {
                                 window.open('Valores/ArmaPadrão.html', '_blank')
                            }
                            break;
                        case "Material":
                            window.open('Valores/MaterialPadrão.html', '_blank')
                            break;
                        case "Poção":
                            if (entidade == "Lua") {
                                window.open('Valores/PoçãoLua.html', '_blank')
                            } else if (entidade == "Sol") {
                                if (nome == "Poção dos Sentidos Enfadonhos") {
                                    window.open('Valores/PoçãoBobby.html', '_blank')
                                } else {
                                    window.open('Valores/PoçãoSol.html', '_blank')
                                }
                            } else {
                                window.open('Valores/PoçãoPadrão.html', '_blank')
                            }
                            break;
                        case "Moeda":
                            window.open('Valores/MoedaPadrão.html', '_blank')
                            break;
                        case "Item":
                            if (entidade == "Lua") {
                                if (nome == "Fragmento Sol e Lua") {
                                    window.open('Valores/ItensColarSL.html', '_blank')
                                } else {
                                    window.open('Valores/ItensLua.html', '_blank')
                                }
                            } else if (entidade == "Sol") {
                                if (nome == "Tranca das Cartas") {
                                    window.open('Valores/ItensBobby.html', '_blank')
                                } else {
                                    window.open('Valores/ItensSol.html', '_blank')
                                }
                            } else {
                                window.open('Valores/ItensPadrão.html', '_blank')
                            }
                            break;
                        case "Armadura":
                            if (efeito != "-" || efeito != "") {
                                window.open('Valores/ArmaduraPadrãoEfeitos.html', '_blank')
                            } else {
                                window.open('Valores/ArmaduraPadrão.html', '_blank')
                            }
                            break;
                        case "Habilidade":
                            if (entidade == "Sol") {
                                window.open('Valores/HabilidadesSol.html', '_blank')
                            } else if (entidade == "Lua") {
                                window.open('Valores/HabilidadesLua.html', '_blank')
                            } else {
                                window.open('Valores/HabilidadesPadrão.html', '_blank')
                            }
                            break;
                        case "Magia":
                            window.open('Valores/MagiasPadrão.html', '_blank')
                            break;
                        case "Maldição":
                            window.open('Valores/MaldiçãoPadrão.html', '_blank')
                            break;
                        case "Bênção":
                            window.open('Valores/BênçãoPadrão.html', '_blank')
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