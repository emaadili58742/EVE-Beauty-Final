<?php
require_once '../controllers/SliderController.php';
if (isset($_GET['id'])){
    $sliderid= $_GET['id'];
}
$slider=new SliderController;
$slider->deleteSlider($menuid);

?>