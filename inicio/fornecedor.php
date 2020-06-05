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
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/navbar.png" type="image/x-icon">
  <link rel="stylesheet" href="css/frm.css">
</head>

<body>
  <!-- NavBar -->
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header com banner -->
  <header class="masthead" style="background-image: url('img/fornecedor.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Fornecedores</h1>
            <span class="subheading">Dados dos Fornecedores</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Container com a tabela -->
  <div class="container-fluid">
    <a style="text-decoration: none" href="../Cfornecedor.php">
      <h5>Cadastrar Fornecedor</h5>
    </a>
    <table class="table">
      <thead class="thead">
        <tr>
          <th scope="col">Nome Fantasia</th>
          <th scope="col">CNPJ</th>
          <th scope="col">E-mail</th>
          <th scope="col">Telefone</th>
          <th scope="col">Cidade</th>
          <th scope="col">Fornece</th>
          <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp; Operações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Coca-Cola</td>
          <td>12345678901</td>
          <td>Júlia@gmail.com</td>
          <td>(61) 9 8759-3645</td>
          <td>Rio Grande do Sul</td>
          <td>Refrigerantes</td>
          <td><button type="button" class="btn btn-success">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
        </tr>
        <tr>
          <td>Galo</td>
          <td>17890123456</td>
          <td>marcos@gmail.com</td>
          <td>(61) 9 3645-8759</td>
          <td>Goiânia</td>
          <td>Massas</td>
          <td><button type="button" class="btn btn-success">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
        </tr>
      </tbody>
    </table>
  </div>
  <hr>
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Magap 2020</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/clean-blog.min.js"></script>
</body>

</html>