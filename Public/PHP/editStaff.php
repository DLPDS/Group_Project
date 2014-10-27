<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();

// get value of username that sent from address bar
$Username=$_GET['Username'];

// Retrieve data from database
$sql="SELECT * FROM staff WHERE Username='{$Username}'";
$result=Methods::queryExecute($sql);

?>

<html>
    <body>
            <form name="form1" method="post" action="updateStaff.php?oldUserName=<?php echo($Username);?>">

                        <?php
                            while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        ?>

                        <label>&nbsp;</label>

                        <div>
                            <label align="center">First Name</label>
                            <div>
                                <input name="firstname" type="text" id="First_Name" value="<?php echo $rows['First_Name']; ?>">
                            </div>
                        </div>

                        <div>
                            <label align="center">Last Name</label>
                            <div>
                                <input name="lastname" type="text" id="Last_Name" value="<?php echo $rows['Last_Name']; ?>" size="15">
                            </div>
                         </div>

                        <div>
                            <label align="center">Birthday</label>
                            <div>
                                <input name="Birthday" type="date" id="Birthday" value="<?php echo $rows['Birthday']; ?>" size="15">
                            </div>
                        </div>

                        <div>
                            <label align="center">Username</label>
                            <div>
                                <input name="Username" type="text" id="Username" value="<?php echo $rows['Username']; ?>">
                            </div>
                        </div>

                        <div>
                            <label align="center">Password</label>
                            <div>
                                <input name="Password" type="password" id="Password" value="<?php echo $rows['Password']; ?>" size="15">
                            </div>
                        </div>

                        <div>
                            <label align="center">Position</label>
                            <div>
                                <input name="position" type="text" id="Position" value="<?php echo $rows['Position']; ?>" size="15">
                            </div>
                        </div>

                        <?php
                        }
                        ?>

                            <div>
                            <label>&nbsp;</label>
                                <div>
                                    <input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>">
                                </div>
                            </div>

                            <div>
                            <label align="center"> </label>
                                <div>
                                    <input type="submit" name="Submit" value="Submit">
                                </div>
                            </div>
                            <td>&nbsp;</td>

            </form>
    </body>
</html>


