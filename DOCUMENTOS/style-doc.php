<style>
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

header.rolagem a, header.rolagem i {
    color: #FFF8D6; 
}

header i {
    font-size: 30px;
    color: #B07E63; 
}

header.rolagem .btn-contato button {
    background-color: #CD8861;
    color: #FFF8D6; 
}

header.rolagem .btn-contato button:hover {
    background-color: #AF5B2C;
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
    background-color: #D5A982; 
    color: #4E3E30; 
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}

.btn-contato button:hover {
    transform: scale(1.1); 
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.15);
    background-color: #B07E63; 
}

.btn-contato button:active {
    transform: scale(1.05);
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
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

.banner-2 p h1 h2 h3 h4 h5{
    color: #4E3E30;
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

@media (max-width: 768px) {
    .search {
        width: 90%;
    }

    #resultado {
        width: 90%;
    }
}

</style>