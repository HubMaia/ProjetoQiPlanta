<?php

    namespace MeuProjeto\persistence;

class ConnectionFactory {

    private static $connection = null;

    //Conexão com Banco de Dados MySQL
    public static function getConnection() {
       
        if (self::$connection === null) {
            $dnsStr = "mysql:host=localhost;dbname=phpoo";
            self::$connection = new \PDO("mysql:host=localhost");

        }

        return self::$connection;

    }    
}