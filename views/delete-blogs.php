<?php
require_once '../controllers/BlogController.php';
if (isset($_GET['id'])){
    $blogID= $_GET['id'];
}
$blog=new BlogController;
$blog->delete($blogID);

?>