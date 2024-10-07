<!DOCTYPE html>
<html>
<head>

<title>Noite Escura</title>
<?php include "./style.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
        <div class="search">
            <label for="searchInput">
                <span class="material-symbols-outlined"></span>
            </label>
            <input type="text" id="searchInput" placeholder="Pesquisar" onkeyup="searchName()">
        </div>
        <div class="card-container">
            
        </div>
</body>

</html>

<script>

function Ler() {
        $.ajax({
            url: "./function.php",
            type: "post",
            async: true,
            data: {
                acao: "lerFormulario"
            },
            dataType: "json",
            success: function(result) {
                contIds = [];
                let lbd = result.historico;
                Listar(lbd)

            },
            error: function(data) {
                console.log(data);
                alert('error handling here');
            }
        });
    }

</script>

<?php

?>