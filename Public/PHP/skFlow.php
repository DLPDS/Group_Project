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

<<<<<<< HEAD
=======
if (isset($_GET["username_d"])){
    $SANHINDAStockKeeper->delSupplier();

}

>>>>>>> 9d9940677c6f83a2090be86b6a42697f8e938c96
if (isset($_GET["ISBN"])){
    $SANHINDAStockKeeper->delBook();

}


?>

