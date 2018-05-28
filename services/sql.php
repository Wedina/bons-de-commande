<?php
 include 'tools.php'; 


$bdd = new PDO('mysql:host=localhost;dbname=classicmodels;charset=utf8', 'root', 'root' );

$sql = "SELECT orderNumber, orderDate, shippedDate, status FROM `orders` ORDER BY `orderDate` ASC";

$statement = $bdd->prepare($sql);
$statement->execute();
$orders = $statement->fetch(\PDO::FETCH_ASSOC);


$orders = $bdd->query($sql);




?>