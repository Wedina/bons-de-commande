<?php


 

$bdd = new PDO('mysql:host=localhost;dbname=classicmodels;charset=utf8', 'root', 'root' );

$orderId = $_GET['orderNumber'];
$sql = "SELECT * FROM orders WHERE orderNumber = $orderId";
$statement = $bdd->prepare($sql);
$statement->execute();
$order = $statement->fetch(\PDO::FETCH_ASSOC);
pre($order);


$customerId = $order['customerNumber'];
$sql = "SELECT * FROM customers WHERE customerNumber = $customerId";
$statement = $bdd->prepare($sql);
$statement->execute();
$customer = $statement->fetch(\PDO::FETCH_ASSOC);
pre($customer);



$sql = "SELECT * FROM `products`";
$statement = $bdd->prepare($sql);
$statement->execute();
$products = $statement->fetch(\PDO::FETCH_ASSOC);
pre($products);





$sql = "SELECT * FROM `orderdetails` WHERE ";
$statement = $bdd->prepare($sql);
$statement->execute();
$orderdetails = $statement->fetch(\PDO::FETCH_ASSOC);
















