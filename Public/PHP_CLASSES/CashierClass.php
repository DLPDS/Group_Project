<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/11/14
 * Time: 4:29 AM
 */

class CashierClass extends Staff {

    function __construct(){
        require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $dbConnection=new Connection();
    }

} 