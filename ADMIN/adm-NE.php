<?php
// include("../NE/conexao.php");

// $query = "SELECT * FROM ne_dados";
// $result = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN NOITE ESCURA</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- SIDEBAR -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="adm-lobby.php">Lobby</a></li>
                <li><a href="adm-NE.php">Noite Escura</a></li>
                <li><a href="adm-OP.php">Ordem Paranormal</a></li>
                <li><a href="adm-SH.php">Sussurros Históricos</a></li>
            </ul>
        </div>

        <!-- CONTEÚDO -->
        <div id="page-content-wrapper">
            <h1 class="TITULO">NOITE ESCURA</h1>
            <div class="form-container">
                <!-- Formulário 1 -->
                <form action="index.html" method="post" id="formulario-dados">
                    <h1>Novos Dados</h1>
                    <label for="NE">Qual o Tipo de dados:</label>
                    <select id="NE" name="user_NE">
                        <optgroup label="Noite Escura">
                            <option></option>
                            <option value="NEInv">Inventário</option>
                            <option value="NEGal">Galeria</option>
                            <option value="NEDoc">Documento</option>
                        </optgroup>
                    </select>
                </form>

                <!-- Formulário 2 -->
                <form action="index.html" method="post">
                    <h1>Modificar Dados</h1>
                    <label for="op-NE">Qual o Tipo de dados:</label>
                    <select id="op-NE" name="user_op_NE">
                        <option></option>
                        <?php
                        //while ($row = mysqli_fetch_assoc($result)) {
                        //    echo "<option value='{$row['ID']}'>{$row['ID']} - {$row['nome']} - {$row['tipo']}</option>";
                        //}
                        ?>
                    </select>
                    <button type="submit">Abrir</button>
                </form>
            </div>
        </div>

        <!-- CADASTRO INVENTÁRIO -->
        <div id="cadastro-container-inv" class="modal-container" style="display: none;">
            <div class="uk-modal-dialog cadastro-box">
                <div class="uk-modal-header">
                    <h3 id="titulo-item">Cadastro Inventário</h3>
                </div>
                <div class="uk-modal-body">
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Nome</label>
                            <input type="text" class="uk-input" id="cadNomeInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Tipo</label>
                            <select id="cadTipo">
                                <option value="Item">Item</option>
                                <option value="Arma">Arma</option>
                                <option value="Armadura">Armadura</option>
                                <option value="Material">Material</option>
                                <option value="Moeda">Moeda</option>
                                <option value="Poção">Poção</option>
                                <option value="Habilidade">Habilidade</option>
                                <option value="Magia">Magia</option>
                                <option value="Maldição">Maldição</option>
                                <option value="Bênção">Bênção</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <label>Entidade</label>
                            <select id="cadEntidade">
                                <option></option>
                                <option value="Sol">Sol</option>
                                <option value="Lua">Lua</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <label>Alcance</label>
                            <select id="cadAlcance">
                                <option></option>
                                <option value="Toque">Toque</option>
                                <option value="Corpo a Corpo">Corpo a Corpo</option>
                                <option value="Curto">Curto</option>
                                <option value="Médio">Médio</option>
                                <option value="Longo">Longo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-body">
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Descrição</label>
                            <textarea class="uk-textarea" id="CadDescricao"></textarea>
                        </div>
                        <div style="flex: 1;">
                            <label>História</label>
                            <textarea class="uk-textarea" id="CadHistoria"></textarea>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-body">
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Teste</label>
                            <input type="text" class="uk-input">
                        </div>
                        <div style="flex: 1;">
                            <label>Dano</label>
                            <input type="text" class="uk-input">
                        </div>
                        <div style="flex: 1;">
                            <label>Crítico</label>
                            <input type="text" class="uk-input">
                        </div>
                        <div style="flex: 1;">
                            <label>Defesa</label>
                            <input type="text" class="uk-input">
                        </div>
                        <div style="flex: 1;">
                            <label>Penalidade</label>
                            <input type="text" class="uk-input">
                        </div>
                        <div style="flex: 1;">
                            <label>Tipo de Dano</label>
                            <input type="text" class="uk-input">
                        </div>
                    </div>
                </div>
                <div class="uk-modal-body">
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Peso</label>
                            <input type="text" class="uk-input">
                        </div>
                        <div style="flex: 1;">
                            <label>Venda</label>
                            <input type="text" class="uk-input">
                        </div>
                        <div style="flex: 1;">
                            <label>Ação</label>
                            <select id="cadAlcance">
                                <option></option>
                                <option value="Padrão">Padrão</option>
                                <option value="Movimento">Movimento</option>
                                <option value="Bônus">Bônus</option>
                                <option value="Livre">Livre</option>
                                <option value="Completa">Completa</option>
                                <option value="Sustentada">Sustentada</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer">
                    <div style="flex: 1;">
                        <label>Efeito</label>
                        <input type="text" class="uk-input">
                    </div>
                </div>
                <div class="uk-modal-footer">
                    <button class="uk-button uk-button-primary" id="Salvar-Button-inv">Salvar</button>
                </div>
            </div>
        </div>

        <!-- CADASTRO GALERIA -->
        <div id="cadastro-container-gal" class="modal-container" style="display: none;">
            <div class="uk-modal-dialog cadastro-box">
                <div class="uk-modal-header">
                    <h3 id="titulo-item">Cadastro Galeria</h3>
                </div>
                <div class="uk-modal-body">
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Imagem</label>
                            <input type="text" class="uk-input" id="cadNomeInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Categoria</label>
                            <select id="cadTipo">
                                <option value="Memes">Memes</option>
                                <option value="Gerais">Gerais</option>
                                <option value="Conto NE">Conto NE</option>
                                <option value="Emotes">Emotes</option>
                                <option value="Minis">Minis</option>
                                <option value="Tokens">Tokens</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer">
                    <button class="uk-button uk-button-primary" id="Salvar-Button-gal">Salvar</button>
                </div>
            </div>
        </div>


        <!-- CADASTRO DOCUMENTO -->
        <div id="cadastro-container-doc" class="modal-container" style="display: none;">
            <div class="uk-modal-dialog cadastro-box">
                <div class="uk-modal-header">
                    <h3 id="titulo-item">Cadastro Documento</h3>
                </div>
                <div class="uk-modal-body">
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Nome</label>
                            <input type="text" class="uk-input" id="cadNomeInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Autor</label>
                            <input type="text" class="uk-input" id="cadNomeInv">
                        </div>
                    </div>
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Tipo</label>
                            <select id="cadTipo">
                                <option value="Mapa">Mapa</option>
                                <option value="Anotação">Anotação</option>
                                <option value="Fofoquei">Fofoquei</option>
                                <option value="Pergaminho">Pergaminho</option>
                                <option value="Carta">Carta</option>
                                <option value="Livro">Livro</option>
                                <option value="Grimório">Grimório</option>
                                <option value="Diário">Diário</option>
                                <option value="Catálogo">Catálogo</option>
                                <option value="Recompensa">Recompensa</option>
                                <option value="Missão">Missão</option>
                                <option value="HQ">HQ</option>
                                <option value="Documento">Documento</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <label>Arco</label>
                            <select id="cadTipo">
                                <option value="Iniciação">Iniciação</option>
                                <option value="Kruspoll">Kruspoll</option>
                                <option value="Crânio Vazio">Crânio Vazio</option>
                                <option value="Canalsus">Canalsus</option>
                                <option value="Daimonas">Daimonas</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <label>Palavra Chave</label>
                            <input type="text" class="uk-input" id="cadNomeInv">
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer">
                    <button class="uk-button uk-button-primary" id="Salvar-Button-doc">Salvar</button>
                </div>
            </div>
        </div>


    </div>
</body>
<script>
    const NESelect = document.getElementById('NE');
    const cadastroContainerInv = document.getElementById('cadastro-container-inv');
    const cadastroContainerGal = document.getElementById('cadastro-container-gal');
    const cadastroContainerDoc = document.getElementById('cadastro-container-doc');

    // Gerenciar exibição dos modais
    NESelect.addEventListener('change', (e) => {
        const selectedValue = e.target.value;

        // Ocultar todos os modais
        cadastroContainerInv.style.display = 'none';
        cadastroContainerGal.style.display = 'none';
        cadastroContainerDoc.style.display = 'none';

        // Exibir o modal correspondente
        if (selectedValue === 'NEInv') {
            cadastroContainerInv.style.display = 'flex';
        } else if (selectedValue === 'NEGal') {
            cadastroContainerGal.style.display = 'flex';
        } else if (selectedValue === 'NEDoc') {
            cadastroContainerDoc.style.display = 'flex';
        }
    });

    // Fechar modais ao clicar fora deles
    $(document).ready(function () {
        $('#cadastro-container-inv').click(function (event) {
            if ($(event.target).is('#cadastro-container-inv')) {
                cadastroContainerInv.style.display = 'none';
            }
        });

        $('#cadastro-container-gal').click(function (event) {
            if ($(event.target).is('#cadastro-container-gal')) {
                cadastroContainerGal.style.display = 'none';
            }
        });

        $('#cadastro-container-doc').click(function (event) {
            if ($(event.target).is('#cadastro-container-doc')) {
                cadastroContainerDoc.style.display = 'none';
            }
        });
    });

    // Salvar Inventário
    $("#Salvar-Button-inv").click(function () {
        console.log("Salvar Inventário!");
        $.ajax({
            url: "../adm-functions.php",
            type: "post",
            data: {
                acao: "gravar-inv",
                filtros: {
                    nome: $("#cadNomeInv").val(),
                    tipo: $("#cadTipo").val(),
                    entidade: $("#cadEntidade").val(),
                    alcance: $("#cadAlcance").val(),
                    descricao: $("#CadDescricao").val(),
                    historia: $("#CadHistoria").val(),
                    teste: $("#cadNomeInv").val(),
                    dano: $("#cadNomeInv").val(),
                    critico: $("#cadNomeInv").val(),
                    defesa: $("#cadNomeInv").val(),
                    penalidade: $("#cadNomeInv").val(),
                    tipoDano: $("#cadNomeInv").val(),
                    peso: $("#cadNomeInv").val(),
                    venda: $("#cadNomeInv").val(),
                    acao: $("#cadNomeInv").val(),
                    efeito: $("#cadNomeInv").val(),
                }
            },
            success: function (result) {
                console.log("Inventário salvo com sucesso!");
                alert('Inventário salvo com sucesso!');
            },
            error: function (data) {
                console.log(data);
                alert('Ocorreu um erro ao salvar o inventário');
            }
        });
    });

    // Salvar Galeria
    $("#Salvar-Button-gal").click(function () {
        console.log("Salvar Galeria!");
        $.ajax({
            url: "../adm-functions.php",
            type: "post",
            data: {
                acao: "gravar-gal",
                filtros: {
                    imagem: $("#cadNomeInv").val(),
                    categoria: $("#cadTipo").val(),
                }
            },
            success: function (result) {
                console.log("Galeria salva com sucesso!");
                alert('Galeria salva com sucesso!');
            },
            error: function (data) {
                console.log(data);
                alert('Ocorreu um erro ao salvar a galeria');
            }
        });
    });

    // Salvar Documento
    $("#Salvar-Button-doc").click(function () {
        console.log("Salvar Documento!");
        $.ajax({
            url: "../adm-functions.php",
            type: "post",
            data: {
                acao: "gravar-doc",
                filtros: {
                    nome: $("#cadNomeInv").val(),
                    autor: $("#cadNomeInv").val(),
                    tipo: $("#cadTipo").val(),
                    arco: $("#cadTipo").val(),
                    palavraChave: $("#cadNomeInv").val(),
                }
            },
            success: function (result) {
                console.log("Documento salvo com sucesso!");
                alert('Documento salvo com sucesso!');
            },
            error: function (data) {
                console.log(data);
                alert('Ocorreu um erro ao salvar o documento');
            }
        });
    });
</script>

<style>
    .flex-container {
        display: flex;
        gap: 20px;
    }

    .flex-container>div {
        flex: 1;
    }

    .uk-input,
    select {
        background: #e8eeef;
        border: 1px solid #ccc;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        width: 100%;
        color: #384047;
        box-sizing: border-box;
    }

    select:focus {
        border-color: #4bc970;
        outline: none;
    }

    .uk-input:focus {
        border-color: #4bc970;
        outline: none;
    }

    textarea {
        background: #e8eeef;
        border: 1px solid #ccc;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        width: 100%;
        margin-bottom: 20px;
        color: #384047;
        resize: vertical;
        box-sizing: border-box;
        transition: border-color 0.3s ease;
    }

    textarea:focus {
        border-color: #4bc970;
        outline: none;
    }

    .TITULO {
        font-family: 'Jura', sans-serif;
        font-size: 2.9em;
        text-align: center;
        color: #384047;
        margin-bottom: 20px;
    }

    body {
        font-family: 'Nunito', sans-serif;
        background-color: #f4f7f8;
        color: #384047;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    #wrapper {
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        width: 100%;
    }

    #sidebar-wrapper {
        width: 250px;
        background: #333;
        color: #fff;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        overflow-y: auto;
        transition: all 0.3s ease;
        padding-top: 20px;
    }

    #sidebar-wrapper ul {
        list-style: none;
        padding: 0;
    }

    #sidebar-wrapper ul li {
        padding: 15px;
    }

    #sidebar-wrapper ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
    }

    #sidebar-wrapper ul li a:hover {
        color: #4bc970;
        background: rgba(255, 255, 255, 0.2);
        border-left: 3px solid #4bc970;
    }

    #page-content-wrapper {
        margin-left: 250px;
        width: 100%;
        padding: 20px;
        transition: margin-left 0.3s ease;
    }

    .form-container {
        display: flex;
        gap: 20px;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    form {
        flex: 1;
        max-width: 100%;
        margin: 10px;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-sizing: border-box;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    input,
    select {
        background: #e8eeef;
        border: 1px solid #ccc;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        width: 100%;
        margin-bottom: 20px;
        color: #384047;
    }

    button {
        padding: 12px 20px;
        color: #fff;
        background-color: #4bc970;
        font-size: 16px;
        text-align: center;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #4bc970;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    button:hover {
        background-color: #3ac162;
        transform: scale(1.02);
    }

    .modal-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
        padding: 0 20px;
    }

    .cadastro-box {
        background: #fff;
        border-radius: 10px;
        width: 100%;
        max-width: 1000px;
        padding: 30px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) {
        #sidebar-wrapper {
            width: 0;
        }

        #page-content-wrapper {
            margin-left: 0;
            padding: 10px;
        }

        .form-container {
            flex-direction: column;
            align-items: stretch;
        }

        .cadastro-box {
            width: 90%;
            max-width: 100%;
        }

        .uk-input,
        select {
            font-size: 14px;
        }
    }
</style>

</html>