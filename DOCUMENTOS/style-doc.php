<style>
/* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Body e Background */
html, body {
    height: 100%;
    background-color: #FFF67F; /* Tom amarelo claro */
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

/* Cabeçalho */
header {
    width: 100%;
    padding: 60px 4%;
    position: fixed;
    top: 0;
    left: 0;
    transition: .5s;
    z-index: 1000;
    background: #E5BF76; /* Tom dourado claro */
}

header.rolagem {
    background-color: #AF5B2C; /* Tom laranja queimado */
    padding: 20px 4%;
}

header.rolagem a, header.rolagem i {
    color: #FFF67F; /* Amarelo claro */
}

header i {
    font-size: 30px;
    color: #884121; /* Tom marrom mais escuro */
}

.btn-contato a {
    margin-right: 30px; 
}

.btn-contato button {
    border-radius: 30px;
    font-size: 20px;
    width: 120px;
    height: 40px;
    border: 0;
    background-color: #CD8861; /* Tom bege queimado */
    color: #261E1A; /* Marrom escuro */
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}

.btn-contato button:hover {
    transform: scale(1.1); 
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
    background-color: #AF5B2C; /* Laranja queimado */
}

.btn-contato button:active {
    transform: scale(1.05);
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
}

/* Banner 1 */
.banner-1 {
    background: linear-gradient(160deg, #E5BF76, #FFF67F); /* Gradiente dourado para amarelo claro */
    color: #261E1A; /* Marrom escuro */
    padding: 100px 0;
    text-align: center;
}

.banner-1 h1 {
    font-size: 4em;
    font-weight: bold;
    color: #261E1A;
}

.banner-1 h1 span {
    color: #AF5B2C; /* Laranja queimado */
}

/* Banner 2 */
.banner-2 {
    background-color: #884121; /* Marrom escuro */
    padding: 50px 0;
    color: #FFF67F; /* Amarelo claro */
    text-align: center;
}

.search {
    display: flex;
    align-items: center;
    border: 2px solid #CD8861; /* Tom bege queimado */
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
    color: #261E1A; /* Marrom escuro */
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

/* Media Queries */
@media (max-width: 768px) {
    .search {
        width: 90%;
    }

    #resultado {
        width: 90%;
    }
}
</style>