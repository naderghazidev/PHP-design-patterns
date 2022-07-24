<?php

namespace App\Structural\Flyweight;

class Cell
{
    private int $row;
    private int $column;
    private string $content = "";

    public function __construct(int $row, int $column, private CellStyle $cellStyle)
    {
        $this->row = $row;
        $this->column = $column;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function render(): void
    {
        echo("($this->row, $this->column): $this->content [{$this->cellStyle->getFontFamily()}] </br>");
    }

    /**
     * @param CellStyle $cellStyle
     */
    public function setCellStyle(CellStyle $cellStyle): void
    {
        $this->cellStyle = $cellStyle;
    }
}