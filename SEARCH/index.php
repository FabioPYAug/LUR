<!DOCTYPE html>
<html>
<head>
    <title>Noite Escura</title>
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
                    window.location.href = 'Valores/MaterialPadrão.html';
            }
            
        }
    </script>
</body>
</html>
<style>
@import url("https://fonts.googleapis.com/css?family=Inter:400|Jura:400");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Jura', sans-serif;
    background-color: #f2f2ed;
}

.search {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    background-color: #00000006;
    width: 750px;
    border-radius: 20px;
    padding: 5px 10px;
    color: #4b4b4b;
    margin: 20px auto;
}

#searchInput {
    padding: 8px;
    border: none;
    background-color: transparent;
    width: 100%;
    outline: none;
    font-size: 20px;
}

#resultado {
    max-width: 750px;
    margin: 20px auto;
    display: none;
}

h6 {
    margin: 20px 0 0 0;
    padding: 0;
    box-sizing: border-box;
    color: black;
    font-size: 25px;
    text-align: center; 
}

.custom-btn {
  width: 750px;
  height: 40px;
  color: black;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  justify-content: space-between;
  align-items: center;
  outline: none;
}

.btn-1 {
  background: #00000006;
  border: none;
}

.btn-1:hover {
  background: rgb(255, 255, 255);
  border-color: yellow;
}


.item-left {
  flex: 1; 
  text-align: left;
  background: transparent;
}


.item-center {
  flex: 20;
  text-align: left;
  background: transparent;
}

.item-right {
  flex: 1;
  text-align: right;
  background: transparent;
}
</style>

