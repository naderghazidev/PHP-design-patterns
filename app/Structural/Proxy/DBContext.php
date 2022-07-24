<?php

namespace App\Structural\Proxy;

class DBContext
{
    private array $updatedObjects = [];

    public function getProduct(int $id): ProductInterface
    {
        // Automatically generate SQL statements
        // to read the product with the given ID.
        echo("SELECT * FROM products WHERE product_id = $id </br>");

        // Simulate reading a product object from a database.
        $product = new ProductProxy($id, $this);
        $product->setName("Product 1");

        return $product;
    }

    public function saveChanges(): void
    {
        // Automatically generate SQL statements
        // to update the database.
        foreach ($this->updatedObjects as $updatedObject)
            echo("UPDATE products SET name = '{$updatedObject->getName()}' WHERE product_id = {$updatedObject->getId()} </br>");

        $this->updatedObjects = [];
    }

    public function markAsChanged(Product $product): void
    {
        $this->updatedObjects[$product->getId()] = $product;
    }
}