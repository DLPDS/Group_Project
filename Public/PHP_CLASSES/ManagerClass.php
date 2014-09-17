<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/10/14
 * Time: 2:37 PM
 */

class ManagerClass extends Staff{

    function __construct(){
        require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $dbConnection=new Connection();
    }

    function formProcessing(){

        if(isset($_POST['addEmployee'])){


            $this->firstName=$_POST["firstName"];
            $this->lastName=$_POST["lastName"];
            $this->bDay=$_POST["bDay"];
            $this->username= $_POST["username"];
            $this->username=Methods::escaping($this->username);
            $this->password= $_POST["passwordName"];
            $this->password=Methods::escaping($this->password);
            $this->password=md5($this->password);
            $this->priority=$_POST["priority"];

            self::registering($this->firstName,$this->lastName,$this->bDay,$this->username,$this->password,$this->priority);

        }

    }

    function registering($firstName,$lastName,$bDay,$username,$password,$priority){
        $query="INSERT INTO staff (";
        $query.="First_Name,Last_Name,Birthday,Username,Password,Position";
        $query.=") VALUES (";
        $query.="'{$firstName}','{$lastName}','{$bDay}','{$username}','{$password}','{$priority}'";
        $query.=")";

        $result=Methods::queryExecute($query);
        if($result){
            Methods::redirectTo("manager main 1.php");

        }
        else{
            //die("Database query Failed");
            Methods::redirectTo("manager main 2.php");
        }
    }



} 