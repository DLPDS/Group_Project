<?php
/**
 * Created by PhpStorm.
 * User: DLPDS
 * Date: 9/10/14
 * Time: 2:27 PM
 */

class Staff {

    var $firstName;
    var $lastName;
    var $bDay;
    var $username;
    var $password;
    var $position;

    function __construct($fn,$ln,$bd,$un,$pwd,$pos){

        $this->firstName=$fn;
        $this->lastName=$ln;
        $this->bDay=$bd;
        $this->username=$un;
        $this->password=$pwd;
        $this->position=$pos;

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
                Methods::redirectTo("chairman.php");
            }

            else if($position==='Manager'){
                Methods::redirectTo("manager main.php");
            }

            else if($position==='Stock Keeper'){
                Methods::redirectTo("stock_keeper.php");
            }

            else if($position==='Cashier'){
                Methods::redirectTo("cashier.php");
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