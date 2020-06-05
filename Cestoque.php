<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>MagAp.Inc</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="forms/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="forms/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="forms/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="forms/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="forms/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="forms/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="forms/css/util.css">
    <link rel="stylesheet" type="text/css" href="forms/css/main.css">
    <link rel="shortcut icon" href="./images/navbar.png" type="image/x-icon">
    <style>
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        input[type=number] {
            -moz-appearance: textfield;
            appearance: textfield;
        }
    </style>
</head>

<body>
    <div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-contact100">
            <form action="" method="POST"  class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Cadastro de Produtos
                </span>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Preencha este campo!">
                    <span class="label-input100">Descrição*</span>
                    <input class="input100" type="text" name="" placeholder="Descrição">
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Preencha este campo!">
                    <span class="label-input100">Data de entrada*</span>
                    <input class="input100" type="date" name="" placeholder="Data de entrada">
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Preencha este campo!">
                    <span class="label-input100">Vencimento*</span>
                    <input class="input100" type="date" name="" placeholder="Vencimento">
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Preencha este campo!">
                    <span class="label-input100">Quantidade*</span>
                    <input class="input100" type="number" name="" placeholder="Quantidade">
                </div>
                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="forms/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="forms/vendor/bootstrap/js/popper.js"></script>
    <script src="forms/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="forms/vendor/select2/select2.min.js"></script>
    <script src="forms/js/main.js"></script>
</body>

</html>