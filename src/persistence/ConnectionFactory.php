<?php

    namespace MeuProjeto\persistence;

class ConnectionFactory {

    private static $connection = null;

    public static function getConnection() {
        if (self::$connection === null) {
            $dnsStr = "mysql:host=localhost;dbname=phpoo";
            self::$connection = new \PDO("mysql:host=localhost");
        return new \PDO(dsn: $dnsStr, username:"root", password:"root");

    }

}    