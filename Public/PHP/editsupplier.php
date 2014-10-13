<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();

// get value of username that sent from address bar
$Supplier_Id=$_GET['Supplier_Id'];

// Retrieve data from database
$sql="SELECT * FROM supplier WHERE Supplier_Id='{$Supplier_Id}'";
$result=Methods::queryExecute($sql);

$sql="SELECT * FROM supplier_telephone WHERE Supplier_Id='{$Supplier_Id}'";
$result1=Methods::queryExecute($sql);

?>

<html>
<body>
<form name="form1" method="post" action="updatesupplier.php?Supplier_Id=<?php echo($Supplier_Id);?>">

    <?php
    while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $rows2=mysqli_fetch_array($result1,MYSQLI_ASSOC)
        ?>

        <label>&nbsp;</label>

     <!--   <div>
            <label align="center">Supplier Id </label>
            <div>
                <input name="Supplier_Id" type="int" id="Supplier_Id" value="<?php echo $rows['Supplier_Id']; ?>">
            </div>
        </div> -->>

        <div>
            <label align="center"> Name</label>
            <div>
                <input name="Name" type="text" id="Name" value="<?php echo $rows['Name']; ?>" size="15">
            </div>
        </div>

        <div>
            <label align="center">Email</label>
            <div>
                <input name="Email" type="text" id="Email" value="<?php echo $rows['Email']; ?>" size="15">
            </div>
        </div>

        <div>
            <label align="center">Username</label>
            <div>
                <input name="UserName" type="text" id="UserName" value="<?php echo $rows['UserName']; ?>">
            </div>
        </div>

        <div>
            <label align="center">Password</label>
            <div>
                <input name="Password" type="Password" id="Password" value="<?php echo $rows['Password']; ?>" size="15">
            </div>
        </div>

        <div>
            <label align="center">Address</label>
            <div>
                <input name="Address" type="text" id="Address" value="<?php echo $rows['Address']; ?>" size="15">
            </div>
        </div>
        <div>
            <label align="center">Telephone</label>
            <div>
                <input name="TelNo" type="text" id="TelNo" value="<?php echo $rows2['TelNo']; ?>" size="15">
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


