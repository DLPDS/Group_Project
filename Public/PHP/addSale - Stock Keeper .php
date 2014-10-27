<!DOCTYPE html>
<html>
<head>
<?php
include("../../Includes/Header.php");
require_once("../PHP_CLASSES/salesOrder.php");
$saleNo=new salesOrder();


$result = $saleNo->salesNoGen();
$number=mysqli_fetch_array($result,MYSQLI_BOTH);
$date=$saleNo->genDate();

?>



		

	<body>
<div class="container" id="main">
    <div class="navbar navbar-fixed-top">
        <div class="container">
            <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class = "navbar-brand" href="#"><img src = "../../Images/logo.png" alt="My Logo"></a>
            <div class = "nav-collapse collapse navbar-responsive-collapse">
                <ul class = "nav navbar-nav">
                    <li><a href = "#">Home</a></li>
					<li><a href = "#">Purchasing Section</a></li>
					<li class= "active"><a href = "#">Selling Section</a></li>
					<li><a href = "#">Search Section</a></li>
					<li><a href = "#">Message Section</a></li>
					<li><a href = "#">Enter Book Details</a></li>

                </ul>
				<ul class = "nav navbar-nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Stock Keeper<strong class="caret"></strong></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-cog"> Settings</span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon-briefcase"> Update Profile</span></a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-off"> Sign-Out</span></a></li>
						</ul>

					</li>
				</ul>
			</div><!-- end nav-collapse-->
		</div><!--end container-->
	</div><!--end navbar-->
	</div><!--end container-->
	<hr>
	<hr>
	
	<div class="row">
	
		<div class="col-6" id="saleDetails">
		
		<form class="form-horizontal" >
		
			<div class="form-group">
				<label class="col-lg-4 control-label">Sale No</label>
				<div class="col-lg-4">
					<input class="form-control" placeholder="Sale No" type="number" required="" value="<?PHP echo $number[0]+1;?>">
				</div>
			</div><!--end Sale No-->
			
			<div class="form-group">
				<label class="col-lg-4 control-label">Date</label>
				<div class="col-lg-4">
					<input class="form-control" placeholder="" type="date" id="date" value="<?php echo date('Y-m-d'); ?>">
				</div>
			</div>
			
					
			<div class="form-group">
				<label class="col-lg-4 control-label">Customer</label>
				<div class="col-6">
				<select class="form-control">
				  <option selected>Choose Supplier</option>
				  <option>Sarasavi</option>
				  <option>Vijitha Yapa</option>
				  <option>Akura Publications</option>
				  <option>M.D.Gunasena</option>
				  <option>Sandeepa Publications</option>
				</select>
				</div>
			</div><!--end supplier-->
			
			<div class="form-group">
				<label class="col-lg-4 control-label">Branch</label>
				<div class="col-6">
				<select class="form-control">
				  <option selected>Select Branch</option>
				  <option>Borella</option>
				  <option>Nugegoda</option>
				  <option>Rajagiriya</option>
				</select>
				</div>
			</div><!--end branch-->
			
			<div class="form-group">
				<label class="col-lg-4 control-label">ISBN</label>
				<div class="col-lg-4">
					<input class="form-control" placeholder="ISBN" type="number" autofocus required onkeyup="if (event.keyCode == 13) showHint(this.value);" id="ISBN">
				</div>
			</div><!-- end of ISBN -->
			
		</form><!--end form-->
		
		</div><!--end col-->
	
	<div class="col-6">
	
	<form class="form-horizontal" id="saleDetails2" action="addSale - Stock Keeper .php">
		
			<div class="form-group">
				<label class="col-lg-4 control-label">Total Amount</label>
				<div class="col-lg-4">
					<input class="form-control" placeholder="Rs" type="number" disabled id="ta">
				</div>
			<!--/div-->
		
		<!--div class="form-group" style="text-align:center "-->
			<button type=button class="btn btn-primary" onclick="cal_total();cal_change();">Process</button>
	
		</div>
	
			<div class="form-group">
				<label class="col-lg-4 control-label">Advanced Amount</label>
				<div class="col-lg-4">
					<input class="form-control" placeholder="Rs" type="number" onkeyup="cal_change();" onchange="cal_change();" id="paid">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-4 control-label">Receivables</label>
				<div class="col-lg-4">
					<input class="form-control" placeholder="Rs" type="number" id="give">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-lg-4 control-label">Due Date</label>
				<div class="col-lg-4">
					<input class="form-control" placeholder="" type="date" value="<?PHP echo date('Y-m-d', $date);?>">
				</div>
			</div>
			
			<div class="form-group" style="text-align:center">
				<input type="submit" class="btn btn-default" value="Complete Sale" onclick="update_books(); nothing();">
			</div>
		
			
		</form><!--end form-->
	
	</div><!--end col-->
	<!-- New code-->
	<!-- new code ends here -->
	</div><!--end row-->
	
	<hr>
	<div div class="container">
	<div class="row" id ="saleTable">
		<form>
			<table class="table table-hover" id="table">
				<tr class="active" >
					<th width="10%" style="text-align:center">ISBN</th>
					<th width="35%" style="text-align:center">Title</th>
					<th width="20%" style="text-align:center">Author</th>					
					<th width="10%" style="text-align:center">Price</th>
					<th width="5%"style="text-align:center">Quantity</th>
					<th width="10%"style="text-align:center">TOTAL</th>
					<th width="10%"></th>
					<!--th width="10%"style="text-align:center">Discount</th>
					<th width="10%"style="text-align:center">Receivables</th-->
				</tr>
				
				<tbody id="txtHint" ></tbody>
			</table><!--end table-->
		</form><!--end form-->
	</div><!--end row-->
	</div>
	
 </div>
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

