<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div id="wrapper">
        <!-- SIDEBAR -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="adm-lobby.php">Lobby</a></li>
                <li><a href="adm-NE.php">Noite Escura</a></li>
                <li><a href="adm-OP.php">Ordem Paranormal</a></li>
                <li><a href="adm-SH.php">Sussurros Históricos</a></li>
            </ul>
        </div>

        <!-- CONTEÚDO -->
        <div id="page-content-wrapper">
            <h1 class="TITULO">NOITE ESCURA</h1>
            <div class="form-container">
                <!-- Formulário 1 -->
                <form action="index.html" method="post">
                    <h1>Novos Dados</h1>
                    <label for="job">Qual o Tipo de dados:</label>
                    <select id="job" name="user_job">
                        <optgroup label="Noite Escura">
                            <option value="NEInv">Inventário</option>
                            <option value="NEGal">Galeria</option>
                            <option value="NEDoc">Documento</option>
                        </optgroup>
                    </select>
                    <button type="submit">Enviar</button>
                </form>

                <!-- Formulário 2 -->
                <form action="index.html" method="post">
                    <h1>Modificar Dados</h1>
                    <label for="op-job">Qual o Tipo de dados:</label>
                    <select id="op-job" name="user_op_job">
                        <optgroup label="Ordem Paranormal">
                            <option value="OPInv">Inventário</option>
                            <option value="OPGal">Galeria</option>
                            <option value="OPDoc">Documento</option>
                        </optgroup>
                    </select>
                    <button type="submit">Abrir</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>


<style>
    @import url("https://fonts.googleapis.com/css?family=Inter:400|Jura:400");

    .TITULO {
        font-family: 'Jura', sans-serif;
        font-size: 2.9em;
        text-align: center;
        color: #384047;
        margin-bottom: 20px;
    }

    body {
        font-family: 'Nunito', sans-serif;
        color: #384047;
    }

    form {
        flex: 1;
        max-width: 100%;
        margin: 10px;
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
        box-sizing: border-box;
    }

    h1 {
        margin: 0 0 30px 0;
        text-align: center;
    }

    input,
    select {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 16px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 100%;
        background-color: #e8eeef;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;
    }

    button {
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #4bc970;
        font-size: 18px;
        text-align: center;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #3ac162;
        margin-bottom: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #3ac162;
    }

    #wrapper {
        display: flex;
        transition: all 0.5s ease;
    }

    #sidebar-wrapper {
        width: 250px;
        background: #000;
        color: #999;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        overflow-y: auto;
        transition: all 0.5s ease;
    }

    #sidebar-wrapper ul {
        list-style: none;
        padding: 0;
    }

    #sidebar-wrapper ul li {
        padding: 10px;
        text-indent: 15px;
    }

    #sidebar-wrapper ul li a {
        color: #999;
        text-decoration: none;
    }

    #sidebar-wrapper ul li a:hover {
        color: #fff;
        background: rgba(255, 255, 255, 0.2);
        border-left: 2px solid red;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    #page-content-wrapper {
        margin-left: 250px;
        padding: 20px;
        width: calc(100% - 250px);
        transition: all 0.5s ease;
    }

    .form-container {
        display: flex;
        gap: 20px;
        justify-content: space-evenly;
        align-items: flex-start;
    }

    @media (max-width: 768px) {
        #sidebar-wrapper {
            width: 0;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #page-content-wrapper {
            margin-left: 0;
            padding: 10px;
        }

        #wrapper.toggled #page-content-wrapper {
            margin-left: 250px;
        }

        .form-container {
            flex-direction: column;
            align-items: stretch;
        }
    }
</style>