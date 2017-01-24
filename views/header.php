
<!-- Header -->
<header class="navbar navbar-inverse navbar-fixed-top">
	<div class="container text-center">

		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">
				<h1>Ecom</h1>
			</a>
		</div>

		<!-- Naviagtion -->
		<ul class="nav navbar-nav pull-right">
			<li <?php echo $_GET['mode'] == "" ? 'class="active"' : '' ?>>
				<a href="index.php">
					<i class="glyphicon glyphicon-home"></i>
					<br />
					Accueil
				</a>
			</li>

		<?php if($user['level'] == 1): ?>
			<li <?php echo $_GET['mode'] == 'users' ? 'class="active"' : '' ?>>
				<a href="index.php?mode=users">
					<i class="glyphicon glyphicon-user"></i>
					<br />
					Clients
				</a>
			</li>
		<?php endif; ?>

			<li <?php echo $_GET['mode'] == "products" ? 'class="active"' : '' ?>>
				<a href="index.php?mode=products">
					<i class="glyphicon glyphicon-book"></i>
					<br />
					Produits
				</a>
			</li>

			<li <?php echo $_GET['mode'] == "orders" ? 'class="active"' : '' ?>>
				<a href="index.php?mode=orders">
					<i class="glyphicon glyphicon-th-list"></i>
					<br>
					Commandes
				</a>
			</li>

			<li class="dropdown">
				<a href="#" data-toggle="dropdown">
					<i class="glyphicon glyphicon-cog"></i>
					<br />
					Plus
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li>
						<a href="index.php?method=logout">Deconnecter</a>
					</li>
				</ul>
			</li>

		</ul>
	</div>
</header>