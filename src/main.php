<?php

// Inclui o autoload do Composer
require __DIR__ . "/../../vendor/autoload.php";


// Usa a classe Login do namespace MeuProjeto\Login
use MeuProjeto\model\Login;
use MeuProjeto\model\UsuarioSistema;

// Cria uma instância da classe Login
$login = new Login();
$sysu = new UsuarioSistema();
$sysu->nome = "GustavoR";

var_dump($sysu->nome);

// Verifica o login (se o formulário foi enviado)
$login->verificarLogin();