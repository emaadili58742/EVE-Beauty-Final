<?php

require_once 'C:\xampp\htdocs\WebFinal\config\Database.php';

class ContactController{

    public $db;

    public function __construct(){
        $this->db=new Database;
    }

    public function readContact(){
        $query=$this->db->pdo->query("SELECT * from contact");
        return $query->fetchAll();
    }
    public function insertContact($request){
        $query=$this->db->pdo->prepare("INSERT into contact (emri , email , message)
        values (:emri ,:email , :message)");
        $query->bindParam(':emri',$request['emri']);
        $query->bindParam('email',$request['email']);
        $query->bindParam('message',$request['message']);
        $query->execute();
    
    }
    public function deleteContact($id){
        $query=$this->db->pdo->prepare("DELETE from contact where id=:id");
        $query->bindParam(':id',$id);
        $query->execute();
        return header("Location: menuDashboard.php");
    }
}

?>