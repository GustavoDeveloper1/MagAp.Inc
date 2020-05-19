<?php session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../images/navbar.png" type="image/x-icon">
  <title>MagAp.Inc</title>
</head>

<body>
  <nav id="nav" class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">MagApp.inc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Criar usuário <span class="sr-only">(Página atual)</span></a>
        <a class="nav-item nav-link" href="#">Cadastrar funcionário</a>
        <a class="nav-item nav-link" href="#">Cadastrar fornecedor</a>
        <a class="nav-item nav-link disabled" href="#">Desativado</a>
      </div>
    </div>
  </nav>
  <div class="tabs">
    <div class="tab">
      <input type="radio" id="tab-1" name="tab-group-1" checked>
      <label for="tab-1">Funcionários</label>
      <div class="content">
        <p>Funcionários</p>
        <table id="tablefunc" class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Sobrenome</th>
              <th scope="col">CPF</th>
              <th scope="col">E-mail</th>
              <th scope="col">Telefone</th>
              <th scope="col">Endereço</th>
              <th scope="col">Idade</th>
              <th scope="col">Sexo</th>
              <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp; Operações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Júlia</td>
              <td>Oliveira</td>
              <td>12345678901</td>
              <td>Júlia@gmail.com</td>
              <td>(61) 9 8759-3645</td>
              <td>Rio de Jnairo</td>
              <td>23</td>
              <td>Feminino</td>
              <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              <td>Marcos</td>
              <td>Silva</td>
              <td>17890123456</td>
              <td>marcos@gmail.com</td>
              <td>(61) 9 3645-8759</td>
              <td>Brasília-DF</td>
              <td>36</td>
              <td>Masculino</td>
              <td><button type="button" class="btn btn-warning">Editar</button> <button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--Para adicionar mais Tabs, altere o id e o for de acordo com a qauntidade já existente-->
    <div class="tab">
      <input type="radio" id="tab-2" name="tab-group-1">
      <label for="tab-2">Fornecedores</label>
      <div class="content">
        <p>Fornecedores</p>
        <table id="tablefunc" class="table">
          <thead>
            <tr>
              <th scope="col">Empresa</th>
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
    <div class="tab">
      <input type="radio" id="tab-3" name="tab-group-1">
      <label for="tab-3">Estoque</label>
      <div class="content">
        <p>Aqui vai ficar os dados do estoque</p>
      </div>
    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>