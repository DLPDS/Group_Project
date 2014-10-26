<?php

//1. create database connection
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","mydb");
$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

//Test if connection occurred
if(mysqli_connect_errno()){
    die("Database Connection Failed: ".
        mysqli_connect_error().
        "(".mysqli_connect_errno().")");
}

?>