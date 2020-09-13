<?php

class Product extends Model{
    var $name;

    public function get(){
        
        $SQL = 'SELECT * FROM products';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetchAll();

    }
}