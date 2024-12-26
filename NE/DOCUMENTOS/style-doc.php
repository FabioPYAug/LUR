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
    overflow: hidden;
}

.container {
    max-width: 1280px;
    margin: auto;
}

.flex {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.banner-2 {
    padding: 50px 0;
    color: #FFF8D6;
    text-align: center;
    background-color: #B07E63; 
    background-image: url('../Imagens/Textura-Papel.jpg'); 
    background-size: cover;
    background-repeat: no-repeat;
    background-blend-mode: multiply;
}

.search {
    display: flex;
    align-items: center;
    border: 2px solid #D5A982;
    background-color: rgba(255, 248, 214, 0.9);
    width: 100%;
    max-width: 750px;
    border-radius: 20px;
    padding: 10px;
    margin: 20px auto;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

#searchInput {
    padding: 8px;
    border: none;
    background-color: transparent;
    width: 100%;
    outline: none;
    font-size: 18px;
    color: #4E3E30;
}

#resultado {
    max-width: 750px;
    margin: 10px auto;
    display: block;
    position: relative;
}

.banner {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    background-attachment: fixed;
    flex-direction: column;
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