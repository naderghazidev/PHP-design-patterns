<?php

declare(strict_types=1);

namespace App\Behavioral\Iterator;

class Iterator
{
    public function run(): void
    {
        $productCollection = new ProductCollection();

        $productCollection->add(new Product(1, 'first'));
        $productCollection->add(new Product(2, 'second'));
        $productCollection->add(new Product(3, 'third'));

        foreach ($productCollection as $product) {
            echo '<br/>';
            echo $product->toString();
            echo '<br/>';
        }
    }
}