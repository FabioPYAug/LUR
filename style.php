<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
    background-color: #f2f2ed;
}

.search {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    background-color: #00000006;
    width: 750px;
    border-radius: 20px;
    padding: 5px 10px;
    color: #4b4b4b;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#searchInput {
    padding: 8px;
    border: none;
    background-color: transparent;
    width: 100%;
    outline: none;
    font-size: 20px;
}

.search label {
    height: 40px;
}






/* Estilos Gerais */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

button {
    cursor: pointer;
}

/* Botão principal de filtro */
#bt-filtros {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

#bt-filtros:hover {
    background-color: #0056b3;
}

/* Menu de Filtros */
.filtro {
    display: flex;
    position: absolute;
    top: 60px;
    left: 20px;
    z-index: 1000;
    width: 300px;
    flex-direction: column;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Overlay escurecido quando o menu está ativo */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: -1;
}

/* Estilos do Menu */
.menu {
    background-color: white;
    border-radius: 5px;
    overflow: hidden;
    border: 1px solid #ddd;
}

.unidade {
    padding: 15px;
    text-align: center;
}

/* Estilos do Botão dentro do Menu */
.buttonteste {
    background-color: white;
    border: 2px solid #007bff;
    color: black;
    padding: 10px 20px;
    font-size: 14px;
    border-radius: 5px;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}

.buttonteste:hover {
    background-color: #007bff;
    color: white;
}

/* Estilos do Menu de Opções */
.menu-opcoes {
    background-color: #f9f9f9;
    border-top: 1px solid #ddd;
    padding: 10px;
}

.menu-opcoes button {
    width: 100%;
    text-align: left;
    margin-bottom: 5px;
    font-size: 14px;
    border-radius: 5px;
}

.menu-opcoes button:hover {
    background-color: #e0e0e0;
}


</style>