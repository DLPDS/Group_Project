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


    function registering($firstName,$lastName,$bDay,$username,$password,$priority){
        $query="INSERT INTO staff (";
        $query.="First_Name,Last_Name,BirthDay,Username,Password,Position";
        $query.=") VALUES (";
        $query.="'{$firstName}','{$lastName}','{$bDay}','{$username}','{$password}','{$priority}'";
        $query.=")";

        $result=self::queryExecute($query);
        if($result){
            self::redirectTo("../PHP/manager main 1.php");

        }
        else{
            //die("Database query Failed");
            self::redirectTo("../PHP/manager main 2.php");
        }
    }

    function signIn($username,$password){
        $query="SELECT Position From staff WHERE Username='{$username}' AND Password='{$password}';";

        $result=self::queryExecute($query);

        if($result){
            $position="Not set";
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                $position=$row['Position'];
            }

            if($position==='Chairman'){
                self::redirectTo("chairman.html");
            }

            else if($position==='Manager'){
                self::redirectTo("manager main.php");
            }

            else if($position==='Stock Keeper'){
                self::redirectTo("stock_keeper.html");
            }

            else if($position==='Cashier'){
                self::redirectTo("cashier.html");
            }
            else{
                self::redirectTo("pnm.php");
                //echo($position);
            }
        }
        else{
            self::redirectTo("signIn.php");
        }
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