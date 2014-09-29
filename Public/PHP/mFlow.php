<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();

if(isset($_POST['addEmployee'])){
    $SANHINDAManager->formProcessing();
}

if(isset($_POST['upload'])){
    $SANHINDAManager->uploadPhoto();
}

?>