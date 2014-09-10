<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/3/14
 * Time: 2:39 PM
 */

class Connection {

    //1. create database connection
    var $DB_SERVER='localhost';
    var $DB_USER='root';
    var $DB_PASS='';
    var $DB_NAME='mydb';
    public static $connection;

    function __construct(){
        try{
            self::$connection=mysqli_connect($this->DB_SERVER,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);
        }catch(Exception $e){
            echo("ERROR");
            die();
        }
    }
} 