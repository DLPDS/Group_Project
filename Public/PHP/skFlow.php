<?php

require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/StockKeeperClass.php");
$SANHINDAStockKeeper= new StockKeeperClass();

if(isset($_POST['addBook'])){
    $SANHINDAStockKeeper->addBookProcess();
}
elseif(isset($_POST['addSupplier'])){
    $SANHINDAStockKeeper->addSuppierProcess();
}

if (isset($_GET["username_d"])){
    $SANHINDAStockKeeper->delSupplier();

}


?>

