<?php 
include("conexao.php");
if(isset($_POST["input"])){

    $input = trim($_POST["input"]);

    if(empty($input)) {
        echo "<h6 class='text-danger text-center'>Por favor, digite algo para pesquisar.</h6>";
        exit;
    }

    $query = "SELECT * FROM ne_dados WHERE nome LIKE '{$input}%' OR id LIKE '{$input}%' OR tipo LIKE '{$input}%'";
    $result = mysqli_query($conexao, $query);

    if(mysqli_num_rows($result) > 0){?>
        <table class="table table-borderline table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>TIPO</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['ID'];
                    $nome = $row['nome'];
                    $tipo = $row['tipo'];
                ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $nome;?></td>
                    <td><?php echo $tipo;?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "<h6 class='text-danger text-center'>Zero Dados Encontrados</h6>";
    }
}
?>
