<?php

require_once 'inc/functions.php';
require_once 'models/order.php';
require_once 'models/product.php';

$orders = get_orders($connect, $user['id']);

?>


<main>
	<div class="container">

	<?php if(!empty($_SESSION['message'])): ?>
	<div class="alert alert-success">
		<i class="glyphicon glyphicon-ok"></i>&nbsp;
		<?= $_SESSION['message'] ?>
	</div>
	<?php $_SESSION['message'] = null; endif; ?>

	<table class="table table-bordered table-striped">
		<tr>
			<th>ID</th>
			<th>Photo</th>
			<th>Prix</th>
			<th>Quantité</th>
			<th>Totale</th>
			<th>Date de Creation</th>
			<th></th>
		</tr>

		<?php
		if(count($orders) > 0):

			foreach($orders as $order):

				$product = get_product($connect, $order['product_id']);
		?>

		<tr>
			<td><?= $order['product_id'] ?></td>
			<td>
				<img src="img/products/<?= $product['photo'] ?>" style="width: 100px; height: 100px;" />
			</td>
			<td><?= $product['price'] ?> DHs</td>
			<td><?= $order['quantity'] ?></td>
			<td><?= get_total($product['price'], $order['quantity']) ?> DHs</td>
			<td><?= $order['created_at'] ?></td>
			<td>
				<a href="#" class="btn btn-primary">
					Payer
				</a>
			</td>
		</tr>

			<?php endforeach; ?>

		<tr>
			<td colspan="6"></td>
			<td>
				<a href="#" class="btn btn-success">Payer Tous</a>
			</td>
		</tr>

		<?php else: ?>

		<tr>
			<td colspan="4" class="bg-danger text-center">
				<b>Aucune Commande a été trouver !!</b>
			</td>
		</tr>

		<?php
		endif;
		?>

		</table>
	</div>
</main>