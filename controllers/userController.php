<?php
    require_once 'C:\xampp\htdocs\WebFinal\config\Database.php';

    class User{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readUser(){
            $query = $this->db->pdo->query('SELECT * FROM users');

            return $query->fetchAll();
        }

        public function insertUser($request){
            $query = $this->db->pdo->prepare('INSERT INTO users (emri,username, email, numri, password) VALUES (:emri, :username, :email, :numri, :password)');

            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":username", $request['username']);
            $query->bindParam(":email", $request['email']);
            $query->bindParam(":numri", $request['numri']);
            $query->bindParam(":password", $request['pass']);

            $query->execute();

            return header('Location: ./index.php');
        }

        public function editUser($id){
            $query = $this->db->pdo->prepare('SELECT * FROM users where id = :id');

            $query->bindParam(":id", $id);

            $query->execute();

            return $query->fetch();
        }

        public function updateUser($request, $id){
            $query = $this->db->pdo->prepare('UPDATE users SET emri = :emri,
            username = :username, email = :email, numri = :numri, password= :password WHERE id = :id');
            $query->bindParam(':emri', $request['emri']);
            $query->bindParam(':username', $request['username']);
            $query->bindParam(':numri', $request['numri']);
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':password', $request['pass']);
            $query->bindParam(':id', $id);
            $query->execute();

            return header('Location: menuDashboard.php');
        }
        public function deleteUser($id){
            $query = $this->db->pdo->prepare('DELETE from users WHERE id=:id');
            $query->bindParam(':id', $id);
            $query->execute();
    
            return header("Location: menuDashboard.php");
        }
    }
?>