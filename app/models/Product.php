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

    public function create(){
        $SQL = 'INSERT INTO products(name) VALUE(:name)';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['name'=>$this->name]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->rowCount();
    }

    public function find($product_id){
        $SQL = 'SELECT * FROM products WHERE `id`=:product_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['product_id' => $product_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetch();
    }
}