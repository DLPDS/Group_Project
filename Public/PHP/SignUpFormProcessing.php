<?php
    require_once("../../Includes/Connection.php");
    require_once("../../Includes/Methods.php");
    $dbConnection=new Connection();
    $allFunctions=new Methods();

?>

<?php

if(isset($_POST['submit'])){

    $username= $_POST['username'];
    $username=$dbConnection->escaping($username);
    $password= $_POST['password'];
    $password=$dbConnection->escaping($password);
    $password=md5($password);
    $priority=$_POST['priority'];

    $query="INSERT INTO staff (";
    $query.="Username,Password,Position";
    $query.=") VALUES (";
    $query.="'{$username}','{$password}','{$priority}'";
    $query.=")";
    $result=$dbConnection->connecting($query);

    if($result){
        $allFunctions->redirectTo("signIn.php");
    }
    else{
        //die("Database query Failed");
        $allFunctions->redirectTo("../HTML/signUp.html");
    }

}
?>
