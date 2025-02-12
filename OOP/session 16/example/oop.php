<?php

class Product
{
    private string $name;
    private float $price;
    private int $quantity;

    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function calculateTotal(): float
    {
        return $this->price * $this->quantity;
    }

    public function displayProduct(): void
    {
        echo "Product: " . $this->getName() . "\n";
        echo "Price: " . $this->getPrice() . " EGP\n";
        echo "Quantity: " . $this->getQuantity() . "\n";
        echo "Total: " . $this->calculateTotal() . " EGP\n";
        echo "----------------------\n";
    }
}

$product1 = new Product("Laptop", 15000, 5);
$product2 = new Product("Mouse", 500, 20);

$product1->displayProduct();
$product2->displayProduct();
