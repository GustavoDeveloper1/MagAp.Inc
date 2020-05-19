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
   .User_area li{
       padding-top: 10px;
        width: auto;
        height: 40px;
        background-color: #0a4f5f;
        border: 1px solid #0a4f5f;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
   }
   .User_area li:hover{
       background-color:  white;
   }
   .info_area{
       background-image: url(../images/back.jpg);
       height:250px;

   }
   .img{
       border: 1px solid white;
   }
   
</style>
<body>

    <div class="User_area">
        <div class="info_area">
            <div class="img"></div>
        </div>
        <ul>
            <li><a href="#">Informações Gerais</a></li>
            <li><a href="#">Cadastrar Fornecedor</a></li>
            <li><a href="#">Cadastrar Novo Usuário</a></li>
        </ul>
    </div>
    <footer class="rodape">
    
        <p class="titulo"></p>

    </footer>
</body>
</html>