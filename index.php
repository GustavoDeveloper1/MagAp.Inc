<<<<<<< HEAD
      <!DOCTYPE html>
      <html lang="pt-br">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MagAp.Inc</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
      
        </style>
      </head>
      <body>
        <nav class="navbar_horizontal">
            <ul>
              <li><a href="#">Contact-Us</a></li>
              <li><a href="cadastro.html">Register</a></li>
              <li><a href="index.php">Home</a></li> 
            </ul>
        </nav>
        <div class="container-login100" >

  <div class="wrap-login100 p-t-30 p-b-50">
    <span class="login100-form-title p-b-41">
      User Login
    </span>
    <form class="login100-form validate-form p-b-33 p-t-5" action="login.php" method="POST">
      <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100 	" type="text" name="username" placeholder="User name">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
      </div>
      <div class="wrap-input100 validate-input" data-validate="Enter password">
          <input class="input100" type="password" name="pass" placeholder="Password">
          <span class="focus-input100" data-placeholder="&#xe80f;"></span>
      </div>
      <div class="cadastre">
      <a href="cadastrocliente.html">Cadastre-se</a>
      </div>
      <div class="container-login100-form-btn m-t-32">
      <button class="login100-form-btn">
        Login
      </button>
      </div>
      <div class="container-login100-form-btn m-t-32">
      <button class="login100-form-btn">
        Limpar
      </button>
      </div>


      </form>
      </div>
      </div>
      </div>



        <footer >
          <div class="esqueda">
              <p class="titulo">Contatos</p>
              <p>Phone: +55 (61) 3300-1213</p>
          </div>
          <div class="center">
              <p class="titulo">Parceiros</p> <br>
              <p class="text">Projeção</p>
          </div>
          <div class="right">
              
          </div>
        </footer>
      </body>
      </html>
=======
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
>>>>>>> 233690a662213c196a7025abaad7829134d507df
