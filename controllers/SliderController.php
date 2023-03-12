<?php
    require_once 'C:\xampp\htdocs\WebFinal\config\Database.php';
    
    class SliderController{
        public $db;
        public function __construct(){
            $this->db=new Database;
        }
    
    
    public function readSlider(){
        $query = $this -> db -> pdo -> query('SELECT * from slider');
        return $query->fetchAll();
    }

    public function insertSlider($request){
        $request['image']='./image/'.$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO slider (slider_image, slider_title, slider_body)
        VALUES (:slider_image, :slider_title, :slider_body)');

        $query->bindParam(':slider_image', $request['image']);
        $query->bindParam(':slider_title', $request['title']);
        $query->bindParam(':slider_body', $request['body']);
        $query->execute();

    
    }
    public function editSlider($id){
        $query = $this->db->pdo->prepare('SELECT * from slider WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function updateSlider($request, $id){
        $query = $this->db->pdo->prepare('UPDATE slider SET slider_image = :slider_image,
        slider_title = :slider_title, slider_body = :slider_body WHERE id = :id');
        $query->bindParam(':slider_image', $request['image']);
        $query->bindParam(':slider_title', $request['title']);
        $query->bindParam(':slider_body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header("Location: menuDashboard.php");
    }
    public function deleteSlider($id){
        $query = $this->db->pdo->prepare('DELETE from slider] WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}
?>