<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();

// get value of username that sent from address bar
$ISBN=$_GET['ISBN'];

// Retrieve data from database
$sql="SELECT * FROM book WHERE ISBN='{$ISBN}'";
$result=Methods::queryExecute($sql);

?>

<html>
<body>
<form name="form1" method="post" action="updatebook.php?ISBN=<?php echo($ISBN);?>">

    <?php
    while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>

        <label>&nbsp;</label>

        <div>
            <label align="center">ISBN</label>
            <div>
                <input name="ISBN" type="int" id="ISBN" value="<?php echo $rows['ISBN']; ?>">
            </div>
        </div>

        <div>
            <label align="center"> Name</label>
            <div>
                <input name="Name" type="text" id="Name" value="<?php echo $rows['Name']; ?>" size="15">
            </div>
        </div>

        <div>
            <label align="center">Author</label>
            <div>
                <input name="Author" type="Text" id="Author" value="<?php echo $rows['Author']; ?>" size="15">
            </div>
        </div>

        <div>
            <label align="center">Genre</label>
            <div>
                <input name="Genre" type="text" id="Genre" value="<?php echo $rows['Genre']; ?>">

            </div>
        </div>

        <div>
            <label align="center">Publisher</label>
            <div>
                <input name="Publisher" type="Text" id="Publisher" value="<?php echo $rows['Publisher']; ?>" size="15">
            </div>
        </div>

        <div>
            <label align="center">Price</label>
            <div>
                <input name="Price" type="int" id="Price" value="<?php echo $rows['Price']; ?>" size="15">
            </div>
        </div>
        <div>
            <label align="center">Quantity</label>
            <div>
                <input name="Quantity" type="Text" id="Quantity" value="<?php echo $rows['Quantity']; ?>" size="15">
            </div>
        </div>
        <div>
            <label align="center">Supplier_Id</label>
            <div>
                <input name="Supplier_Id" type="int" id="Supplier_Id" value="<?php echo $rows['Supplier_Id']; ?>" size="15">
            </div>
        </div>


        <div class="btn btn-default btn-file">
            Upload Photo<input name="Image_Loc"  type="file" id="Image_Loc" value="<?php echo $rows['Image_Loc']; ?>" size="15">
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
            <input type="submit" name="editBook" value="Submit" >
        </div>
    </div>
    <td>&nbsp;</td>

</form>
</body>
</html>


