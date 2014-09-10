<?php
    require_once("../../Includes/Connection.php");
    require_once("../../Includes/Methods.php");
    $dbConnection=new Connection();
    $allFunctions=new Methods();

?>

<?php

if(isset($_POST['submit'])){


    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $bDay=$_POST['bDay'];
    $username= $_POST['username'];
    $username=$allFunctions->escaping($username);
    $password= $_POST['passwordName'];
    $password=$allFunctions->escaping($password);
    $password=md5($password);
    $priority=$_POST['priority'];

    $allFunctions->registering($firstName,$lastName,$bDay,$username,$password,$priority);

}
?>
