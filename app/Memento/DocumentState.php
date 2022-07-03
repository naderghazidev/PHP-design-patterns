<?php

declare(strict_types=1);

namespace App\Memento;

class DocumentState
{

    public function __construct(public string $content, public string $fontName, public int $fontSize)
    {

    }
}