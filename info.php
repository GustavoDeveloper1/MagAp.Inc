<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./images/navbar.png" type="image/x-icon">
  <title>MagAp.Inc</title>
  <style>
    #overflowTest {
      background: white;
      padding: 15px;
      width: 100%;
      height: 300px;
      overflow: scroll;
      border: 1px solid #fafad2;
    }
  </style>
</head>

<body>
  <!-- NavBar-->
  <nav id="nav" class="navbar navbar-expand-lg navbar-light">
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

   <!-- Tab funcionários-->
  <div class="tabs">
    <div class="tab">
      <input type="radio" id="tab-1" name="tab-group-1" checked>
      <label for="tab-1">Funcionários</label>
      <div class="content">
        <h4>Funcionários</h4>
        <a style="text-decoration: none" href="#">
          <h6>Cadastrar Funcionário</h6>
        </a>
        <hr>
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
              </tr>
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
    </div>

    <!--  
    <<Para adicionar mais Tabs, altere o id e o for de acordo com a qauntidade já existente>>
      <div class="tab">
      <input type="radio" id="tab-3" name="tab-group-1">
      <label for="tab-3">Estoque</label>
      <div class="content">
        <h3>Estoque</h3>
        <a style="text-decoration: none" href="#"><h5>Cadastrar Produto</h5></a>
        <hr>
      </div>
    </div>
-->

 <!-- Tab fornecedores-->
    <div class="tab">
      <input type="radio" id="tab-2" name="tab-group-1">
      <label for="tab-2">Fornecedores</label>

      <div class="content">
        <h4>Fornecedores</h4>
        <a style="text-decoration: none" href="#">
          <h6>Cadastrar Fornecedor</h6>
        </a>
        <hr>
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
    </div>

    <!-- Tab estoque-->
    <div class="tab">
      <input type="radio" id="tab-3" name="tab-group-1">
      <label for="tab-3">Estoque</label>
      <div class="content">
        <h4>Estoque</h4>
        <a style="text-decoration: none" href="#">
          <h6>Cadastrar Produto</h6>
        </a>
        <hr>
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
  <!--footer-->
  <footer>

 

  </tbody>
</table>
  


  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>