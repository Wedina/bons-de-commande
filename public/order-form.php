<?php
	  include '../view/header.phtml'; 
	  include '../services/sql.php';
	  include '../services/sql-customer.php';
echo "page commande chargé";

?>

<h1>Bons de commande</h1>
<h3><a href="index.php">Back to the list</a></h3>

<section>
	<article class="customer">
		<h2><?= $customer['customerName'] ?></h2>
            <h3><?= $customer['contactFirstName'] ?> <?= $customer['contactLastName'] ?></h3>
            <p><?= $customer['addressLine1'] ?></p>
            <p><?= $customer['addressLine2'] ?></p>
            <p><?= $customer['city'] ?></p>	
    </article>
	
	<article>
			<h2>bon de commande n <?= $_GET['orderNumber'] ?>  </h2>

			<table>
				<tr class="tr">
					<td class="td">produit</td>
					<td class="td">Prix unitaire</td>
					<td class="td">Quantité</td>
					<td class="td">Prix Total</td>
				</tr>			
				<tr>
					
					<td><?= $products['productName'] ?></td>


					<td><?= $orderdetails['priceEach'] ?></td>
					<td><?= $orderdetails['quantityOrdered'] ?></td>
					<td><?= $orderdetails['orderLineNumber'] ?></td>
				</tr>
		
			</table>
		</article>	
   

</section>