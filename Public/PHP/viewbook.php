<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/StockKeeperClass.php");
$SANHINDAStockKeeper= new StockKeeperClass();

$query="SELECT * FROM book WHERE Status='Good'";
$result=Methods::queryExecute($query);
?>

<body>
<?php echo($SANHINDAStockKeeper->session->messageDisplay()); ?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td>
            <table width="400" border="1" cellspacing="0" cellpadding="3">
                <tr>
                    <td colspan="6"><strong>List data from mysql </strong> </td>
                </tr>

                <tr>
                    <th align="center"><strong>ISBN</strong></th>
                    <th align="center"><strong>Name</strong></th>
                    <th align="center"><strong>Author</strong></th>
                    <th align="center"><strong>Genre</strong></th>
                    <th align="center"><strong>Publisher</strong></th>
                    <th align="center"><strong>Price</strong></th>
                    <th align="center"><strong>Quantity</strong></th>
                    <th align="center"><strong>Supplier_id</strong></th>
                    <th align="center"><strong>Image</strong></th>

                </tr>

                <?php
                while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>

                    <tr>
                        <td><?php echo($rows['ISBN']); ?></td>
                        <td><?php echo $rows['Name']; ?></td>
                        <td><?php echo $rows['Author']; ?></td>
                        <td><?php echo $rows['Genre']; ?></td>
                        <td><?php echo $rows['Publisher']; ?></td>
                        <td><?php echo $rows['Price']; ?></td>
                        <td><?php echo $rows['Quantity']; ?></td>
                        <td><?php echo $rows['Supplier_Id']; ?></td>
                        <td><img src="../../Covers/<?php echo $rows['Image_Loc']; ?>" height="60px" width="80px"></td>

                        <td align="center"><a href="editbook.php?ISBN=<?php echo urlencode($rows['ISBN']); ?>">update</a></td>
                        <td><button><?php echo "<a onClick='return delete_test();' href='skFlow.php?ISBN=".urlencode($rows['ISBN'])."'>Delete</a>";?></button></td>

                    </tr>

                <?php
                }
                ?>

            </table>
        </td>
    </tr>
</table>
</body>