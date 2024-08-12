<?php
abstract class AbstractDatabase{
    private static $user = 'root';
    private static $host = '127.0.0.1';
    private static $pass = '';
    protected $dbName;
    protected $conn; 
    abstract function set();
    protected function connect(){
        try{
            $this->conn = new PDO('mysql:dbname='.$this->dbName.';host='.self::$host,self::$user,self::$pass);
        }catch(PDOException $e){
            echo 'Fallo la conexion'. $e->getMessage();
        }  
        return $this->conn;
    }
    protected function disconnect(){
        $this->conn = null;
        return $this->conn;
    }
}