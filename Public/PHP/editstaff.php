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
<hr>
<form class="form-horizontal" role="form" name="form1" method="post" action="updateStaff.php?oldUserName=<?php echo($Username);?>">

    <?php
    while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>

        <label>&nbsp;</label>
        <div class="col-8">
        <div class="form-group">
            <label class="col-lg-4 control-label">First Name</label>
            <div class="col-4">
                <input class="form-control" name="firstname" type="text" id="First_Name" value="<?php echo $rows['First_Name']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label">Last Name</label>
            <div class="col-4">
                <input class="form-control" name="lastname" type="text" id="Last_Name" value="<?php echo $rows['Last_Name']; ?>" size="15">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label">Birthday</label>
            <div class="col-4">
                <input class="form-control" name="Birthday" type="date" id="Birthday" value="<?php echo $rows['Birthday']; ?>" size="15">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label">Username</label>
            <div class="col-4">
                <input class="form-control" name="Username" type="text" id="Username" value="<?php echo $rows['Username']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label">Password</label>
            <div class="col-4">
                <input class="form-control" name="Password" type="password" id="Password" value="<?php echo $rows['Password']; ?>" size="15">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 control-label">Position</label>
            <div class="col-4">
                <input class="form-control" name="position" type="text" id="Position" value="<?php echo $rows['Position']; ?>" size="15">
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
        <label class="col-lg-4 control-label"> </label>
        <div class="col-4">
            <input type="submit" name="Submit" value="Submit">
        </div>
    </div>
    <td>&nbsp;</td>
    </div>
</form>
</div>
</body>
</html>


