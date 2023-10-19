<?php

namespace DoktorRandevu\config;

class Baglanti {
    public static function getDbConnection() 
    {
        // Veritabanı bağlantı ayarlarını burada yapın
        $host     = 'localhost';
        $dbname   = 'testdb';
        $username = 'root';
        $password = 'root';

        try {
            $db = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (\PDOException $e) {
            echo "Bağlantı hatası: " . $e->getMessage();
            return null;
        }
    }
}
?>