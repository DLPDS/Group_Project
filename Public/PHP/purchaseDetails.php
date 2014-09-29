<?php
include("../../Includes/Header.php");
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/StockKeeperClass.php");
$SANHINDAStockKeeper= new StockKeeperClass();
$result=$SANHINDAStockKeeper->viewSuppliers();

?>
<body>

<div class="container" id="purchaseMain">

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

    
	<div class="btn-group">
	  <button type="button" class="btn btn-default">All</button>
	  <button type="button" class="btn btn-default">Settled</button>
	  <button type="button" class="btn btn-default">Unsettled</button>
	  <button type="button" class="btn btn-default">Overdue</button>
	</div>
    <hr>
	<h4 align="center"><strong>Purchase Details Table</strong></h4>
    <table  class="table table-hover">

        <tr>
            <th width="10%" style="text-align:center">Purchase No</th>
            <th width="10%" style="text-align:center">Received Date</th>
            <th width="10%" style="text-align:center">Total Amount</th>
            <th width="10%" style="text-align:center">Amount Paid</th>
            <th width="10%" style="text-align:center">Due Amount</th>
			<th width="10%" style="text-align:center">Due Date</th>
			<th width="10%" style="text-align:center">Status</th>
        </tr>
		
		<tr class="info">
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">Unsettled</td>
		</tr>
		
		<tr class="success">
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">Settled</td>
		</tr>
		
		<tr class="danger">
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">001</td>
			<td align="center">Overdue</td>
		</tr>
		
		

        <?php
        if($result){
        while($row1 = mysqli_fetch_array($result[0],MYSQLI_ASSOC))
        {
         $row2 = mysqli_fetch_array($result[1],MYSQLI_ASSOC);

        ?>
        <tr>
            <td width="10%" align="center"><?php echo($row1['Purchase_No']);  ?></td>
            <td width="25%" align="center"><?php echo($row1['Received Date']); ?></td>
            <td width="30%" align="center"><?php echo($row1['Total Amount']); ?></td>
            <td width="10%" align="center"><?php echo($row2['Amount Paid']); ?></td>
            <td width="25%" align="center"><?php echo($row1['Due Amount']); ?></td>
			<td width="25%" align="center"><?php echo($row1['Due Date']); ?></td>
            <td><button><?php echo "<a onClick='return delete_test();' href='skFlow.php?username_d=".urlencode($row1['Supplier_Id'])."'>Details</a>";?></button></td>
            <td><button><?php echo "<a href='../edit.php?username_d=".urlencode($row1['Supplier_Id'])."'>Settle</a>";?></button></td>
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

