<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html {
    height: 100%;
    background-color: #f4efe1;
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
    background: #d3a35f;
}

header.rolagem {
    background-color: #8d5524;
    padding: 20px 4%;
}

header.rolagem a, header.rolagem i {
    color: #e8c45f;
}

header i {
    font-size: 30px;
    color: #ffd966;
}

.btn-contato button {
    border-radius: 30px;
    font-size: 20px;
    width: 120px;
    height: 40px;
    border: 0;
    background-color: #e8c45f;
    color: #3e1e02;
    cursor: pointer;
    transition: .3s;
}

.banner-1 {
    background: linear-gradient(160deg, #f4c742, #f49756);
    color: #3e1e02;
    padding: 100px 0;
    text-align: center;
}

.banner-1 h1 {
    font-size: 4em;
    font-weight: bold;
    color: #fff;
}

.banner-1 h1 span {
    color: #ffd966;
}

.banner-2 {
    background-image: url('../Imagens/SolarBackground.png');
    background-size: cover;
    background-position: center;
    padding: 50px 0;
    color: #8d5524;
    border: 5px solid #d3a35f;
    text-align: center;
}

.search {
    display: flex;
    align-items: center;
    border: 2px solid #d3a35f;
    background-color: rgba(255, 250, 240, 0.9);
    width: 100%;
    max-width: 750px;
    border-radius: 20px;
    padding: 10px;
    margin: 20px auto;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
}

#searchInput {
    padding: 8px;
    border: none;
    background-color: transparent;
    width: 100%;
    outline: none;
    font-size: 18px;
    color: #8d5524;
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

@media (max-width: 768px) {
    .search {
        width: 90%;
    }

    #resultado {
        width: 90%;
    }
}
</style>