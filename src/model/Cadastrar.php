<?php

// Definindo o namespace
namespace MeuProjeto\model;

class Cadastrar{

    public function __construct($cadastrar = null) {
        $this->$cadastrar = $cadastrar;
    }

    public function getCadastrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuarioCad = htmlspecialchars(trim($_POST["usuario"]));
            $senhaCad = htmlspecialchars(trim($_POST["senha"]));
            $senha2Cad = htmlspecialchars(trim($_POST["senha2"]));



            if($senhaCad == $senha2Cad){
                echo "Cadastro realizado com sucesso!";

                header("Location: ./views/TelaCadastro.php");

            return; // Interrompe o loop após cadastrar o usuário.  

            }else{
                echo "As senhas não conferem!";
            }
        }
    }

}
    