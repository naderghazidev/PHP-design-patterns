<?php

namespace App\Structural\Flyweight;

class CellStyle
{

    public function __construct(private string $fontFamily, private int $fontSize, private bool $isBold)
    {

    }

    /**
     * @return string
     */
    public function getFontFamily(): string
    {
        return $this->fontFamily;
    }

    /**
     * @return int
     */
    public function getFontSize(): int
    {
        return $this->fontSize;
    }

    /**
     * @return bool
     */
    public function isBold(): bool
    {
        return $this->isBold;
    }

}
