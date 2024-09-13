<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
</head>

    <style>
    .container {
        font-family: Arial, sans-serif;
        background-color: #fff;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
        margin: 40px auto; /* Updated margin property */
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

<body>
    <h1>Cadastro de Cliente </h1><br>
    <div class="container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="usuario" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="senha" required><br><br>

        <label for="password">Repita sua senha:</label>
        <input type="password" id="password" name="senha2" required><br><br>
        
        <label for="robot">Não sou um robô:</label>
        <input type="checkbox" id="robot" name="robot" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>

    <?php

    // Inclui o autoload do Composer
    require __DIR__ . "/../../vendor/autoload.php";
    use MeuProjeto\model\Cadastrar;

    // Cria uma instância da classe Cadastrar
    $cadastrar = new Cadastrar();

    // Chama o método getCadastrar
    $cadastrar->getCadastrar();

        ?>

</body>
</html>