<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="style1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css%22%3E
    <title>OOP_Mahendra</title>
</head>
<body>
<?php
    require_once("OOP_Main_PHP_Mahendra.php");

    echo "<b>Product :</b>"."<br />";
    $product1 = new Product();
    $product1->setName("50 Cent Get Rich or Die Trying");
    $product1->setPrice(100000);
    $product1->setDiscount(25);
    echo "Name : ".$product1->getName()."<br />";
    echo "Price : ".$product1->getPrice()."<br />";
    echo "Discount : ".$product1->getDiscount()."<br />";

    echo "<b>CD Music :</b>"."<br />";
    $CDMusic1 = new CDMusic();
    $CDMusic1->setArtist("50 Cent");
    $CDMusic1->setGenre("Hip - Hop");
    $CDMusic1->setPrice(60000);
    $CDMusic1->setDiscount(25);
    echo "Artist : ".$CDMusic1->getArtist()."<br />";
    echo "Genre : ".$CDMusic1->getGenre()."<br />";
    echo "Price : ".$CDMusic1->getPrice()."<br />";
    echo "Price after discount : ".$CDMusic1->getDiscount()."<br />";

    echo "<b>CD Cabinet :</b>"."<br />";
    $CDCabinet1 = new CDCabinet();
    $CDCabinet1->setCapacity(100);
    $CDCabinet1->setModel("Modern");
    $CDCabinet1->setPrice(70000);
    $CDCabinet1->setDiscount(25);
    echo "Capacity : ".$CDCabinet1->getCapacity()."<br />";
    echo "Model : ".$CDCabinet1->getModel()."<br />";
    echo "Price : ".$CDCabinet1->getPrice()."<br />";
    echo "Price after discount : ".$CDCabinet1->getDiscount()."<br />";
?>
</body>
</html>