<?php
include("../../Includes/Header.php");
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/StockKeeperClass.php");
$SANHINDAStockKeeper= new StockKeeperClass();
$result=$SANHINDAStockKeeper->viewSuppliers();

?>
<body>

<div class="container" id="supplierMain">

    <div class="navbar navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="../../Images/logo.png" alt="companyLogo"></a>
            <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class = "nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Stock Keeper<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-cog"> Settings</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-briefcase"> Update Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-off"> Sign-Out</a></li><!--methenta home eka link karahan-->
                        </ul>

                    </li>
                </ul>
            </div><!-- end nav-collapse-->
        </div><!--end container-->
    </div><!--end navbar-->

    <hr>
    <hr>
    <hr>
    <hr>

    <h4 align="center"><strong>Supplier Details Table</strong></h4>
    <hr>
    <table  class="table table-bordered">

        <tr>
            <th width="10%" style="text-align:center">Supllier ID</th>
            <th width="25%" style="text-align:center">Supplier</th>
            <th width="30%" style="text-align:center">Email</th>
            <th width="10%" style="text-align:center">Telephone</th>
            <th width="25%" style="text-align:center">Address</th>
        </tr>

        <?php
        if($result){
        while($row1 = mysqli_fetch_array($result[0],MYSQLI_ASSOC))
        {
         $row2 = mysqli_fetch_array($result[1],MYSQLI_ASSOC);
         $row3 = mysqli_fetch_array($result[2],MYSQLI_ASSOC);

        ?>
        <tr>
            <td width="10%" align="center"><?php echo($row1['Supplier_Id']);  ?></td>
            <td width="25%" align="center"><?php echo($row1['Name']); ?></td>
            <td width="30%" align="center"><?php echo($row1['Email']); ?></td>
            <td width="10%" align="center"><?php echo($row2['TelNo']); ?></td>
            <td width="25%" align="center"><?php echo($row3['Post_Code'].", ".$row3['S_Name'].", ".$row3['City']); ?></td>
            <td><button><?php echo "<a onClick='return delete_test();' href='skFlow.php?username_d=".urlencode($row1['Supplier_Id'])."'>Delete</a>";?></button></td>
            <td><button><?php echo "<a href='../edit.php?username_d=".urlencode($row1['Supplier_Id'])."'>Edit</a>";?></button></td>
        </tr>

        <?php
        }
        }
        ?>

    </table>


</div><!--end main container-->

<!-- First try for the online version of jQuery-->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- If no online access, fallback to our hardcoded version of jQuery -->
<script>window.jQuery || document.write('<script src="../JS/jquery-1.8.2.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
<script src="../JS/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="../JS/script.js"></script>

</body>
</html>

