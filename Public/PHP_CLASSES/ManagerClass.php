<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/10/14
 * Time: 2:37 PM
 */

class ManagerClass extends Staff{

    function __construct(){
        /*require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $dbConnection=new Connection();*/
        parent::__construct();
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

           // self::uploadPhoto($this->username);
            self::registering($this->firstName,$this->lastName,$this->bDay,$this->username,$this->password,$this->priority);
            self::uploadPhoto($this->username);


        }

    }

    function registering($firstName,$lastName,$bDay,$username,$password,$priority){
        $query="INSERT INTO staff (";
        $query.="First_Name,Last_Name,Birthday,Username,Password,Position";
        $query.=") VALUES (";
        $query.="'{$firstName}','{$lastName}','{$bDay}','{$username}','{$password}','{$priority}'";
        $query.=")";

        $result=Methods::queryExecute($query);
        if(!$result){
            $_SESSION['message']="Insert staff Query execution failed ";
            Methods::redirectTo("manager.php");
        }

    }

    function uploadPhoto($username){
        $allowed_filetypes = array('.jpg','.jpeg','.png','.gif');
        $max_filesize = 10485760;
        $upload_path = '../../Uploads/';

        $filename = $_FILES['staffPhoto']['name'];
        $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);

        if(!in_array($ext,$allowed_filetypes))
            die('The file you attempted to upload is not allowed.');

        if(filesize($_FILES['staffPhoto']['tmp_name']) > $max_filesize)
            die('The file you attempted to upload is too large.');

        if(!is_writable($upload_path))
            die('You cannot upload to the specified directory, please CHMOD it to 777.');

        if(move_uploaded_file($_FILES['staffPhoto']['tmp_name'],$upload_path . $filename)) {
            $query ="UPDATE staff ";
            $query.="SET Image_Path='{$filename}'";
            $query.=" WHERE Username='{$username}'";
            $result=Methods::queryExecute($query);

            if($result){
                $_SESSION['message']="Staff member added ";
                Methods::redirectTo("manager.php");
            }
            else{
                $_SESSION['message']="Couldn't add member ";
                Methods::redirectTo("manager.php");
            }


        }




    }



} 