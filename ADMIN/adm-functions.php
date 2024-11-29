<?php 
include("../NE/conexao.php");

$acao = $_POST["acao"];
$filtros = $_POST["filtros"];

if ($acao == "gravar-inv") {
    print json_encode(gravarInvetario($filtros));
} else if($acao == "lerFormulario") {
    print json_encode(lerFormulario($filtros));
}

function gravarInvetario($conexao, $filtros){

    $sql = "select * from smp_hardw_cell;";

}
?>
