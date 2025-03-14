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
        $op_nome = $row['op_nome'];
        $op_tipo = $row['op_tipo'];
        $op_alcance = $row['op_alcance'];
        $op_descricao = $row['op_descricao'];
        $op_historia = $row['op_historia'];
        $op_efeito = $row['op_efeito'];
        $op_token = $row['op_token'];
        $op_elemento = $row['op_elemento'];
        $op_categoria_detalhes = $row['categoria_detalhes'];
        $op_custo = $row['op_custo'];
        $op_duracao = $row['op_duracao'];
        $op_condicao = $row['op_condicao'];
        $op_resistencia = $row['op_resistencia'];
        $op_alvo = $row['op_alvo'];
        $op_dano = $row['op_dano'];
        $op_peso = $row['op_peso'];
        $op_categoria_status = $row['categoria_status'];
        $op_padrao = $row['op_padrao'];
        $op_discente = $row['op_discente'];
        $op_verdadeiro = $row['op_verdadeiro'];
        $op_circulo = $row['op_circulo'];

        ?>
        <button class="custom-btn btn-1" onclick="valores(
        '<?php echo addslashes($op_nome); ?>',
        '<?php echo addslashes($op_tipo); ?>',
        '<?php echo addslashes($op_alcance); ?>',
        '<?php echo addslashes($op_descricao); ?>',
        '<?php echo addslashes($op_historia); ?>',
        '<?php echo addslashes($op_efeito); ?>',
        '<?php echo addslashes($op_token); ?>',
        '<?php echo addslashes($op_elemento); ?>',
        '<?php echo addslashes($op_categoria_detalhes); ?>',
        '<?php echo addslashes($op_custo); ?>',
        '<?php echo addslashes($op_duracao); ?>',
        '<?php echo addslashes($op_condicao); ?>',
        '<?php echo addslashes($op_resistencia); ?>',
        '<?php echo addslashes($op_alvo); ?>',
        '<?php echo addslashes($op_dano); ?>',
        '<?php echo addslashes($op_peso); ?>',
        '<?php echo addslashes($op_categoria_status); ?>',
        '<?php echo addslashes($op_padrao); ?>',
        '<?php echo addslashes($op_discente); ?>',
        '<?php echo addslashes($op_verdadeiro); ?>',
        '<?php echo addslashes($op_circulo); ?>'
        )">
            <span class="item-left"><?php echo $op_ID; ?></span>
            <span class="item-center"><?php echo $op_nome; ?></span>
            <span class="item-right"><?php echo $op_tipo; ?></span>
        </button><br>
        <?php
    }
} else {
    echo "<h6 class='text-danger text-center'>Zero Dados Encontrados</h6>";
}}
?>
