<?php
include 'style-doc.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
    <title>Solar Ancestral - Menu de Busca</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <header id="header">
        <div class="container">
            <div class="flex">
                <a><i class="bi bi-sun"></i></a>
                <div class="btn-contato">
                    <a onclick="window.location.href='../lobby.php'"><button>Retornar</button></a>
                    <a><button>Filtro</button></a>
                </div>
            </div>
        </div>
    </header>

    <section class="banner banner-1">
        <div class="sun-container">
            <div class="sun"></div>
        </div>
        <div class="centered-text">
            <h1>PESQUISA NA <span>ORIGEM SOLAR</span></h1>
        </div>
    </section>


    <section class="banner banner-2">
        <div id="words-container"></div>
        <div class="search">
            <label for="searchInput">
                <span class="material-symbols-outlined"></span>
            </label>
            <input type="text" id="searchInput" placeholder="Pesquisar...">
        </div>
        <div id="resultado">
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#searchInput").keyup(function() {
                        var input = $(this).val().trim();
                        if (input != "") {
                            $.ajax({
                                url: "functionDoc.php",
                                method: "POST",
                                data: {
                                    input: input
                                },
                                success: function(data) {
                                    if (data.trim() != "") {
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
            </script>
        </div>
        <div class="sun-symbol-container"></div>

    </section>
</body>

</html>

<script>
    window.addEventListener("scroll", function() {
        let header = document.querySelector('#header')
        header.classList.toggle('rolagem', window.scrollY > 500)
    })

    const words = ["Sol", "Lua", "Baúrda", "Zoystea", "Aystea", "Kruspoll", "Deuses", "Parasita", "Bobby", "Erin", "Flora", "PlinPlinPlon", "Luniére", "Pietro", "Nila", "Allyan", "Onho", "Ely", "Tina", "Snuggle", "Maria", "Shou", "Ashura", "Zerlar", "Jafar", "Astaroth", "Declínio", "Ciclo", "Carcaça", "Íris", "Filhos", "Sentidos", "Fadas", "Arquifada", "Fylakir", "Yiron", "Zenagan", "Canalsus", "Miguel", "TPM", "Daimonas", "PPParadise", "Choriséo", "Charisma", "Risorius", "Yaagcê", "Guildacê", "Angkor", "Drys", "Enegeia", "Litore", "Lying", "Lilith", "Gaya", "Yuki", "Agaro", "RIK", "Manu", "Keanu", "Fahlir", "Sanara", "Bernie", "Eldar", "Maldição", "Bênção", "Magia", "Alma", "Tempo", "Lunar", "Solar", "Homunculos", "Tieflings", "Humanos", "Elfos", "Haflings", "Gnomos", "Anões", "Guerrairos", "Arqueiros", "Clérigos", "Magos", "Bruxos", "Feiticeiros", "Necromantes", "Ladinos", "Crescente", "Nova", "Cheia", "Artifices", "Druídas", "Monges"];
const container = document.getElementById("words-container");

function createWord() {
    const word = document.createElement("div");
    word.classList.add("word");
    word.textContent = words[Math.floor(Math.random() * words.length)];

    const xPos = Math.random() * 100;
    const yPos = Math.random() * 100;
    const rotation = (Math.random() * 360) + "deg";

    const delay = Math.random() * 3;
    const scale = (Math.random() * 0.5 + 0.5).toFixed(2);

    word.style.left = `${xPos}vw`;
    word.style.top = `${yPos}vh`;
    word.style.transform = `rotate(${rotation}) scale(${scale})`; 
    word.style.animationDelay = `${delay}s`;

    container.appendChild(word);

    setTimeout(() => {
        word.remove();
    }, 10000);
}
setInterval(createWord, 300);
</script>