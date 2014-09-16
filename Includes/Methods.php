<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/4/14
 * Time: 10:20 AM
 */

class Methods {

    function signUpPmatch($password,$cPassword){  //not require
        $result=false;
        if($password===$cPassword){
            $result=true;
        }
        return $result;
    }

    public static function escaping($name){
        $newName=mysqli_real_escape_string(Connection::$connection,$name);
        return $newName;
    }

    public static function queryExecute($query){
        $result=mysqli_query(Connection::$connection,$query);
        return $result;
    }

    public static function redirectTo($newLocation){

        header("Location: ".$newLocation);
        exit;
    }



    function confirmQuery($resultSet){       //not require
        die("Database query Failed");
    }


    function isPresence($value){             //not require
        return isset($value)&& $value!=="";
    }

    function hasMaxLength($value,$max){          //not require
        return $value<=$max;
    }

    function hasInclusionIn($value,$set){          //not require
        return in_array($value,$set);
    }

    function formErrors($errors=array()){         //not require
        $output="";
        if(!empty($errors)){
            $output.="<div class=\"error\">";
            $output.="Please Fix These Errors";
            $output.="<ul>";

            foreach($errors as $key=>$error){
                $output.="<li>{$error}</li>";
            }

            $output.="</ul>";
            $output.="</div>";

        }
        return $output;

    }

} 