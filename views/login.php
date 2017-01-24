
<?php if($user['id'] == 0): ?>

<section class="login">

	<form id="formLogin" method="post" action="controllers/login.php">

		<?php if(!empty($_SESSION['message'])): ?>
			<div class="alert alert-danger">
				<?= $_SESSION['message'] ?>
			</div>
		<?php
		$_SESSION['message'] = null;
		endif; ?>

		<div class="panel panel-default">
			<div class="panel-heading text-center">
				<h3>Connexion</h3>
			</div>
			<div class="panel-body">

				<div class="form-group input-group input-group-lg">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input name="username" type="text" class="form-control" placeholder="Nom d'utilisateur" />
				</div>
				<div class="form-group input-group input-group-lg">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" name="password" class="form-control" placeholder="Mot de Passe" />
				</div>
				<div class="form-group text-center">
					<label class="checkbox-inline">
						<input type="checkbox" name="remember" value="1" />
						Enregister Mes Info
					</label>
				</div>

			</div>
			<div class="panel-footer text-center">
				<button type="submit" class="btn btn-success">Connexion</button>
			</div>
		</div>
	<form>

</section>

<?php else: ?>

	<script>
		window.location.href = 'index.php';
	</script>

<?php endif; ?>
