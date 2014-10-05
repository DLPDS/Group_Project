<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();

$query="SELECT * FROM staff";
$result=Methods::queryExecute($query);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td>
            <table width="400" border="1" cellspacing="0" cellpadding="3">
                <tr>
                    <td colspan="6"><strong>List data from mysql </strong> </td>
                </tr>

                <tr>
                    <th align="center"><strong>First Name</strong></th>
                    <th align="center"><strong>Last Name</strong></th>
                    <th align="center"><strong>Birthday</strong></th>
                    <th align="center"><strong>Username</strong></th>
                    <th align="center"><strong>Password</strong></th>
                    <th align="center"><strong>Position</strong></th>
                    <th align="center"><strong>Update</strong></th>
                </tr>

                <?php
                while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>

                    <tr>
                        <td><?php echo($rows['First_Name']); ?></td>
                        <td><?php echo $rows['Last_Name']; ?></td>
                        <td><?php echo $rows['Birthday']; ?></td>
                        <td><?php echo $rows['Username']; ?></td>
                        <td><?php echo $rows['Password']; ?></td>
                        <td><?php echo $rows['Position']; ?></td>

                        <td align="center"><a href="editStaff.php?Username=<?php echo urlencode($rows['Username']); ?>">update</a></td>
                    </tr>

                <?php
                }
                ?>

            </table>
        </td>
    </tr>
</table>
