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
    body {
      background-image: url(images/back.gif);
      height: auto;
    }
  </style>
</head>

<body>

  <div class="interface">
    
    <section class="container">

      <div id="div">

        <form action="" method="POST">
          <br>

          <div class="label-float">

            <input type="text" placeholder=" " required name="usuario" />

            <label>Usuário</label>
          </div>

          <br />

          <div class="label-float">

            <input type="text" placeholder=" " required name="senha" />

            <label>Senha</label>

          </div>

          <button class="button button1">Acessar</button>

        </form>

      </div>


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

  </div>
  </section>
  </div>
</body>

</html>