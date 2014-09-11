<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/10/14
 * Time: 2:27 PM
 */

class Staff {

    protected  $firstName;
    protected  $lastName;
    protected  $bDay;
    protected  $username;
    protected  $password;
    protected  $priority;

    function __construct(){

        require_once("../../Includes/Connection.php");
        require_once("../../Includes/Methods.php");
        $dbConnection=new Connection();
    }

    function signInForm(){

        if(isset($_POST['submit'])){

            $username= $_POST['username'];
            $password= $_POST['password'];
            $password=md5($password);

            self::signIn($username,$password);
        }
    }

    function signIn($username,$password){
        $query="SELECT Position From staff WHERE Username='{$username}' AND Password='{$password}';";

        $result=Methods::queryExecute($query);

        if($result){
            $position="";
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                $position=$row['Position'];
            }

            if($position==='Chairman'){
                Methods::redirectTo("ChairmanClass.php");
            }

            else if($position==='Manager'){
                Methods::redirectTo("manager main.php");
            }

            else if($position==='Stock Keeper'){
                Methods::redirectTo("stock_keeper.php");
            }

            else if($position==='Cashier'){
                Methods::redirectTo("CashierClass.php");
            }
            else{
                Methods::redirectTo("pnm.php");
            }
        }
        else{
            Methods::redirectTo("signIn.php");
        }
    }

} 