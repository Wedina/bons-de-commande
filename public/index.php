<?php 
	  include '../view/header.phtml'; 
	  include '../services/sql.php';	 		
?>
<h1>Bons de commande</h1>
<section>
		<article>
			<h2>Liste des commande</h2>
			<table>
				<tr class="tr">
					<td class="td">Commande</td>
					<td class="td">Date de la commande</td>
					<td class="td">Date de livaraison</td>
					<td class="td">Statut</td>
				</tr>
			<?php foreach ($orders as $key): ?>
				<tr>
					<td>
						<a href="order-form.php?orderNumber=<?= $key['orderNumber'] ?>"><?= $key['orderNumber'] ?> </a>
						
					</td>
					<td><?= $key['orderDate'] ?></td>
					<td><?= $key['shippedDate'] ?></td>
					<td><?= $key['status'] ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
		</article>	
	</section>



<?php include '../view/footer.phtml' ?>