<?php

declare(strict_types=1);

namespace App\Memento;

class Document
{
    public function __construct(public string $content, public string $fontName, public int $fontSize)
    {

    }

    public function createState(): DocumentState
    {
        return new DocumentState($this->content, $this->fontName, $this->fontSize);
    }

    public function restore(DocumentState|bool $state): void
    {
        if (is_bool($state)) {
            return;
        }
        $this->content = $state->content;
        $this->fontName = $state->fontName;
        $this->fontSize = $state->fontSize;
    }
}