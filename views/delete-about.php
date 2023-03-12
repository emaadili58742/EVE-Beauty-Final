<?php
require_once '../controllers/aboutController.php';
if (isset($_GET['id'])){
    $aboutID= $_GET['id'];
}
$about=new AboutController;
$about->delete($aboutID);

?>