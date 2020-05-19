<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central do Assinante</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/navbar.png" type="image/x-icon">
    <style>
      body{
        background-image:url(images/back.gif);
        height: auto;
      }
    </style> 
  </head>
  <body>
    <div class="interface">
      <section class="container">
        <h5 style="text-align: center;"><br>
          <img src="images/navbar.png" alt="MagAp.Inc" width=50px; height="50px"> 
        </h5>
        <hr style="background-color: rgb(12, 160, 57);" />
        <div id="container">
          <form action="login.php" method="POST" height="auto">
            <label id="">Usuário</label>
            <input required type="text" id="fname" name="v1" placeholder="Digite aqui seu usuário..." class="input100">
               <label id="lb2">Senha</label>
            <input required type="text" id="lname" name="v2" placeholder="Digite aqui sua senha...">
            <input type="checkbox" name="remember" id="remember1">Mantenha-me Conectado
            <br>
            <a href="paginas/cadastrar.php">Cadastre-se</a>
            <!-- AVISO DE SENHA INVÁLIDA-->
            <?php
            if (isset($_SESSION['nao_autenticado'])) :
            ?>
              <div id="danger" class="alert alert-dark" role="alert">
                <b>ERRO:</b> Usuário ou senha inválidos!
              </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
            <input  class="login100-form-btn" type="submit" value="Acessar">
            <input class="login100-form-btn" type="reset" value="Apagar">
          </form>
        </div> 
      </section>  
    </div>
  </body>
</html>

