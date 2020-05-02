    <?php session_start();
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MagAp.Inc</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" href="images/navbar.png" type="image/x-icon">
      </style>
    </head>

    <body>

      <div class="fixed-top">
        <nav fixed-top id="nav" class="navbar_horizontal navbar-fexed-top">
          <ul>
            <img src="images/navbar.png" width="70" height="60" alt="MagAp.Inc" title="MagAp.Inc">
            <li><a href="#">Contatos</a></li>
            <li><a href="paginas/cadastrar.php">Cadastrar</a></li>
            <li><a href="index.php">Início</a></li>
          </ul>
        </nav>
      </div>

      <section class="container">

        <h5 style="text-align: center;">

          <br>

          LOGIN </h5>
        <hr style="background-color: rgb(12, 160, 57);" />

        <div id="div">

          <form action="login.php" method="POST">

            <label id="lb2">Usuário</label>
            <input required type="text" id="fname" name="v1" placeholder="Digite aqui seu usuário...">

            <label id="lb2">Senha</label>
            <input required type="text" id="lname" name="v2" placeholder="Digite aqui sua senha...">

            <br>

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
            <input type="submit" value="Acessar">
            <input type="reset" value="Apagar">

          </form>
        </div>

















        <footer>

          <table class="table">

            <thead>
            <tbody>

              <tr>
                <th>Conatatos</th>
                <th>Parceiros</th>
                <th></th>

              </tr>

              <tr>
                <td>
                  <p>Phone: (61) 9 9866-9975</p>

                  <p>Phone: (61)9 9623-7388</p>

                  <p>Phone: (61)9 8109-6820</p>
                </td>

                <td>Projeção</td>

                <td> <img id="rodape" src="images/cart.png" width="240" height="90" alt=""></td>

              </tr>

            </tbody>
            </thead>

        </footer>

    </body>

    </html>