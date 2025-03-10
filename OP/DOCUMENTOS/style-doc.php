<style>
@import url('https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
}

html, body {
    height: 100%;
    background-color: #FFF8D6;
    overflow-x: hidden;
}

body {
    height: 200%; /* Aumenta a altura para permitir rolagem */
    position: relative;
}

.banner {
    width: 100%;
    height: 100vh;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    transition: opacity 1s ease-in-out;
    will-change: transform; /* Informar ao navegador que a transformação será feita */
}

.banner-1 {
    background-color: rgb(253, 253, 253); 
    background-image: url('../Imagens/Textura-Papel.jpg');
    background-attachment: fixed;
}

.banner-2 {
    background-color: #B07E63;
    background-image: url('../Imagens/Textura-Papel.jpg');
    background-attachment: fixed;
}

.banner-1, .banner-2 {
    opacity: 1;
}

.banner-1.inactive, .banner-2.inactive {
    opacity: 0;
}

.banner-1, .banner-2 {
    transition: transform 0.2s ease-out;
}

.banner-1 {
    transform: translateY(0);
}

.banner-2 {
    transform: translateY(0);
}

body {
    background-color: #FFF8D6;
    height: 100%;
}

#words-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
    overflow: hidden;
}

.word {
    font-family: 'MedievalSharp', cursive;
    position: absolute;
    font-size: 5rem;
    color: #4E3E30;
    opacity: 0;
    animation: growFade 6s ease-in-out infinite;
    color: #FFF8D6;
}

@keyframes growFade {
    0% {
        transform: scale(0.5);
        opacity: 0.55;
    }
    100% {
        transform: scale(1);
        opacity: 0;
    }
}

</style>