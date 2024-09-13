<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form action="processar_cadastro.php" method="POST">
        
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="password">Repita sua senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="robot">Não sou um robô:</label>
        <input type="checkbox" id="robot" name="robot" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>