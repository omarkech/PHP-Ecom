<?php

/*
 * Retourner la liste de tous les produits
 */

function get_products($connect)
{
    $query = "SELECT * FROM products ORDER BY id DESC";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

    $products = [];

    while($pro = mysqli_fetch_assoc($result))
    {
        $products[] = $pro;
    }

    return $products;
}


/*
 * Retourner un produit
 */

function get_product($connect, $id)
{
    $query = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

    if(mysqli_num_rows($result) > 0)
    {
        return mysqli_fetch_assoc($result);
    }
    else
    {
        return null;
    }
}


/*
 * Verifier le stock d'un produit
 */

function check_stock($connection, $id, $quantity)
{
    $query = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    if(mysqli_num_rows($result) > 0)
    {
        $product = mysqli_fetch_assoc($result);

        $stock = intval($product['stock']);

        return $stock >= $quantity;
    }
    else
    {
        return false;
    }
}


/*
 * Modifier Quantité en stock
 */

function update_stock($connection, $id, $quantity)
{
    $query = "UPDATE products SET stock = (stock - $quantity) WHERE id = '$id'";
    mysqli_query($connection, $query) or die(mysqli_error($connection));
}