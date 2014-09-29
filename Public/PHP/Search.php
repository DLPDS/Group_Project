<?php
include("../../Includes/Header.php");
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/CashierClass.php");
$SANHINDACashier= new CashierClass();
$result=null;
$defaultResult=null;

if(isset($_POST['searching'])){
    $result=$SANHINDACashier->Search();
}
else{
    $defaultResult=$SANHINDACashier->ShowAll();
}


?>
<body>



<div class ="container" id="main">

<div class="navbar navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="../../Images/logo.png" alt="companyLogo"></a>
        <div class="nav-collapse collapse navbar-responsive-collapse">
            <ul>
                <form class="navbar-form center" action="Search.php" method="post">
                    <input type="text" class="form-control" placeholder="Search books here" id="searchInput" name="bookField" required="">
                    <button type="submit" class="btn btn-default" name="searching" ><span class="glyphicon glyphicon-search"></span></button>
                </form><!--end form-->
            </ul><!--end ul-->
        </div><!-- end nav-collapse-->
    </div><!--end container-->
</div><!--end navbar-->

<hr>
<hr>

<div class="row">

<div class="col-4" id="catagoryCol">
    <div class="panel panel-default">
        <div class="panel-heading"><strong>Catagory</strong></div>
        <div class="panel-body">
            <div class="list-group">
                <a href="#" class="list-group-item">Action & Adventure</a>
                <a href="#" class="list-group-item">Arts</a>
                <a href="#" class="list-group-item">Business & Economics</a>
                <a href="#" class="list-group-item">Children's Books</a>
                <a href="#" class="list-group-item">Comics</a>
                <a href="#" class="list-group-item">Computing,Internet & Digital Media</a>
                <a href="#" class="list-group-item">Home & Lifestyle</a>
                <a href="#" class="list-group-item">Health, Family, Personal Developments</a>
                <a href="#" class="list-group-item">History</a>
                <a href="#" class="list-group-item">Languages</a>
                <a href="#" class="list-group-item">Law</a>
                <a href="#" class="list-group-item">Literature</a>
                <a href="#" class="list-group-item">Novels</a>
                <a href="#" class="list-group-item">Politics</a>
                <a href="#" class="list-group-item">Religion</a>
                <a href="#" class="list-group-item">Science</a>
                <a href="#" class="list-group-item">Sports</a>
                <a href="#" class="list-group-item">Travel</a>
            </div>
        </div><!--end panelbody-->
    </div><!--end panel-->
</div><!--end Catagorycol-->

<div class="col-8" id="bookViewCol">
    <div class="panel panel-default">
        <div class="panel-heading"><strong>Available Books</strong></div>
        <div class="panel-body">
            <?php
            if($result){
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {

            ?>
            <div class="row">
                <div class="col-4">
					<h3> ISBN:<?php echo($row['ISBN']); ?></h3>
                    <h4> Book Name:<?php echo($row['Name']); ?></h4>
                    <h4> Author:<?php echo($row['Author']); ?></h4>
                    <h4> Genre:<?php echo($row['Genre']); ?></h4>
                    <h4> Publisher:<?php echo($row['Publisher']); ?></h4>
                    <h4> Price:<?php echo($row['Price']); ?></h4>
				</div>
				
				<div class= "col-6">
					<div class="thumbnail">
						<img src="../../Covers/<?php echo($row['Image_Loc'])?>">
					</div>
				</div>
                
            </div>
			<hr>
        </div>

           <?php
           }
           }

           else{
               while($row = mysqli_fetch_array($defaultResult,MYSQLI_ASSOC))
               {
                   ?>
                <div class="row">
					<div class="col-6">
						<h3> ISBN:<?php echo($row['ISBN']); ?></h3>
						<h4> Book Name:<?php echo($row['Name']); ?></h4>
						<h4> Author:<?php echo($row['Author']); ?></h4>
						<h4> Genre:<?php echo($row['Genre']); ?></h4>
						<h4> Publisher:<?php echo($row['Publisher']); ?></h4>
						<h4> Price:<?php echo($row['Price']); ?></h4>
					</div>
				
					<div class= "col-6">
						<div class="thumbnail">
							<img src="../../Covers/<?php echo($row['Image_Loc'])?>">
						</div>
					</div>
					
				</div>
				
				<hr>

               <?php
               }
           }
           ?>

            <div class ="row">
                <div class="text-center">
                    <ul class="pagination centered">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div><!--pagination row end-->

        </div>
    </div>
</div><!--end bookViewCol-->

</div><!--end row-->

<!--end of container-->



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

