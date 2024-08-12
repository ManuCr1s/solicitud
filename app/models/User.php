<?php
require_once 'app/core/AbstractDatabase.php';
class User extends AbstractDatabase{
    public function __construct(){
        $this->dbName = 'solicitud';
    }
    public function set($user_data = array()){
        $sql = 'INSERT INTO usuario(number_document,type_document,name_user,last_name,email,phone) VALUES (?,?,?,?,?,?)';
        try{
            $stmt = $this->connect()->prepare($sql); 
            $stmt->bindParam(1, $user_data['number_document'], PDO::PARAM_STR);
            $stmt->bindParam(2, $user_data['type_document'], PDO::PARAM_STR);
            $stmt->bindParam(3, $user_data['name_user'], PDO::PARAM_STR);
            $stmt->bindParam(4, $user_data['last_name'], PDO::PARAM_STR);
            $stmt->bindParam(5, $user_data['email'], PDO::PARAM_STR);
            $stmt->bindParam(6, $user_data['phone'], PDO::PARAM_STR);
            $stmt->execute();
        }catch(PDOException $e){
            echo 'No se puede ingresar el registro'.$e->getMessage();
        }
    }
}
