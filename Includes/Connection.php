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
    var $connection;

    function __construct(){
        try{
            $this->connection=mysqli_connect($this->DB_SERVER,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);
        }catch(Exception $e){
            echo("ERROR");
            die();
        }
    }

    function connecting($query){
        $result=mysqli_query($this->connection,$query);
        return $result;
    }

    function escaping($name){
        $newName=mysqli_real_escape_string($this->connection,$name);
        return $newName;
    }

} 