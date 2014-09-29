<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/11/14
 * Time: 4:29 AM
 */

class StockKeeperClass extends Staff {



    function __construct(){
      /*  require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $dbConnection=new Connection();*/
        parent::__construct();
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
            self::uploadPhoto($isbn);
        }

    }

    function addNewBook($isbn,$name,$author,$genre,$publisher,$price){
        $query="INSERT INTO book (";
        $query.="ISBN,Name,Author,Genre,Publisher,Price";
        $query.=") VALUES (";
        $query.="'{$isbn}','{$name}','{$author}','{$genre}','{$publisher}',{$price}";
        $query.=")";

        $result=Methods::queryExecute($query);
        if(!$result){
            echo("<script type=\"text/javascript\">
                alert(\"Save was not Successful\");
                </script>");

        }

    }

    function addSuppierProcess(){

        if(isset($_POST['addSupplier'])){

            $name=$_POST['supName'];
            $email=$_POST['supMail'];
            $tel=$_POST['supTel'];

            $code=$_POST['pCode'];
            $code=Methods::escaping($code);
            $other=$_POST['name'];
            $other=Methods::escaping($other);
            $city=$_POST['supCity'];
            $city=Methods::escaping($city);


            self::addNewSupplier($name,$email,$tel,$code,$other,$city);
        }

    }

    function addNewSupplier($name,$email,$tel,$code,$other,$city){
        $query1="INSERT INTO supplier (";
        $query1.="Name,Email";
        $query1.=") VALUES (";
        $query1.=" '{$name}','{$email}' ";
        $query1.=")";

        $query2="INSERT INTO supplier_telephone (";
        $query2.="TelNo";
        $query2.=") VALUES (";
        $query2.=" '{$tel}' ";
        $query2.=")";

        $query3="INSERT INTO supplier_address (";
        $query3.="Post_Code,S_Name,City";
        $query3.=") VALUES (";
        $query3.=" '{$code}','{$other}','{$city}' ";
        $query3.=")";

        $result1=Methods::queryExecute($query1);
        $result2=Methods::queryExecute($query2);
        $result3=Methods::queryExecute($query3);
        if($result1==true && $result2==true && $result3){

            echo("<script type=\"text/javascript\">
                confirm(\"Save was Successful\");
                </script>");
        }
        else{
            //die("Database query Failed");
            echo("<script type=\"text/javascript\">
                confirm(\"Save was not Successful\");
                </script>");
        }
    }

    function viewSuppliers(){

        $query1="Select * From supplier WHERE Status='Good';";
        $query2="Select TelNo From supplier_telephone;";
        $query3="Select * From supplier_address;";
        $result1=Methods::queryExecute($query1);
        $result2=Methods::queryExecute($query2);
        $result3=Methods::queryExecute($query3);
        $result=array($result1,$result2,$result3);
        return $result;


    }

    function delSupplier(){
        $ID=$_GET["username_d"];
        $ID=(int)$ID;
        $query1 = "UPDATE supplier SET Status ='Bad' WHERE Supplier_Id = {$ID} ";
        //$query2 = "DELETE FROM supplier WHERE Supplier_Id = {$ID}";
        //$result2 = mysql_query($query2);
        $result1=Methods::queryExecute($query1);
        //$result2=Methods::queryExecute($query2);
        if($result1)
        {

            echo("<script type=\"text/javascript\">
                confirm(\"Successfully Submitted\");
                </script>");
        }
        else{

            echo("<script type=\"text/javascript\">
                confirm(\"Please Try Again\");
                </script>");
        }
    }

    function uploadPhoto($isbn){
        $allowed_filetypes = array('.jpg','.jpeg','.png','.gif');
        $max_filesize = 10485760;
        $upload_path = '../../Covers/';

        $filename = $_FILES['bookCover']['name'];
        $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);

        if(!in_array($ext,$allowed_filetypes))
            die('The file you attempted to upload is not allowed.');

        if(filesize($_FILES['bookCover']['tmp_name']) > $max_filesize)
            die('The file you attempted to upload is too large.');

        if(!is_writable($upload_path))
            die('You cannot upload to the specified directory, please CHMOD it to 777.');

        if(move_uploaded_file($_FILES['bookCover']['tmp_name'],$upload_path . $filename)) {
            $query ="UPDATE book ";
            $query.="SET Image_Loc='{$filename}'";
            $query.=" WHERE ISBN={$isbn}";
            $result=Methods::queryExecute($query);

            if($result){
                Methods::redirectTo("stock_keeper - Copy.html");
            }
            else{
                Methods::redirectTo("stock_keeper - Copy (2).html");
            }


        }




    }

} 