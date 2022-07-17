<?php

declare(strict_types=1);

namespace App\Behavioral\Memento;

class DocumentState
{

    public function __construct(public string $content, public string $fontName, public int $fontSize)
    {

    }
}