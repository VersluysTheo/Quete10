<?php
class Database{
    public static function db(){
        return new PDO(
            'mysql:host=localhost;dbname=champion;charset=UTF8',
            'root',
            '', [PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]
        );
    }
} 
?>