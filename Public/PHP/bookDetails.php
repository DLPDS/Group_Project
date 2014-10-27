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
    <hr>
    <div class="row">
        <div class="col-9">
            <h1>Available Book List</h1>
        </div>
        <div class="col-3">
            <div class="no-print">
                <button class="btn btn-success" onclick="printSheet()">Print List</button>
            </div>
        </div>
    </div>
    <div class="row">

                            <table  class="table table-bordered">
                                <tr>
                                    <th width="4%" style="text-align:left">ISBN</th>
                                    <th width="35%" style="text-align:left">Title</th>
                                    <th width="30%" style="text-align:left">Author</th>
                                    <th width="10%" style="text-align:left">Genre</th>
                                    <th width="15%" style="text-align:left">Publisher</th>
                                    <th width="3%" style="text-align:center">Price</th>
                                    <th width="2%" style="text-align:center">Quantity</th>
                                </tr>
                                <?php
                                if($result){
                                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                                {

                                ?>
                                <div class="row">
                                    <div class="col-12">
                                        <tr class="info">
                                            <td align="left"><?php echo($row['ISBN']); ?></td>
                                            <td align="left"><?php echo($row['Name']); ?></td>
                                            <td align="left"><?php echo($row['Author']); ?></td>
                                            <td align="left"><?php echo($row['Genre']); ?></td>
                                            <td align="left"><?php echo($row['Publisher']); ?></td>
                                            <td align="right"><?php echo($row['Price']); ?></td>
                                            <td><img src="../../Covers/<?php echo $row['Image_Loc']; ?>" height="60px" width="80px"></td>


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
                                    <td align="left"><?php echo($row['ISBN']); ?></td>
                                    <td align="left"><?php echo($row['Name']); ?></td>
                                    <td align="left"><?php echo($row['Author']); ?></td>
                                    <td align="left"><?php echo($row['Genre']); ?></td>
                                    <td align="left"><?php echo($row['Publisher']); ?></td>
                                    <td align="right"><?php echo($row['Price']); ?></td>
                                    <td align="right"><?php echo($row['Quantity']); ?></td>

                                </tr>


                            <?php
                            }
                        }
                        ?>
                    </div>

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