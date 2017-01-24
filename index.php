<?php

error_reporting(E_ERROR|E_WARNING|E_PARSE);

include("inc/connect.php");
include("inc/functions.php");

session_start();

if($_GET['method'] == 'logout')
{
	session_unset();
	header('location:index.php');
}

if(!empty($_SESSION["user_id"]))
{
	$id = $_SESSION["user_id"];

	$result = mysqli_query($connect, "SELECT * FROM users WHERE id = $id") or die(mysqli_error($connect));
	$user = mysqli_fetch_assoc($result);
}
else
{
	$user = ['id' => 0];
}

?>

<!doctype html>
<html>
<head>

	<title>Application</title>
	<link href="src/bootstrap.min.css" rel="stylesheet" />
	<link href="src/app.css" rel="stylesheet" />

</head>
<body>

<?php

if($user['id'] == 0)
{
	require_once 'views/login.php';
}
else
{
	require_once 'views/header.php';

	switch($_GET['mode'])
	{
		case '':			require_once 'views/home.php';	break;
		case 'users':		require_once 'views/users.php';	break;
		case 'orders':		require_once 'views/orders.php';	break;
		case 'product':		require_once 'views/product.php';	break;
		case 'products':	require_once 'views/products.php';	break;
		default:			require_once 'views/error.php';	break;
	}
}

?>

<footer class="footer">
	<span>&copy; 2017. All Rights Reserved.</span>
</footer>

<script src="lib/jquery.min.js"></script>
<script src="src/bootstrap.min.js"></script>
<script src="src/app.js"></script>

</body>
</html>