<!DOCTYPE html>
<html>
<head>

<title>Noite Escura</title>
<?php include "./style.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <div class="search">
        <label for="searchInput">
            <span class="material-symbols-outlined"></span>
        </label>
        <input type="text" id="searchInput" placeholder="Pesquisar">
    </div>

    <script type ="text/javascript">
        $(document).ready(function(){

            $("#searchInput").keyup(function(){
                var input = $(this).val();
                alert(input)
            })
        });
    </script>
</body>

</html>
<?php

?>