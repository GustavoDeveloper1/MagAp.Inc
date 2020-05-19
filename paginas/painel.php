<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do Usuário</title>
</head>
<style>

    *{
        margin: 0px;
        padding: 0px;
    }
body{
    height: auto;
}
   .User_area{
       background-color: rgb(80, 156, 255);
       height: 900px;
       width: 21%;
   }
   .info_area{
       background-image: url(../images/back.jpg);
       height:200px;
   }
</style>
<body>
    <nav class="navbar_horizontal">
        <ul>
            <li></li>
            <li></li>
        </ul>
    </nav>
    <div class="User_area">
        <div class="info_area">
            <div class="img"></div>
        </div>
    </div>
    <footer class="rodape">
    
        <p class="titulo"></p>

    </footer>
</body>
</html>