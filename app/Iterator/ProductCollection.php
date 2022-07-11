<?php

namespace App\Iterator;

class ProductCollection implements \Iterator, \Countable
{
    private array $products = [];
    private int $index = 0;

    public function add(Product $product): void
    {
        $this->products[] = $product;
    }

    public function current()
    {
        return $this->products[$this->index];
    }

    public function next()
    {
        $this->index++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->products[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function count()
    {
        $this->count($this->products);
    }
}