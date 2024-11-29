<?php 
include("../NE/conexao.php");

$acao = $_POST["acao"];
$filtros = $_POST["filtros"];

if ($acao == "gravarFormulario") {
    print json_encode(gravarFormulario($filtros));
} else if($acao == "lerFormulario") {
    print json_encode(lerFormulario($filtros));
} else if($acao == "apagarHistorico") {
    print json_encode(apagarHistorico($filtros));
}


?>
