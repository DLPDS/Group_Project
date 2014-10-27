<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 10/27/14
 * Time: 1:08 PM
 */

class salesOrder {

    var $session;
    var $methods;


    function __construct(){

        require_once("../../Includes/Session.php");
        require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $this->session=new Session();
        $dbConnection=new Connection();
        $this->methods=new Methods();

    }

    function salesNoGen(){
        $sql="SELECT max(Sale_Id) FROM sale";
        $result=Methods::queryExecute($sql);
        return $result;
    }
    function genDate(){
        $date = date('Y-m-d');
        $date = strtotime($date);
        $date = strtotime("+7 day", $date);
        return $date;
    }

} 