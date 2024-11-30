<?php
include("../NE/conexao.php");

$acao = $_POST["acao"];
$filtros = $_POST["filtros"];

if ($acao == "gravar-inv") {
    print json_encode(gravarInventario($conexao,$filtros));
} else if ($acao == "lerFormulario") {
    print json_encode(lerFormulario($conexao, $filtros));
}

function gravarInventario($conexao, $filtros)
{
    // Obtendo o próximo ID
    $sql = "SELECT * FROM ne_dados ORDER BY ID DESC LIMIT 1;";
    $get = mysqli_query($conexao, $sql);
    $novoID = 1;
    if ($get && mysqli_num_rows($get) > 0) {
        $novoID += intval(mysqli_fetch_all($get, MYSQLI_ASSOC)[0]["ID"]);
    }

    // Preparando os valores para inserção
    $nome = mysqli_real_escape_string($conexao, $filtros['nome']);
    $tipo = mysqli_real_escape_string($conexao, $filtros['tipo']);
    $entidade = mysqli_real_escape_string($conexao, $filtros['entidade']);
    $alcance = mysqli_real_escape_string($conexao, $filtros['alcance']);
    $descricao = mysqli_real_escape_string($conexao, $filtros['descricao']);
    $historia = mysqli_real_escape_string($conexao, $filtros['historia']);
    $teste = mysqli_real_escape_string($conexao, $filtros['teste']);
    $dano = mysqli_real_escape_string($conexao, $filtros['dano']);
    $critico = mysqli_real_escape_string($conexao, $filtros['critico']);
    $defesa = mysqli_real_escape_string($conexao, $filtros['defesa']);
    $penalidade = mysqli_real_escape_string($conexao, $filtros['penalidade']);
    $tipoDano = mysqli_real_escape_string($conexao, $filtros['tipoDano']);
    $peso = mysqli_real_escape_string($conexao, $filtros['peso']);
    $venda = mysqli_real_escape_string($conexao, $filtros['venda']);
    $acao = mysqli_real_escape_string($conexao, $filtros['acao']);
    $efeito = mysqli_real_escape_string($conexao, $filtros['efeito']);
    $custo = mysqli_real_escape_string($conexao, $filtros['custo']);
    $requesito = mysqli_real_escape_string($conexao, $filtros['requesito']);

    // Montando o comando SQL
    $sql = "INSERT INTO ne_dados (ID, nome, tipo, entidade, alcance, descricao, historia, teste, dano, critico, defesa, penalidade, tipo_dano, peso, venda, acao, efeito, custo, requesito)
            VALUES ('$novoID', '$nome', '$tipo', '$entidade', '$alcance', '$descricao', '$historia', '$teste', '$dano', '$critico', '$defesa', '$penalidade', '$tipoDano', '$peso', '$venda', '$acao', '$efeito', '$custo', '$requesito');";

    // Executando o comando e retornando o resultado
    $result = mysqli_query($conexao, $sql);

    if ($result) {
        return ["status" => "sucesso", "mensagem" => "Inventário gravado com sucesso!"];
    } else {
        return ["status" => "erro", "mensagem" => "Erro ao gravar inventário.", "erro" => mysqli_error($conexao)];
    }
}


function lerFormulario($conexao, $filtros){
    $sql = "select * from smp_hardw_cell;";
}

?>