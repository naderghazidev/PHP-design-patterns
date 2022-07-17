<?php

declare(strict_types=1);

namespace App\Behavioral\Memento;

class DocumentHistory
{
    private array $states = [];

    public function push(DocumentState $state): void
    {
        $this->states[] = $state;
    }

    public function pop(): DocumentState|bool
    {
        array_pop($this->states);
        return end($this->states);
    }
}