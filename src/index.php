<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Login</title> 

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form{
            padding: 10px;
            position: center;
            margin-left: -15px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin:40px;
        }
        .container h2 {
            margin-bottom: 20px;
        }
        .container input {
            width: 100%;
            padding: 10px 0;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container button {
            width: 48%;
            padding: 10px;
            margin: 10px 1%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-btn {
            background-color: #4CAF50;
            color: white;
        }
        .register-btn {
            background-color: #008CBA;
            color: white;
        }
        .login-btn:hover, .register-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Faça seu Login ou se Cadastre abaixo:</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="usuario" placeholder="Digite o nome do Usuario" required>
            <input type="password" name="senha" placeholder="Digite a Senha" required>
            <div>
                <button type="submit" class="login-btn">Login</button>
                <button type="button" class="register-btn">Cadastrar</button>
            </div>
        </form>
       

        
        <?php


//Este código abaixo exibe os erros que o PHP der na tela do usuário propositalmente, para que assim possam fazer a verificação manual do problema que possa estar ocorrendo.

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

        // Usa a classe Login do namespace MeuProjeto\Login
        
        include (__DIR__ . '/../vendor/autoload.php'); 
        use MeuProjeto\model\Login; 

        // Instancia a classe Login
        $login = new Login(); 

        // Verifica o login (se o formulário foi enviado)
        $login->verificarLogin(); 
        ?>
    </div>
</body>
</html>