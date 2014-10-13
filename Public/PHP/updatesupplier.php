<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();


$Supplier_Id=(int)$_GET['Supplier_Id'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$UserName=$_POST['UserName'];
$Address=$_POST['Address'];
$Password=md5($_POST['Password']);
$TelNo=($_POST['TelNo']);
// update data in mysql database
$sql="UPDATE supplier SET Name='$Name', Email='$Email',UserName='$UserName',Password='$Password' ,Address='$Address' WHERE Supplier_Id=$Supplier_Id";
$result=Methods::queryExecute($sql);



$sql1="UPDATE supplier_telephone SET TelNo='$TelNo' WHERE Supplier_Id=$Supplier_Id";
$result1=Methods::queryExecute($sql1);

// if successfully updated.
if($result && $result1){

    Methods::redirectTo("viewsupplier.php");
}

else {
    echo "Error";
}

?>