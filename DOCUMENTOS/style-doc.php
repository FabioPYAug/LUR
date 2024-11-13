<style>
@import url('https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html, body {
    height: 100%;
    background-color: #FFF8D6;
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

header {
    width: 100%;
    padding: 60px 4%;
    position: fixed;
    top: 0;
    left: 0;
    transition: .5s;
    z-index: 1000;
    background: #F0D8A8;
}

header.rolagem {
    background-color: #D5A982;
    padding: 20px 4%;
}

header i {
    font-size: 30px;
    color: #B07E63;
}

header.rolagem .btn-contato button {
    background-color: #CD8861;
    color: #FFF8D6;
}

header .btn-contato button {
    border-radius: 30px;
    font-size: 20px;
    width: 120px;
    height: 40px;
    border: 0;
    background-color: #D5A982;
    color: #4E3E30;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}

header .btn-contato button:hover {
    transform: scale(1.1);
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.15);
    background-color: #B07E63;
}

.banner-1 {
    background: linear-gradient(160deg, #F0D8A8, #FFF8D6);
    color: #4E3E30;
    padding: 100px 0;
    text-align: center;
}

.banner-1 h1 {
    font-size: 4em;
    font-weight: bold;
    color: #4E3E30;
}

.banner-1 h1 span {
    color: #BA783E;
}

.banner-2 {
    background-color: #B07E63;
    padding: 50px 0;
    color: #FFF8D6;
    text-align: center;
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
    font-size: 1.85rem;
    color: #4E3E30;
    opacity: 0;
    animation: growFade 6s ease-in-out infinite;
    color: #FFF8D6;
}

@keyframes growFade {
    0% {
        transform: scale(0.8);
        opacity: 8;
    }
    100% {
        transform: scale(1);
        opacity: 0;
    }
}

#particles-js {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
</style>