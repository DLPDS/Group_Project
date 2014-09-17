<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/11/14
 * Time: 4:29 AM
 */

class StockKeeperClass extends Staff {



    function __construct(){
        require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $dbConnection=new Connection();
    }


    function addBookProcess(){

        if(isset($_POST['addBook'])){

            $isbn=$_POST['isbn'];
            $bookName=$_POST['title'];
            $author=$_POST['author'];
            $genre=$_POST['cat'];
            $genre=Methods::escaping($genre);
            $bookPublisher=$_POST['publisher'];
            $bookPrice=(float)$_POST['price'];

            self::addNewBook($isbn,$bookName,$author,$genre,$bookPublisher,$bookPrice);
        }

    }

    function addNewBook($isbn,$name,$author,$genre,$publisher,$price){
        $query="INSERT INTO book (";
        $query.="ISBN,Name,Author,Genre,Publisher,Price";
        $query.=") VALUES (";
        $query.="'{$isbn}','{$name}','{$author}','{$genre}','{$publisher}',{$price}";
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

    function addSuppierProcess(){

        if(isset($_POST['addSupplier'])){

            $name=$_POST['supName'];
            $email=$_POST['supMail'];
            $tel=$_POST['supTel'];
            $address=$_POST['supAdd'];
            $address=Methods::escaping($address);

            self::addNewSupplier($name,$email,$tel,$address);
        }

    }

    function addNewSupplier($name,$email,$tel,$address){
        $query1="INSERT INTO supplier (";
        $query1.="Name,Email,Address";
        $query1.=") VALUES (";
        $query1.="'{$name}','{$email}','{$address}'";
        $query1.=")";

        $query2="INSERT INTO supplier_telephone (";
        $query2.="TelNo";
        $query2.=") VALUES (";
        $query2.="{$tel}";
        $query2.=")";

        $result1=Methods::queryExecute($query1);
        $result2=Methods::queryExecute($query2);
        if($result1==true && $result2==true){
            Methods::redirectTo("manager main 1.php");

        }
        else{
            //die("Database query Failed");
            Methods::redirectTo("manager main 2.php");
        }
    }

    function viewSuppliers(){

        $query1="Select * From supplier;";
        $query2="Select TelNo From supplier_telephone;";
        $result1=Methods::queryExecute($query1);
        $result2=Methods::queryExecute($query2);
        $result=array($result1,$result2);
        return $result;


    }
} 