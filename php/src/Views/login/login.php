<?php

// use Jadeflix\Site\Infra\Conexao;

// echo "ola";
// $oConexao = new Conexao;
// echo "oi";

// // $oConexao->conectar();

// // print_r($oConexao);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
    <link rel="icon" href="../img/pipoca.png">
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="#">
                <img src="../img/jadeflix-preto.png">
            </a>
        </div>
    </div>

    <div class="login_body">
        <div class="login_box">
            <h2>Login</h2>
            <form action="../home/home.html" method="post">
                <div class="input_box">
                    <input required type="text" placeholder="Digite o seu usuário">
                </div>

                <div class="input_box">
                    <input required type="password" placeholder="Digite a sua senha">
                </div>

                <div>
                    <button class="submit">
                        Entrar
                    </button>
                </div>
            </form>

            <div class="login_footer">
                <div class="sign_up">
                    <p>Novo por aqui? <a href="#">Assine agora.</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>