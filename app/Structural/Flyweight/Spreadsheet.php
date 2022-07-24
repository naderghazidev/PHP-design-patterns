<?php

namespace App\Structural\Flyweight;

class Spreadsheet
{
    private const MAX_ROWS = 3;
    private const MAX_COLS = 3;

    // In a real app, these values should not be hardcoded here.
    // They should be read from a configuration file.
    private string $fontFamily = "Times New Roman";
    private int $fontSize = 12;
    private bool $isBold = false;

    private array $cells = [];

    public function __construct()
    {
        $this->generateCells();
    }

    public function setContent(int $row, int $col, string $content): void
    {
        $this->ensureCellExists($row, $col);

        $this->cells[$row][$col]->setContent($content);
    }

    public function setFontFamily(int $row, int $col, string $fontFamily): void
    {
        $this->ensureCellExists($row, $col);

        $cell = $this->cells[$row][$col];
        $this->cells[$row][$col]->setCellStyle(new CellStyle($fontFamily, $this->fontSize, $this->isBold));
    }

    private function ensureCellExists(int $row, int $col): void
    {
        if ($row < 0 || $row >= self::MAX_ROWS)
            throw new \Exception();

        if ($col < 0 || $col >= self::MAX_COLS)
            throw new \Exception();
    }

    private function generateCells(): void
    {
        for ($row = 0; $row < self::MAX_ROWS; $row++) {
            for ($col = 0; $col < self::MAX_COLS; $col++) {

                $cell = new Cell($row, $col, (new CellStyleFactory())->getCellStyle(new CellStyle($this->fontFamily, $this->fontSize, $this->isBold)));
                $this->cells[$row][$col] = $cell;
            }
        }

    }

    public function render()
    {
        for ($row = 0; $row < self::MAX_ROWS; $row++)
            for ($col = 0; $col < self::MAX_COLS; $col++)
                $this->cells[$row][$col]->render();
    }
}