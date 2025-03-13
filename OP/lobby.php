<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lobby.css">
    <title>Ordem Paranormal</title>
</head>


<body>
    <div class="container">
        <h1 class="titulo">Ordem Paranormal</h1>
        <img id="miedo" src="INVENTARIO/VALORES/imgs/Medo.webp" alt="Medo">
    </div>
    <?php include 'sidebar.php'; ?>
</body>

</html>
<script>
    const imageUrls = [
        'SIGILOS/A.png',
        'SIGILOS/B.png',
        'SIGILOS/C.png',
        'SIGILOS/D.png',
        'SIGILOS/E.png',
        'SIGILOS/F.png',
        'SIGILOS/G.png',
        'SIGILOS/H.png',
        'SIGILOS/I.png',
        'SIGILOS/J.png',
        'SIGILOS/K.png',
        'SIGILOS/L.png',
        'SIGILOS/M.png',
        'SIGILOS/N.png',
        'SIGILOS/O.png',
        'SIGILOS/P.png',
        'SIGILOS/Q.png',
        'SIGILOS/R.png',
        'SIGILOS/S.png',
        'SIGILOS/T.png',
        'SIGILOS/U.png',
        'SIGILOS/V.png',
        'SIGILOS/W.png',
        'SIGILOS/X.png',
        'SIGILOS/Y.png',
        'SIGILOS/Z.png'
    ];

    function createRandomImage() {
        const randomIndex = Math.floor(Math.random() * imageUrls.length);
        const img = document.createElement('img');
        img.src = imageUrls[randomIndex];
        img.classList.add('random-image');

        const x = Math.random() * (window.innerWidth - 100);
        const y = Math.random() * (window.innerHeight - 100);
        img.style.left = `${x}px`;
        img.style.top = `${y}px`;

        document.body.appendChild(img);

        setTimeout(() => {
            img.style.width = '100px';
            img.style.height = '100px';
            img.style.opacity = '0';
        }, 100);

        setTimeout(() => {
            img.remove();
        }, 2000);
    }

    setInterval(createRandomImage, 230);
</script>
<style>
    body {
        font-family: 'Cinzel', sans-serif;
        background-color: black;
        color: white;
        text-align: center;
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 4em;
        margin-top: 50px;
        z-index: 50;
    }

    .random-image {
        position: absolute;
        width: 50px;
        height: 50px;
        transition: width 5s, height 5s, opacity 5s;
        opacity: 0.85;
        animation: shake2 0.5s ease-in-out infinite;
        z-index: -50;
    }

    @keyframes shake {
        0% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-0.25px);
        }

        50% {
            transform: translateX(0.25px);
        }

        75% {
            transform: translateX(-0.25px);
        }

        100% {
            transform: translateX(0);
        }
    }

    @keyframes shake2 {
        0% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-1px);
        }

        50% {
            transform: translateX(1px);
        }

        75% {
            transform: translateX(-1px);
        }

        100% {
            transform: translateX(0);
        }
    }

    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    #miedo {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin-top: 20px;
        width: 350px;
        max-width: 100%;
        transition: width 5s, height 5s, opacity 5s;
        opacity: 1;
        animation: shake 0.5s ease-in-out infinite, float 3s ease-in-out infinite;
        z-index: 50;
    }

    .titulo {
        animation: shake 0.5s ease-in-out infinite;
        z-index: 50;
    }
</style>