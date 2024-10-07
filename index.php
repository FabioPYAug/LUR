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
        <input type="text" id="searchInput" placeholder="Pesquisar">
    </div>
    <div id="resultado"></div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#searchInput").keyup(function(){
                var input = $(this).val().trim(); // Remove espaços em branco
                if(input != ""){
                    $.ajax({
                        url: "function.php",
                        method: "POST",
                        data: {input: input},
                        success: function(data) {
                            console.log(data); // Para depuração
                            if(data.trim() != "") {
                                $("#resultado").html(data).css("display", "block"); // Mostra o resultado
                            } else {
                                $("#resultado").css("display", "none"); // Oculta se não houver resultados
                            }
                        }
                    });
                } else {
                    $("#resultado").css("display", "none"); // Oculta se a entrada estiver vazia
                }
            });
        });
    </script>
</body>
</html>
