<?php

include('../inc/connect.php');
include('../inc/functions.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$count = mysqli_num_rows($result);

if($count > 0)
{
	$user = mysqli_fetch_assoc($result);

	$_SESSION["user_id"] = $user['id'];
//	header("Location: ../index.php");
}
else
{
	$_SESSION['status'] = 0;
	$_SESSION['message'] = 'Nom d\'utilisateur ou mot de pass incorrects !!';
}

header("Location: ../index.php");
