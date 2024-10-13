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
                var input = $(this).val().trim(); 
                if(input != ""){
                    $.ajax({
                        url: "function.php",
                        method: "POST",
                        data: {input: input},
                        success: function(data) {
                            if(data.trim() != "") {
                                $("#resultado").html(data).css("display", "block"); 
                            } else {
                                $("#resultado").css("display", "none"); 
                            }
                        }
                    });
                } else {
                    $("#resultado").css("display", "none"); 
                }
            });
        });

        function valores(nome, tipo, alcance, descricao, historia, entidade, teste, dano, critico, peso, tipoDano, venda, defesa, penalidade, acao, efeito){
            let LocalImagem = `../Imagens/PlaceHolder.png`;

            sessionStorage.setItem('nome', nome);
            sessionStorage.setItem('tipo', tipo);
            sessionStorage.setItem('alcance', alcance);
            sessionStorage.setItem('descricao', descricao);
            sessionStorage.setItem('historia', historia);
            sessionStorage.setItem('entidade', entidade);
            sessionStorage.setItem('teste', teste);
            sessionStorage.setItem('dano', dano);
            sessionStorage.setItem('critico', critico);
            sessionStorage.setItem('peso', peso);
            sessionStorage.setItem('tipoDano', tipoDano);
            sessionStorage.setItem('venda', venda);
            sessionStorage.setItem('defesa', defesa);
            sessionStorage.setItem('penalidade', penalidade);
            sessionStorage.setItem('LocalImagem', LocalImagem);
            sessionStorage.setItem('acao', acao);
            sessionStorage.setItem('efeito', efeito);
            switch (tipo){
                case "Arma":
                    window.location.href = 'Valores/ArmaPadrão.html';
                    break;
                case "Material":
                    window.location.href = 'Valores/ItemPadrão.html';
            }
            
        }
    </script>
</body>
</html>
