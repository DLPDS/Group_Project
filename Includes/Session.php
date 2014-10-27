<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 10/6/14
 * Time: 4:27 PM
 */

class Session {


    function __construct(){
        session_start();
    }

    function messageDisplay(){
        if(isset($_SESSION['message'])){

            $output=$_SESSION['message'];
            $output.="</div>";

            $_SESSION['message']=null;

            return $output;
        }
    }

} 