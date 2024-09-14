<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/cadastro&login.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Cliente </h1><br>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
        <label for="username">Nome de Usuário:</label>
        <input class="form-input" type="text" id="username" name="usuario" placeholder="Insira um nome de usuário" required><br><br>
        
        <label for="password">Senha:</label>
        <input class="form-input" type="password" id="password" name="senha" placeholder="Insira uma senha" required><br><br>

        <label for="password">Repita sua senha:</label>
        <input class="form-input" type="password" id="password" name="senha2" placeholder="Confirme sua senha" required><br><br>

        <label for="robot">Não sou um robô:</label>
        <input type="checkbox" id="robot" name="robot" required><br><br>
        
        
        <input class="btn-cadastro" type="submit" value="Cadastrar">
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