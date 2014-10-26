<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/ManagerClass.php");
$SANHINDAManager= new ManagerClass();

$query="SELECT * FROM staff";
$result=Methods::queryExecute($query);
?>
<!DOCTYPE html>

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
            <h1>Employee Details</h1>
            <hr>
            <table  class="table table-hover">

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

</div>
</body>
</html>