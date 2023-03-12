<?php

require_once 'C:\xampp\htdocs\WebFinal\config\Database.php';

class AboutController{

    public $db;

    public function __construct(){
        $this ->db= new Database;
    }
    public function readAbout(){
        $query=$this->db->pdo->query('SELECT * from about');
        return $query->fetchAll();
    }
    public function insertabout($request){
        $query = $this->db->pdo->prepare('INSERT INTO about (title,body)
        VALUES (:title,:body)');
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':body', $request['body']);
        $query->execute();
    }
    public function editabout($id){
        $query = $this->db->pdo->prepare('SELECT * from about WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function updateabout($request, $id){
        $query = $this->db->pdo->prepare('UPDATE about SET title = :title, body = :body WHERE id = :id');
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header("Location: menuDashboard.php");
    }
    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from about WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }


    }


?>