<?php
$product1 = [
    "name" => "Laptop",
    "price" => 15000,
    "quantity" => 5
];

$product2 = [
    "name" => "Mouse",
    "price" => 500,
    "quantity" => 20
];

function calculateTotal($product)
{
    return $product["price"] * $product["quantity"];
}

function displayProduct($product)
{
    echo "Product: " . $product["name"] . "\n";
    echo "Price: " . $product["price"] . " EGP\n";
    echo "Quantity: " . $product["quantity"] . "\n";
    echo "Total: " . calculateTotal($product) . " EGP\n";
    echo "----------------------\n";
}

displayProduct($product1);
displayProduct($product2);
