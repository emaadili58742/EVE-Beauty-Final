<?php

require_once 'C:\xampp\htdocs\WebFinal\config\Database.php';

class BlogController{

    public $db;

    public function __construct(){
        $this ->db= new Database;
    }
    public function readBlog(){
        $query=$this->db->pdo->query('SELECT * from blogs');
        return $query->fetchAll();
    }
    public function insertblog($request){
        $query = $this->db->pdo->prepare('INSERT INTO blogs (title,body)
        VALUES (:title,:body)');
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':body', $request['body']);
        $query->execute();
    }
    public function editblog($id){
        $query = $this->db->pdo->prepare('SELECT * from blogs WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function updateblog($request, $id){
        $query = $this->db->pdo->prepare('UPDATE blogs SET title = :title, body = :body WHERE id = :id');
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header("Location: menuDashboard.php");
    }
    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from blogs WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }


    }


?>