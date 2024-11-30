<?php
include("adm-style.php");
include("../NE/conexao.php");

$query = "SELECT * FROM ne_dados";
$result = mysqli_query($conexao, $query);
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
                        while ($row = mysqli_fetch_assoc($result)) {
                           echo "<option value='{$row['ID']}'>{$row['ID']} - {$row['nome']} - {$row['tipo']}</option>";
                        }
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
                            <select id="cadTipoInv">
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
                            <select id="cadEntidadeInv">
                                <option></option>
                                <option value="Sol">Sol</option>
                                <option value="Lua">Lua</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <label>Alcance</label>
                            <select id="cadAlcanceInv">
                                <option></option>
                                <option value="Pessoal">Pessoal</option>
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
                            <textarea class="uk-textarea" id="CadDescricaoInv"></textarea>
                        </div>
                        <div style="flex: 1;">
                            <label>História</label>
                            <textarea class="uk-textarea" id="CadHistoriaInv"></textarea>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-body">
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Teste</label>
                            <input type="text" class="uk-input" id="CadTesteInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Dano</label>
                            <input type="text" class="uk-input" id="CadDanoInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Crítico</label>
                            <input type="text" class="uk-input" id="CadCriticoInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Defesa</label>
                            <input type="text" class="uk-input" id="CadDefesaInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Penalidade</label>
                            <input type="text" class="uk-input" id="CadPenalidadeInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Tipo de Dano</label>
                            <input type="text" class="uk-input" id="CadTipodDanoInv">
                        </div>
                    </div>
                </div>
                <div class="uk-modal-body">
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Peso</label>
                            <input type="text" class="uk-input" id="CadPesoInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Requesito</label>
                            <input type="text" class="uk-input" id="CadRequesitoInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Custo</label>
                            <input type="text" class="uk-input" id="CadCustoInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Venda</label>
                            <input type="text" class="uk-input" id="CadVendaInv">
                        </div>
                        <div style="flex: 1;">
                            <label>Ação</label>
                            <select id="CadAcaoInv">
                                <option value=""></option>
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
                        <textarea class="uk-textarea" id="CadEfeitoInv"></textarea>
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
                            <input type="text" class="uk-input" id="cadImagemGal">
                        </div>
                        <div style="flex: 1;">
                            <label>Categoria</label>
                            <select id="cadCategoriaGal">
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
                            <input type="text" class="uk-input" id="cadNomeDoc">
                        </div>
                        <div style="flex: 1;">
                            <label>Autor</label>
                            <input type="text" class="uk-input" id="cadAutorDoc">
                        </div>
                    </div>
                    <div class="flex-container">
                        <div style="flex: 1;">
                            <label>Tipo</label>
                            <select id="cadTipoDoc">
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
                            <select id="cadArcoDoc">
                                <option value="Iniciação">Iniciação</option>
                                <option value="Kruspoll">Kruspoll</option>
                                <option value="Crânio Vazio">Crânio Vazio</option>
                                <option value="Canalsus">Canalsus</option>
                                <option value="Daimonas">Daimonas</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <label>Palavra Chave</label>
                            <input type="text" class="uk-input" id="cadPCDoc">
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
        console.log($("#CadAcaoInv").val());
        $.ajax({
            url: "./adm-functions.php",
            type: "post",
            data: {
                acao: "gravar-inv",
                filtros: {
                    nome: $("#cadNomeInv").val(),
                    tipo: $("#cadTipoInv").val(),
                    entidade: $("#cadEntidadeInv").val(),
                    alcance: $("#cadAlcanceInv").val(),
                    descricao: $("#CadDescricaoInv").val(),
                    historia: $("#CadHistoriaInv").val(),
                    teste: $("#CadTesteInv").val(),
                    dano: $("#CadDanoInv").val(),
                    critico: $("#CadCriticoInv").val(),
                    defesa: $("#CadDefesaInv").val(),
                    penalidade: $("#CadPenalidadeInv").val(),
                    tipoDano: $("#CadTipodDanoInv").val(),
                    peso: $("#CadPesoInv").val(),
                    venda: $("#CadVendaInv").val(),
                    acao: $("#CadAcaoInv").val(),
                    efeito: $("#CadEfeitoInv").val(),
                    custo: $("#CadCustoInv").val(),
                    requesito: $("#CadRequesitoInv").val(),
                }
            },
            success: function (result) {
                console.log("Inventário salvo com sucesso!");
                Limpar();
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
                    imagem: $("#cadImagemGal").val(),
                    categoria: $("#cadCategoriaGal").val(),
                }
            },
            success: function (result) {
                Limpar();
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
                    nome: $("#cadNomeDoc").val(),
                    autor: $("#cadAutorDoc").val(),
                    tipo: $("#cadTipoDoc").val(),
                    arco: $("#cadArcoDoc").val(),
                    palavraChave: $("#cadPCDoc").val(),
                }
            },
            success: function (result) {
                console.log("Documento salvo com sucesso!");
                Limpar();
                alert('Documento salvo com sucesso!');
            },
            error: function (data) {
                console.log(data);
                alert('Ocorreu um erro ao salvar o documento');
            }
        });
    });

    function Limpar(){
        document.getElementById("cadNomeInv").value = "";
        document.getElementById("CadTesteInv").value = "";
        document.getElementById("CadDanoInv").value = "";
        document.getElementById("CadCriticoInv").value = "";
        document.getElementById("CadDefesaInv").value = "";
        document.getElementById("CadPenalidadeInv").value = "";
        document.getElementById("CadTipodDanoInv").value = "";
        document.getElementById("CadPesoInv").value = "";
        document.getElementById("CadRequesitoInv").value = "";
        document.getElementById("CadCustoInv").value = "";
        document.getElementById("CadVendaInv").value = "";
        document.getElementById("CadDescricaoInv").value = "";
        document.getElementById("CadHistoriaInv").value = "";
        document.getElementById("CadEfeitoInv").value = "";
        document.getElementById("cadImagemGal").value = "";
        document.getElementById("cadNomeDoc").value = "";
        document.getElementById("cadAutorDoc").value = "";
        document.getElementById("cadPCDoc").value = "";

        document.getElementById("cadTipoInv").selectedIndex = 0;
        document.getElementById("cadEntidadeInv").selectedIndex = 0;
        document.getElementById("cadAlcanceInv").selectedIndex = 0;
        //document.getElementById("CadAcaoInv").selectedIndex = 0;
        document.getElementById("cadCategoriaGal").selectedIndex = 0;
        document.getElementById("cadTipoDoc").selectedIndex = 0;
        document.getElementById("cadArcoDoc").selectedIndex = 0;

        cadastroContainerDoc.style.display = 'none';
        cadastroContainerGal.style.display = 'none';
        cadastroContainerInv.style.display = 'none';
}
</script>

</html>