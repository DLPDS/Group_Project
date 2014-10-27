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

<div class="col-3" id="catagoryCol">
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

<div class="col-9" id="bookViewCol">
    <div class="panel panel-default">
        <div class="panel-heading"><strong>Available Books</strong></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-12">
                    <table  class="table table-hover">
                        <tr>
                            <th width="3%" style="text-align:center">ISBN</th>
                            <th width="35%" style="text-align:center">Title</th>
                            <th width="30%" style="text-align:center">Author</th>
                            <th width="10%" style="text-align:center">Genre</th>
                            <th width="20%" style="text-align:center">Publisher</th>
                            <th width="2%" style="text-align:center">Price</th>
                        </tr>
                        <?php
                        if($result){
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {

                        ?>
                        <div class="row">
                            <div class="col-12">
                                <tr class="info">
                                <td align="center"><?php echo($row['ISBN']); ?></td>
                                <td align="center"><?php echo($row['Name']); ?></td>
                                <td align="center"><?php echo($row['Author']); ?></td>
                                <td align="center"><?php echo($row['Genre']); ?></td>
                                <td align="center"><?php echo($row['Publisher']); ?></td>
                                <td align="center"><?php echo($row['Price']); ?></td>
                                <td><img src="../../Covers/<?php echo $row['Image_Loc']; ?>" height="60px" width="80px"></td>

                                <td align="center"><a href="editbook.php?ISBN=<?php echo urlencode($row['ISBN']); ?>">update</a></td>
                                <td><button><?php echo "<a onClick='return delete_test();' href='skFlow.php?ISBN=".urlencode($row['ISBN'])."'>Delete</a>";?></button></td>
                                </tr>
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


                                        <tr class="info">
                                            <td align="center"><?php echo($row['ISBN']); ?></td>
                                            <td align="center"><?php echo($row['Name']); ?></td>
                                            <td align="center"><?php echo($row['Author']); ?></td>
                                            <td align="center"><?php echo($row['Genre']); ?></td>
                                            <td align="center"><?php echo($row['Publisher']); ?></td>
                                            <td align="center"><?php echo($row['Price']); ?></td>
                                            <td align="center"><button><a href="editbook.php?ISBN=<?php echo urlencode($row['ISBN']); ?>">Update</a></button></td>
                                            <td><button><?php echo "<a onClick='return delete_test();' href='skFlow.php?ISBN=".urlencode($row['ISBN'])."'>Delete</a>";?></button></td>

                                        </tr>


                            <?php
                           }
                       }
                       ?>
            </div>
            </div>


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

