<?php

require_once '../inc/connect.php';
require_once '../models/product.php';
require_once '../models/order.php';

session_start();

// Get Request Data
$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

if(check_stock($connect, $product_id, $quantity))
{
    $data = [
        'user_id' => $user_id,
        'product_id' => $product_id,
        'quantity' => $quantity
    ];

    var_dump($data);

    add_order($connect, $data);
    update_stock($connect, $product_id, $quantity);

    $_SESSION['message'] = 'La Commande a été bien ajouter.';

    header('location: ../index.php?mode=orders');
}
else
{
    $_SESSION['message'] = 'La Quantité en stock est insuffisante !!';

    header("location: ../index.php?mode=product&id=$product_id");
}
