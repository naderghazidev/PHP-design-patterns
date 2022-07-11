<?php

namespace App\Iterator;

class Product
{
    public function __construct(private int $id, private string $name)
    {

    }

    public function toString()
    {
        return "Product{" .
            "id=" . $this->id .
            ", name='" . $this->name . '\'' .
            '}';
    }
}