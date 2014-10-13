<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();

$query="SELECT * FROM supplier";
$result=Methods::queryExecute($query);

$query="SELECT * FROM supplier_telephone";
$result1=Methods::queryExecute($query);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td>
            <table width="400" border="1" cellspacing="0" cellpadding="3">
                <tr>
                    <td colspan="6"><strong>List data from mysql </strong> </td>
                </tr>

                <tr>
                    <th align="center"><strong>Supplier Id</strong></th>
                    <th align="center"><strong>Name</strong></th>
                    <th align="center"><strong>Email</strong></th>
                    <th align="center"><strong>Username</strong></th>
                    <th align="center"><strong>Password</strong></th>
                    <th align="center"><strong>Address</strong></th>
                    <th align="center"><strong>TelNo</strong></th>
                    <th align="center"><strong>Update</strong></th>
                </tr>

                <?php

                   if($result && $result1){
                   while($row1 = mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
                         $row2 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
                         //$row3 = mysqli_fetch_array($result[2],MYSQLI_ASSOC);
                    ?>

                    <tr>
                        <td><?php echo($row1['Supplier_Id']); ?></td>
                        <td><?php echo $row1['Name']; ?></td>
                        <td><?php echo $row1['Email']; ?></td>
                        <td><?php echo $row1['UserName']; ?></td>
                        <td><?php echo $row1['Password']; ?></td>
                        <td><?php echo $row1['Address']; ?></td>
                        <td><?php echo $row2['TelNo']; ?></td>

                        <td align="center"><a href="editsupplier.php?Supplier_Id=<?php echo urlencode($row1['Supplier_Id']); ?>">update</a></td>
                    </tr>

                <?php
                }
                }
                ?>

            </table>
        </td>
    </tr>
</table>
