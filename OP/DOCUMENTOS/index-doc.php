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
    <?php include '../sidebar.php'; ?>

    <section class="banner banner-1"></section>

    <section class="banner banner-2">
    <div class="container">
            <h1>Ficha de Investigação</h1>
            <div class="section">
                <h2>Caso</h2>
                <p><strong>Local:</strong> Kartas-che, Cidade Espiral</p>
                <p><strong>Resumo:</strong> Uma cidade isolada com dezenas de policiais mortos. Os cidadãos temem sair às ruas, e o governo oculta informações.</p>
            </div>
            </section>

</body>

</html>

<script>
$(document).ready(function() {
    var lastScrollTop = 0;

    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();
        var banner1Offset = scrollTop * 0.3; 
        var banner2Offset = scrollTop * 0.3; 

        $('.banner-1').css('transform', 'translateY(' + banner1Offset + 'px)');
        $('.banner-2').css('transform', 'translateY(' + banner2Offset + 'px)');

        if (scrollTop > windowHeight) {
            $('.banner-1').addClass('inactive');
            $('.banner-2').removeClass('inactive');
        } else {
            $('.banner-1').removeClass('inactive');
            $('.banner-2').addClass('inactive');
        }

        lastScrollTop = scrollTop;
    });
});
</script>
