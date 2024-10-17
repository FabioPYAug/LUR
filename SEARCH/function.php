<?php 
include("conexao.php");
if(isset($_POST["input"])){

    $input = trim($_POST["input"]);

    if(empty($input)) {
        echo "<h6 class ='text-danger text-center'>Por favor, digite algo para pesquisar.</h6>";
        exit;
    }

    $query = "SELECT * FROM ne_dados WHERE nome LIKE '{$input}%' OR id LIKE '{$input}%' OR tipo LIKE '{$input}%' OR alcance LIKE '{$input}%' OR entidade LIKE '{$input}%' OR tipo_dano LIKE '{$input}%'";
    $result = mysqli_query($conexao, $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            
            $id = $row['ID'];
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
            '<?php echo addslashes($efeito); ?>'
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
