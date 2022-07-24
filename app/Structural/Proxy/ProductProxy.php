<?php

namespace App\Structural\Proxy;

class ProductProxy implements ProductInterface
{

    private DBContext $DBContext;
    private Product $product;

    public function __construct(int $id, DBContext $DBContext)
    {
        $this->DBContext = $DBContext;
        $this->product = new Product($id);
    }

    public function getId(): int
    {
        return $this->product->getId();
    }

    public function getName(): string
    {
        return $this->product->getName();
    }

    public function setName(string $name): void
    {
        $this->product->setName($name);
        $this->DBContext->markAsChanged($this->product);
    }
}