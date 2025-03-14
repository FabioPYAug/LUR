<?php 
include("../conexao.php");
if(isset($_POST["input"])){

    $input = trim($_POST["input"]);

    if(empty($input)) {
        echo "<h6 class ='text-danger text-center'>Por favor, digite algo para pesquisar.</h6>";
        exit;
    }

    $query = "SELECT 
    t.op_ID,
    t.op_descricao,
    t.op_historia,
    t.op_nome,
    t.op_efeito,
    t.op_token,
    d.op_tipo,
    d.op_elemento,
    d.op_categoria AS categoria_detalhes,
    s.op_custo,
    s.op_duracao,
    s.op_condicao,
    s.op_resistencia,
    s.op_alvo,
    s.op_dano,
    s.op_alcance,
    s.op_peso,
    s.op_categoria AS categoria_status,
    r.op_padrao,
    r.op_discente,
    r.op_verdadeiro,
    r.op_circulo
FROM op_textos t
INNER JOIN op_detalhes d ON t.op_ID = d.op_ID
INNER JOIN op_status s ON t.op_ID = s.op_ID
INNER JOIN op_rituais r ON t.op_ID = r.op_ID
WHERE d.op_tipo LIKE '{$input}%' 
   OR d.op_elemento LIKE '{$input}%' 
   OR d.op_categoria LIKE '{$input}%'";
    $result = mysqli_query($conexao, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            
            $op_ID = $row['op_ID'];
            $nome = $row['nome'];
            $tipo = $row['tipo'];
            $alcance = $row['alcance'];
            $descricao = $row['descricao'];
            $historia = $row['historia'];
            $entidade = $row['entidade'];
            $teste = $row['teste'];
            $dano = $row['dano'];
            $critico = $row['critico'];
            $peso = $row['peso'];
            $tipo_dano = $row['tipo_dano'];
            $venda = $row['venda'];
            $defesa = $row['defesa'];
            $penalidade = $row['penalidade'];
            $acao = $row['acao'];
            $efeito = $row['efeito'];
            $custo = $row['custo'];
            $requesito = $row['requesito'];

            ?>
            <button class="custom-btn btn-1" onclick="valores(
            '<?php echo addslashes($nome); ?>',
            '<?php echo addslashes($tipo); ?>',
            '<?php echo addslashes($alcance); ?>',
            '<?php echo addslashes($descricao); ?>',
            '<?php echo addslashes($historia); ?>',
            '<?php echo addslashes($entidade); ?>',
            '<?php echo addslashes($teste); ?>',
            '<?php echo addslashes($dano); ?>',
            '<?php echo addslashes($critico); ?>',
            '<?php echo addslashes($peso); ?>',
            '<?php echo addslashes($tipo_dano); ?>',
            '<?php echo addslashes($venda); ?>',
            '<?php echo addslashes($defesa); ?>',
            '<?php echo addslashes($penalidade); ?>',
            '<?php echo addslashes($acao); ?>',
            '<?php echo addslashes($efeito); ?>',
            '<?php echo addslashes($custo); ?>',
            '<?php echo addslashes($requesito); ?>'
            )">
                <span class="item-left"><?php echo $id; ?></span>
                <span class="item-center"><?php echo $nome; ?></span>
                <span class="item-right"><?php echo $tipo; ?></span>
            </button><br>
            <?php
        }
    } else {
        echo "<h6 class='text-danger text-center'>Zero Dados Encontrados</h6>";
    }
}
?>
