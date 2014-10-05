<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();

$oldUserName=$_GET['oldUserName'];
$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$Birthday=$_POST['Birthday'];
$Username=$_POST['Username'];
$Position=$_POST['position'];
$Password=md5($_POST['Password']);
// update data in mysql database
$sql="UPDATE staff SET First_Name='$firstName', Last_Name='$lastName', Birthday='$Birthday',Username='$Username',Password='$Password' ,Position='$Position' WHERE Username='$oldUserName'";
$result=Methods::queryExecute($sql);

// if successfully updated.
if($result){

    Methods::redirectTo("viewStaff.php");
}

else {
    echo "ERROR";
}

?>