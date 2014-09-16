<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/11/14
 * Time: 4:29 AM
 */

class StockKeeperClass extends Staff {

    var $isbn;
    var $bookName;
    var $author;
    var $genre;
    var $bookPublisher;
    var $bookPrice;
    var $quantity;
    var $comment;
    var $userRate;
    var $suppierID;


    function __construct(){
        require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $dbConnection=new Connection();
    }


    function formProcessing(){

        if(isset($_POST['BOOKADD'])){


            $this->isbn=$_POST['isbn'];
            $this->bookName=$_POST['title'];
            $this->author=$_POST['author'];
            $this->genre=$_POST['cat'];
            $this->bookPublisher="aaa";
            $this->bookPrice=1.2;
            $this->quantity=5;

            self::registering($this->isbn,$this->bookName,$this->author,$this->genre,$this->bookPublisher,$this->bookPrice);

        }

    }

    function registering($firstName,$lastName,$bDay,$username,$password,$priority){
        $query="INSERT INTO book (";
        $query.="ISBN,Name,Author,Genre,Publisher,Price";
        $query.=") VALUES (";
        $query.="'{$firstName}','{$lastName}','{$bDay}','{$username}','{$password}',{$priority}";
        $query.=")";

        $result=Methods::queryExecute($query);
        if($result){
            Methods::redirectTo("../PHP/manager main 1.php");

        }
        else{
            //die("Database query Failed");
            Methods::redirectTo("../PHP/manager main 2.php");
        }
    }
} 