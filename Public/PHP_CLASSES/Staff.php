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

            $RUsername= $_POST["username"];
            $RUsername=Methods::escaping($RUsername);
            $RPassword= $_POST["password"];
            $RPassword=Methods::escaping($RPassword);
            $RPassword=md5($RPassword);

            self::signIn($RUsername,$RPassword);
        }
    }

    function signIn($username,$password){
        $query="SELECT Position From staff WHERE Username='{$username}' AND Password='{$password}';";

        $result=Methods::queryExecute($query);

        if($result){
            $position="";
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                $position=$row["Position"];
            }

            if($position==='Chairman'){
                Methods::redirectTo("../HTML/chairman.html");
            }

            else if($position==='Manager'){
                Methods::redirectTo("../HTML/manager.html");
            }

            else if($position==='Stock Keeper'){
                Methods::redirectTo("../HTML/stock_keeper.html");
            }

            else if($position==='Cashier'){
                Methods::redirectTo("../HTML/cashier.html");
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