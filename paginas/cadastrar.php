<?php session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../images/navbar.png" type="image/x-icon">
  <title>MagAp.Inc</title>
</head>

<body>
  <div class="tabs">

    <div class="tab">
      <input type="radio" id="tab-1" name="tab-group-1" checked>

      <label for="tab-1">Funcionários</label>

      <div class="content">
        <p>Funcionários</p>
        <img src="../images/cart.png">
      </div>
    </div>

    <div class="tab">
      <input type="radio" id="tab-2" name="tab-group-1">
      <label for="tab-2">Fornecedores</label>
      <div class="content">
        <p>Fornecedores</p>
        <img src="../images/cart.png">
      </div>
    </div>

    <div class="tab">
      <input type="radio" id="tab-3" name="tab-group-1">
      <label for="tab-3">Página inicial</label>
      <div class="content">
        <p>Página inicial</p>
        <img src="../images/cart.png">
      </div>
    </div>
  </div>
</body>

</html>