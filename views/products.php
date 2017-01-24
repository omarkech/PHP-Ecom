<?php

require_once 'models/product.php';

$products = get_products($connect);

?>

<main>
	<div class="container">
		<div class="row">

		<?php if(count($products) > 0): ?>

			<?php foreach($products as $product):?>

			<div class="col-sm-4 col-md-3">
				<a href="index.php?mode=product&id=<?= $product['id'] ?>">
					<div class="card-product">
						<div class="card-product-head">
							<img src="img/products/<?= $product['photo'] ?>" class="img-responsive" />
						</div>
						<div class="card-product-foot">
							<h3><?= $product['name'] ?></h3>
							<h4 class="text-success"><?= $product['price'] ?> DHs</h4>
						</div>
					</div>
				</a>
			</div>

		<?php endforeach; ?>

	<?php else: ?>

		<div class="alert alert-info">
			No Results
		</div>

	<?php endif; ?>

		</div>
	</div>
</main>