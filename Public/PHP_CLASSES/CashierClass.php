<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/11/14
 * Time: 4:29 AM
 */

class CashierClass extends Staff {

    var $searchField;

    function __construct(){
        require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $dbConnection=new Connection();
    }

    function Search(){

        if(isset($_POST['searching'])){
            $this->searchField=$_POST['bookField'];
            $query="Select * From staff where First_Name Like '%{$this->searchField}%';";
            $result=Methods::queryExecute($query);
            return $result;
        }

    }

} 