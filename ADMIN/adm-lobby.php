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
            <div class="col-md-12">
                <form action="index.html" method="post">
                    <h1>Novos Dados NE</h1>
                    <label for="job">Qual o Tipo de dados:</label>
                    <select id="job" name="user_job">
                        <optgroup label="Noite Escura">
                            <option value="NEInv">Inventário</option>
                            <option value="NEGal">Galeria</option>
                            <option value="NEDoc">Documento</option>
                        </optgroup>
                        <optgroup label="Ordem Paranormal">
                            <option value="OPInv">Inventário</option>
                            <option value="OPGal">Galeria</option>
                            <option value="OPDoc">Documento</option>
                        </optgroup>
                    </select>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const wrapper = document.getElementById("wrapper");
            wrapper.addEventListener("click", () => {
                wrapper.classList.toggle("toggled");
            });
        });
    </script>
</body>

</html>

<style>
    body {
        font-family: 'Nunito', sans-serif;
        color: #384047;
    }

    form {
        max-width: 300px;
        margin: 10px auto;
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
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

    @media (max-width: 768px) {
        #sidebar-wrapper {
            width: 0;
            transition: all 0.5s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #page-content-wrapper {
            margin-left: 0;
        }

        #wrapper.toggled #page-content-wrapper {
            margin-left: 250px;
        }
    }
</style>