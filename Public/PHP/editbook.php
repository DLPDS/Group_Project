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
<<<<<<< HEAD
<body>
<form name="form1" method="post" action="updatebook.php?ISBN=<?php echo($ISBN);?>">
=======
<head>

    <!-- Website Title & Description for Search Engine purposes -->
    <title></title>
    <meta name="description" content="">

    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../CSS/styles.css" rel="stylesheet">

    <!-- Include Modernizr in the head, before any other Javascript -->
    <script src="../JS/modernizr-2.6.2.min.js"></script>

    <script src="../JS/Kushan.js"></script>

</head>
<body>
<div class="container">
<form class="form-horizontal" name="form1" method="post" action="updatebook.php?ISBN=<?php echo($ISBN);?>">
>>>>>>> 9d9940677c6f83a2090be86b6a42697f8e938c96

    <?php
    while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>

        <label>&nbsp;</label>

<<<<<<< HEAD
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
=======
        <div class="form-group">
            <label class="col-lg-4 control-label">ISBN</label>
            <div class="col-4">
                <input class="form-control" name="ISBN" type="int" id="ISBN" value="<?php echo $rows['ISBN']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label"> Name</label>
            <div class="col-8">
                <input class="form-control" name="Name" type="text" id="Name" value="<?php echo $rows['Name']; ?>" size="15">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label">Author</label>
            <div class="col-8">
                <input class="form-control" name="Author" type="Text" id="Author" value="<?php echo $rows['Author']; ?>" size="15">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label">Genre</label>
            <div class="col-8">
                <input class="form-control" name="Genre" type="text" id="Genre" value="<?php echo $rows['Genre']; ?>">
>>>>>>> 9d9940677c6f83a2090be86b6a42697f8e938c96

            </div>
        </div>

<<<<<<< HEAD
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
=======
        <div class="form-group">
            <label class="col-lg-4 control-label">Publisher</label>
            <div class="col-8">
                <input class="form-control" name="Publisher" type="Text" id="Publisher" value="<?php echo $rows['Publisher']; ?>" size="15">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label">Price</label>
            <div class="col-4">
                <input class="form-control" name="Price" type="int" id="Price" value="<?php echo $rows['Price']; ?>" size="15">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">Quantity</label>
            <div class="col-4">
                <input class="form-control" name="Quantity" type="Text" id="Quantity" value="<?php echo $rows['Quantity']; ?>" size="15">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">Supplier_Id</label>
            <div class="col-4">
                <input class="form-control" name="Supplier_Id" type="int" id="Supplier_Id" value="<?php echo $rows['Supplier_Id']; ?>" size="15">
>>>>>>> 9d9940677c6f83a2090be86b6a42697f8e938c96
            </div>
        </div>


<<<<<<< HEAD
        <div class="btn btn-default btn-file">
            Upload Photo<input name="Image_Loc"  type="file" id="Image_Loc" value="<?php echo $rows['Image_Loc']; ?>" size="15">
        </div>

=======
>>>>>>> 9d9940677c6f83a2090be86b6a42697f8e938c96
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
<<<<<<< HEAD
        <label align="center"> </label>
=======
        <label class="col-lg-4 control-label"> </label>
>>>>>>> 9d9940677c6f83a2090be86b6a42697f8e938c96
        <div>
            <input type="submit" name="editBook" value="Submit" >
        </div>
    </div>
    <td>&nbsp;</td>

</form>
<<<<<<< HEAD
=======
</div>
>>>>>>> 9d9940677c6f83a2090be86b6a42697f8e938c96
</body>
</html>

