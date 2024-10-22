<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html {
    height: 100%;
    background-color: #fff;
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
}

header.rolagem {
    background-color: #fff;
    padding: 20px 4%;
}

header.rolagem a, header.rolagem i {
    color: #FE775A;
}

header i {
    font-size: 30px;
    color: #fff;
}

header ul {
    list-style-type: none;
}

header ul li {
    display: inline-block;
    margin: 0 40px;
}

header ul li a {
    color: #000; 
    text-decoration: none;
}

.btn-contato button {
    border-radius: 99px;
    gap: 30px;
    font-size: 20px;
    width: 120px;
    height: 40px;
    border: 0;
    background-color: #FE775A;
    color: #fff;
    cursor: pointer;
    transition: .2s;
}

.banner-1 {
    background-color: #1a1a1a; 
    color: #fff;
}

.banner-2 {
    background-image: url('../Imagens/TOMOFUNDO.png');
    background-size: cover;
    background-position: center;
    padding: 50px 0;
    color: #4b3a29;
    border: 7px solid #7f6a4d;
    text-align: center;
}


.banner h1 {
    font-size: 4em;
    color: #fff;
}

.banner h1 span {
    color: #FFAE81;
}

.search {
    display: flex;
    align-items: center;
    border: 2px solid #7f6a4d;
    background-color: rgba(255, 255, 255, 0.8);
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
    font-size: 20px;
    color: #4b3a29;
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