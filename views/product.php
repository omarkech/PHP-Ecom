<?php

require_once 'models/product.php';

$product_id = $_GET['id'];

$product = get_product($connect, $product_id);

?>

<main>
	<div class="container">

	<?php if($product != null): ?>

		<?php if(!empty($_SESSION['message'])): ?>
		<div class="alert alert-danger">
			<i class="glyphicon glyphicon-remove"></i>
			&nbsp;&nbsp;
			<?= $_SESSION['message'] ?>
		</div>
		<?php $_SESSION['message'] = null; endif; ?>

		<div class="row">
			<div class="col-md-6">

				<div class="panel panel-default">
					<div class="panel-body">

						<div class="photo text-center">
							<img src="img/products/<?= $product['photo'] ?>" />
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6">

				<div class="panel-default panel">
					<div class="panel-body">

						<h2><?= $product['name'] ?></h2>
						<h3 class="text-danger"><b><?= $product['price'] ?></b> <sup>DHs</sup></h3>
						<hr />
						<p><?= $product['description'] ?></p>
						<hr />
						<span>Quantité en Stock: </span>
						<label><?= $product['stock'] ?></label>

					</div>
					<div class="panel-footer">
						<form method="post" action="controllers/order_add.php">
							<input type="hidden" name="product_id" value="<?= $product['id'] ?>" />
							<input type="hidden" name="user_id" value="<?= $user['id'] ?>" />
							<div class="form-group">
								<label for="input-quantity">Quantité: </label>
								<input type="number" id="input-quantity" name="quantity"
									   class="form-control" value="1" />
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary btn-block">
									<i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;
									Commander
								</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>

	<?php else: ?>

	<div class="alert alert-warning">
		<i class="glyphicon glyphicon-info-sign"></i>
		&nbsp;&nbsp;
		Produit Introuvable !!!
	</div>

	<?php endif; ?>

	</div>
</main>