<?php

/*
 * Calculer le totale
 */

function get_total($price, $quantity)
{
	$price = floatval($price);
	$quantity = intval($quantity);

	return $price * $quantity;
}