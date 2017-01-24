
<main>
	<div class="container">

	<?php
	if($user['level'] == 1):

		$result = mysqli_query($connect, "SELECT * FROM users") or die(mysqli_error($connect));
		$rowCount = mysqli_num_rows($result);
	?>

		<table class="table table-bordered table-striped">
			<tr>
				<th>ID</th>
				<th>Avatar</th>
				<th>Nom</th>
				<th>Email</th>
				<th></th>
			</tr>

			<?php
			if($rowCount > 0):

			while($user = mysqli_fetch_assoc($result)):
			?>

			<tr>
				<td><?= $user['id'] ?></td>
				<td>
					<img src="img/users/<?= $user['photo'] ?>" class="img-responsive img-circle"
						style="width: 100px; height: 100px" />
				</td>
				<td><?= $user['name'] ?></td>
				<td><?= $user['email'] ?></td>
				<td>
					<a class="btn btn-default">
						<i class="glyphicon glyphicon-edit"></i>
						edit
					</a>
					<a class="btn btn-danger">
						<i class="glyphicon glyphicon-remove"></i>
						delete
					</a>
				</td>
			</tr>

			<?php
			endwhile;

			endif;
			?>

		</table>

	<?php endif; ?>

	</div>
</main>