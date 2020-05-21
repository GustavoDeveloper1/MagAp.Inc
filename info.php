<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./images/navbar.png" type="image/x-icon">
  <style>
    #overflowTest {
      background: white;
      padding: 15px;
      width: 100%;
      height: 300px;
      overflow-x: hidden;
      overflow-y: scroll;
      border: 1px solid #fafad2;
    }
  </style>
  <title>MagAp.Inc</title>
</head>
<body>
  <!-- NavBar-->
  <nav id="nav" class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="#">MagAp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="textoNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link disabled navbar-brand" href="#">Desativado</a>
        </li>
      </ul>
      <!-- Botão de opções-->
      <div class="btn-group dropleft">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Cadastrar novo usuário</a>
          <a class="dropdown-item" href="#">Sair</a>
        </div>
      </div>
  </nav>
  <br><br><br>
  <div class="container-fluid">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Funcionários</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Fornecedores</a>
        <a class="nav-item nav-link" id="nav-estoque-tab" data-toggle="tab" href="#nav-estoque" role="tab" aria-controls="nav-estoque" aria-selected="false">Estoque</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <p>Em Produção
        </p>

      </div>
      <!--Tabela funcionários-->
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <br>
        <h4>Funcionários</h4>
        <a style="text-decoration: none" href="#">
          <h6>Cadastrar Funcionário</h6>
        </a>
        <div id="overflowTest">
          <table id="tablefunc" class="table">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">CPF</th>
                <th scope="col">Cargo</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp; Operações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Júlia</td>
                <td>Oliveira</td>
                <td>12345678901</td>
                <td>Gerente</td>
                <td>(61) 9 8759-3645</td>
                <td>Rio de Jnairo</td>
                <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
              </tr>
              <tr>
                <td>Marcos</td>
                <td>Silva</td>
                <td>17890123456</td>
                <td>Atendente</td>
                <td>(61) 9 3645-8759</td>
                <td>Brasília-DF</td>
                <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
            </tbody>
          </table>
        </div>
      </div>
      <!--Tabela fornecedores-->
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <br>
        <h4>Fornecedores</h4>
        <a style="text-decoration: none" href="#">
          <h6>Cadastrar Fornecedor</h6>
        </a>
        <div id="overflowTest">
          <table id="tablefunc" class="table">
            <thead>
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
                <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
              </tr>
              <tr>
                <td>Galo</td>
                <td>17890123456</td>
                <td>marcos@gmail.com</td>
                <td>(61) 9 3645-8759</td>
                <td>Goiânia</td>
                <td>Massas</td>
                <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--Tabela estoque-->
      <div class="tab-pane fade" id="nav-estoque" role="tabpanel" aria-labelledby="nav-estoque-tab">
        <br>
        <h4>Estoque</h4>
        <a style="text-decoration: none" href="#">
          <h6>Cadastrar Produto</h6>
        </a>
        <div id="overflowTest">
          <table id="tablefunc" class="table">
            <thead>
              <tr>
                <th scope="col">Descrição do Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data de Entrada</th>
                <th scope="col">Data de vencimento</th>
                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;Operações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Coca-Cola</td>
                <td>200</td>
                <td>12/09/2019</td>
                <td>26/08/2022</td>
                <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
              </tr>
              <tr>
                <td>Coca-Cola</td>
                <td>200</td>
                <td>12/09/2019</td>
                <td>26/08/2022</td>
                <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
              </tr>
              <tr>
                <td>Coca-Cola</td>
                <td>200</td>
                <td>12/09/2019</td>
                <td>26/08/2022</td>
                <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Footer-->
  <footer>
    <h4>Em Produção</h4>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>