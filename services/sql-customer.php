<?php


 

$bdd = new PDO('mysql:host=localhost;dbname=classicmodels;charset=utf8', 'root', 'troiswa' );

$orderId = $_GET['orderNumber'];
$sql = "SELECT * FROM orders WHERE orderNumber = $orderId";



$statement = $bdd->prepare($sql);
$statement->execute();
$order = $statement->fetch(\PDO::FETCH_ASSOC);



$customerId = $order['customerNumber'];
$sql = "SELECT * FROM customers WHERE customerNumber = $customerId";

$statement = $bdd->prepare($sql);
$statement->execute();
$customer = $statement->fetch(\PDO::FETCH_ASSOC);



$sql = "SELECT * FROM `orderdetails`";

$statement = $bdd->prepare($sql);
$statement->execute();
$orderdetails = $statement->fetch(\PDO::FETCH_ASSOC);








