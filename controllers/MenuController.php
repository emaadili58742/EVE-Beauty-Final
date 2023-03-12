<?php
require_once 'C:\xampp\htdocs\WebFinal\config\Database.php';

class MenuController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from menu');

        return $query->fetchAll();
    }

    public function readDataLekure(){
        $query = $this->db->pdo->query('SELECT * from menu where category = "lekure"');
        return $query->fetchAll();
    }

    public function readDataSyte(){
        $query = $this->db->pdo->query('SELECT * from menu where category = "syte"');
        return $query->fetchAll();
    }
    
    public function readDataBuze(){
        $query = $this->db->pdo->query('SELECT * from menu where category = "buze"');
        return $query->fetchAll();
    }



    public function insert($request){
        $request['image']='./image/'.$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO menu (menu_image, menu_title, menu_body,category, createdBy)
        VALUES (:menu_image, :menu_title, :menu_body,:category, :createdBy)');

        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->bindParam(':category', $request['category']);
        $query->bindParam(':createdBy', $request['createdBy']);
        $query->execute();    
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from menu WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $request['image']='./image/'.$request['image'];
        $query = $this->db->pdo->prepare('UPDATE menu SET menu_image = :menu_image,
        menu_title = :menu_title, menu_body = :menu_body ,category = :category WHERE id = :id');
        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->bindParam(':category', $request['category']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header("Location: menuDashboard.php");
        
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from menu WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}
?>