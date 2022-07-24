<?php

namespace App\Structural\Proxy;

interface ProductInterface
{
    public function getId(): int;

    public function getName(): string;

    public function setName(string $name): void;
}