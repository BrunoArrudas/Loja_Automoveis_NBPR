<?php

class Database {

 public static $instance = null;
 public $conexao;
 public $host = 'localhost';
 public $db = "loja_nbpr";
 public $usuario = 'root';
 public $password = '';

 public function __construct()
 {
    try {
        $this->conexao = new PDO("mysql:host=$this->host; dbname=$this->db", $this->usuario, $this->password);
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'Connection failed: '. $e->getMessage();
    }
 }

 public static function getInstance()
 {
     if (!self::$instance) {
         self::$instance = new Database();
     }
     return self::$instance;
 }

 public function getConnection() {
     return $this->conexao;
 }

}








?>