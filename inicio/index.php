<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Magap</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="../images/navbar.png" type="image/x-icon">
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Magap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="func.php">Funcionários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fornecedor.php">Fornecedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="estoque.php">Estoque</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Cusuario.php"><i class="fas fa-users-cog fa-2x" title="Cadastrar usuário"></i></a>
          </li>
          <li class="nav-item">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Magap</h1>
            <span class="subheading">A Magap</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="myNav" class="soverlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="soverlay-content">
      <a href="../Cfuncionario.php">Cadastrar Funcionário</a>
      <a href="../Cfornecedor.php">Cadastrar Fornecedor</a>
      <a href="../Cestoque.php">Cadastrar Produto</a>
    </div>
  </div>
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h3>Contatos</h3>
        <ul class="list-unstyled three-column">
          <li>Construção</li>
          <li>Construção</li>
          <li>Construção</li>
          <li>Construção</li>
          <li>Construção</li>
          <li>Construção</li>
          <li>Construção</li>
          <li>Construção</li>
        </ul>
        <ul class="list-unstyled socila-list">
          <li><img src="img/img.gif" alt="" width="45"/></li>
          <li><img src="img/img.gif" alt="" width="45"/></li>
          <li><img src="img/img.gif" alt="" width="45"/></li>
          <li><img src="img/img.gif" alt="" width="45"/></li>
          <li><img src="img/img.gif" alt="" width="45"/></li>
          <li><img src="img/img.gif" alt="" width="45"/></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6">
        <h3>Developers</h3>
        <div class="media">
          <a href="../error.php" class="pull-left">
            <img src="img/user.webp" alt="" width="60" class="media-object" />
          </a>
          <div class="media-body-1"> 
            <h4 class="media-heading">Pedro Bispo</h4>
            <p class="media-body-p1">&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="media">
          <a href="../error.php" class="pull-left">
          <img src="img/user.webp" alt="" width="60" class="media-object" />
          </a>
          <div class="media-body-2">
            <h4 class="media-heading">Raphael Neiva</h4>
            <p class="media-body-p2">&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="media">
          <a href="../error.php" class="pull-left">
          <img src="img/user.webp" alt="" width="60" class="media-object" />
          </a>
          <div class="media-body-3">
            <h4 class="media-heading">Gustavo Dias</h4>
            <p class="media-body-p3">&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h3>Our Work</h3>
        <img src="img/dev1.gif" alt="" width="150"/>
        <img src="img/dev2.gif" alt="" width="150"/>
        <img src="img/dev3.gif" alt="" width="150"/>
        <img src="img/dev4.gif" alt="" width="150"/>
      </div>
    </div>
  </div>
  <div class="copyright text-center">
    Copyright &copy; 2020 <span>MagAp</span>
  </div>
</footer>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/clean-blog.min.js"></script>
</body>
</html>