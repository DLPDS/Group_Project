<?php
    require_once("../../Includes/Connection.php");
    require_once("../../Includes/Methods.php");
    $dbConnection=new Connection();
    $allFunctions=new Methods();

?>


<?php

if(isset($_POST['submit'])){
    //set default value using ternary operator
    //boolean_test? value_if_true : value_if_false
   $username= $_POST['username'];
   $password= $_POST['password'];
   $password=md5($password);

   $query="SELECT Position From staff WHERE Username='{$username}' AND Password='{$password}';";
   $result=$dbConnection->connecting($query);

   if($result){
       $position="";
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
           $position=$row['Position'];
       }

       if($position==='Chairman'){
           $allFunctions->redirectTo("chairman.php");
       }

       else if($position==='Manager'){
           $allFunctions->redirectTo("manager.php");
       }

       else if($position==='Stock Keeper'){
           $allFunctions->redirectTo("stock_keeper.php");
       }

       else if($position==='Cashier'){
           $allFunctions->redirectTo("cashier.php");
       }
       else{
		   $allFunctions->redirectTo("pnm.php");
       }
   }
   else{
       $allFunctions->redirectTo("signIn.php");
   }
}
?>



<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="../CSS/lo.css" />
</head>
<body>
<div class="container">
    <section id="content">
        <form action="signIn.php" method="post">
            <h1>Login Form</h1>
            <p>Invalid usename or password</p>
            <div>
                <input type="text" placeholder="Username" required="" id="username" name="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" required="" id="password" name="password" />
            </div>
            <div>
                <input type="submit" value="submit" name="submit" />
            </div>
        </form><!-- form -->
    </section><!-- content -->
</div><!-- container -->
</body>
</html>