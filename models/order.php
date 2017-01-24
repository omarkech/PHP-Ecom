<?php


/*
 * Retourner la liste les commandes d'un client donné
 */

function get_orders($connection, $user_id)
{
    $query = "SELECT * FROM orders WHERE user_id = $user_id ORDER BY created_at DESC";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    $orders = [];

    while($order = mysqli_fetch_assoc($result))
    {
        $orders[] = $order;
    }

    return $orders;
}


/*
 * Ajouter Une Commandes
 */

function add_order($connection, $data)
{
    $user_id = $data['user_id'];
    $product_id = $data['product_id'];
    $quantity = $data['quantity'];

    $query = "INSERT INTO orders (product_id, user_id, quantity) VALUES ('$product_id', $user_id, $quantity)";
    mysqli_query($connection, $query) or die (mysqli_error($connection));
}