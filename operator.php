<?php

$name   = "Sarawut Niamrat";
$age    = 38;
$weight = 58;

$normal_price = "299";
$sale_price   = 299.00;

echo "<pre>";
var_dump($name, $age, $weight);

var_dump($normal_price != $sale_price);
var_dump($normal_price === $sale_price);
echo "</pre>";
