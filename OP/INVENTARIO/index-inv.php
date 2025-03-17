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
    <title>Ordem Paranormal - Arsenal</title>
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
                $(document).ready(function () {
                    $("#searchInput").keyup(function () {
                        var input = $(this).val().trim();
                        if (input != "") {
                            $.ajax({
                                url: "function-inv.php",
                                method: "POST",
                                data: {
                                    input: input
                                },
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

                function valores(
                    op_nome, op_tipo, op_alcance, op_descricao, op_historia, op_efeito, op_token,
                    op_elemento, op_categoria_detalhes, op_custo, op_duracao, op_condicao,
                    op_resistencia, op_alvo, op_dano, op_peso, op_categoria_status,
                    op_padrao, op_discente, op_verdadeiro, op_circulo
                ) {
                    let LocalImagem = `../../Imagens/ITENS NE/${op_nome}.png`;

                    sessionStorage.setItem('op_nome', op_nome);
                    sessionStorage.setItem('op_tipo', op_tipo);
                    sessionStorage.setItem('op_alcance', op_alcance);
                    sessionStorage.setItem('op_descricao', op_descricao);
                    sessionStorage.setItem('op_historia', op_historia);
                    sessionStorage.setItem('op_efeito', op_efeito);
                    sessionStorage.setItem('op_token', op_token);
                    sessionStorage.setItem('op_elemento', op_elemento);
                    sessionStorage.setItem('op_categoria_detalhes', op_categoria_detalhes);
                    sessionStorage.setItem('op_custo', op_custo);
                    sessionStorage.setItem('op_duracao', op_duracao);
                    sessionStorage.setItem('op_condicao', op_condicao);
                    sessionStorage.setItem('op_resistencia', op_resistencia);
                    sessionStorage.setItem('op_alvo', op_alvo);
                    sessionStorage.setItem('op_dano', op_dano);
                    sessionStorage.setItem('op_peso', op_peso);
                    sessionStorage.setItem('op_categoria_status', op_categoria_status);
                    sessionStorage.setItem('op_padrao', op_padrao);
                    sessionStorage.setItem('op_discente', op_discente);
                    sessionStorage.setItem('op_verdadeiro', op_verdadeiro);
                    sessionStorage.setItem('op_circulo', op_circulo);
                    sessionStorage.setItem('LocalImagem', LocalImagem);

                    console.log(op_tipo)

                    switch (op_tipo) {
                        case "Item":
                            if (op_elemento == "Sangue") {
                                window.open('VALORES/SangueItem.php')
                            } else if (op_elemento == "Conhecimento") {
                                window.open('VALORES/ConhecimentoItem.php')
                            } else if (op_elemento == "Morte") {
                                window.open('VALORES/MorteItem.php')
                            } else if (op_elemento == "Energia") {
                                window.open('VALORES/3n3rg14Item.php')
                            } else if (op_elemento == "Medo") {
                                window.open('VALORES/MedoItem.php')
                            } else {
                                window.open('VALORES/PadraoItem.php')
                            }
                            break;
                        case "Equipamento":
                            if (op_elemento == "Sangue") {
                                window.open('VALORES/SangueEquipamento.php')
                            } else if (op_elemento == "Conhecimento") {
                                window.open('VALORES/ConhecimentoEquipamento.php')
                            } else if (op_elemento == "Morte") {
                                window.open('VALORES/MorteEquipamento.php')
                            } else if (op_elemento == "Energia") {
                                window.open('VALORES/3n3rg14Equipamento.php')
                            } else if (op_elemento == "Medo") {
                                window.open('VALORES/MedoEquipamento.php')
                            } else {
                                window.open('VALORES/PadraoEquipamento.php')
                            }
                            break;
                        case "Arma":
                            if (op_elemento == "Sangue") {
                                window.open('VALORES/SangueArma.php')
                            } else if (op_elemento == "Conhecimento") {
                                window.open('VALORES/ConhecimentoArma.php')
                            } else if (op_elemento == "Morte") {
                                window.open('VALORES/MorteArma.php')
                            } else if (op_elemento == "Energia") {
                                window.open('VALORES/3n3rg14Arma.php')
                            } else if (op_elemento == "Medo") {
                                window.open('VALORES/MedoArma.php')
                            } else {
                                window.open('VALORES/PadraoArma.php')
                            }
                            break;
                        case "Ritual":
                            if (op_elemento == "Sangue") {
                                window.open('VALORES/SangueRitual.php')
                            } else if (op_elemento == "Conhecimento") {
                                window.open('VALORES/ConhecimentoRitual.php')
                            } else if (op_elemento == "Morte") {
                                window.open('VALORES/MorteRitual.php')
                            } else if (op_elemento == "Energia") {
                                window.open('VALORES/3n3rg14Ritual.php')
                            } else if (op_elemento == "Medo") {
                                window.open('VALORES/MedoRitual.php')
                            } else {
                                window.open('VALORES/PadraoRitual.php')
                            }
                            break;
                        case "Habilidade":
                            if (op_elemento == "Sangue") {
                                window.open('VALORES/SangueHabilidade.php')
                            } else if (op_elemento == "Conhecimento") {
                                window.open('VALORES/ConhecimentoHabilidade.php')
                            } else if (op_elemento == "Morte") {
                                window.open('VALORES/MorteHabilidade.php')
                            } else if (op_elemento == "Energia") {
                                window.open('VALORES/3n3rg14Habilidade.php')
                            } else if (op_elemento == "Medo") {
                                window.open('VALORES/MedoHabilidade.php')
                            } else {
                                window.open('VALORES/PadraoHabilidade.php')
                            }
                            break;
                    }
                }
            </script>
        </div>
    </section>
</body>

</html>