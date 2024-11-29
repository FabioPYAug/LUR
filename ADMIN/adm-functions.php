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
    $sql = "select * from smp_hardw_cell;";
}

function lerFormulario($conexao, $filtros){
    $sql = "select * from smp_hardw_cell;";
}

?>