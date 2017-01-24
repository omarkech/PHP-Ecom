<?php
$query = "select * from commande where idClient = $DBid";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$num = mysqli_num_rows($result);

echo'
<div class="main" align="center">';
if($num > 0)
{
echo'
	<span class="titre">Les Commandes de '.$DBname.'</span>
	<table align="center">
	<tr>
		<td>
			<table align="center" class="grid" cellSpacing="0" cellPadding="0">
			<tr><td>
				<table align="center" class="grid2" cellSpacing="1" cellPadding="4">
				<tr class="header">
					<td>N� Commande</td>
					<td>N� Client</td>
					<td>N� Produit</td>
					<td>Date Commande</td>
					<td>Options</td>
				</tr>';
			while($sql = mysqli_fetch_array($result))
			{
				echo'
				<tr>
					<td>'.$sql[0].'</td>
					<td>'.$sql[1].'</td>
					<td>'.$sql[2].'</td>
					<td>'.$sql[3].'</td>
					<td><a href="index.php?mode=produits&c='.$sql[0].'&id='.$sql[1].'">Produits</a></td>
				</tr>';
			}
			echo'
				</table>
			</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>';
}
else
{
	echo'
	<table>
	<tr>
		<td>Aucune Commande a �t� Trouv� !</td>
	</tr>
	</table>';
}
echo'
</div>';
?>