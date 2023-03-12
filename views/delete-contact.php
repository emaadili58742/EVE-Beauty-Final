<?php
require_once '../controllers/ContactController.php';
if (isset($_GET['id'])){
    $contactID= $_GET['id'];
}
$contact=new ContactController;
$contact->deleteContact($contactID);

?>