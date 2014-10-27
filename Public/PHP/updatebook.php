<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/StockKeeperClass.php");
$SANHINDAStockKeeper= new StockKeeperClass();

if(isset($_POST['editBook'])){
    $SANHINDAStockKeeper->editBook();
}
if(isset($_POST['updateManually'])){
    $SANHINDAStockKeeper->editBookManually();
}


?>