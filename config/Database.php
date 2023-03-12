<?php
class Database{
    public $pdo;

    public function __construct(){
        try{
            $link = new PDO('mysql:host=localhost;dbname=webfinal', 'root','');
            $this->pdo = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
?>