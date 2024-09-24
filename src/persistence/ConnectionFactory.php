<?php

    namespace MeuProjeto\persistence;

use \PDO;

class ConnectionFactory {

    private static $connection = null;

    //Conexão com Banco de Dados MySQL
    public static function getConnection() {
       
        if (self::$connection === null) {
            $dnsStr = "mysql:host=172.17.0.2;dbname=bdqiplanta";
            self::$connection = new \PDO($dnsStr, "root", "1234");  
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$connection;

    }    

}