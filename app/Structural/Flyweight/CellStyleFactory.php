<?php

namespace App\Structural\Flyweight;

class CellStyleFactory
{
    private array $cellStyles = [];

    public function getCellStyle(CellStyle $cellStyle)
    {

        $fontFamily = $cellStyle->getFontFamily();
        $fontSize = $cellStyle->getFontSize();
        $isBold = $cellStyle->isBold();

        if (!in_array("$fontFamily,$fontSize,$isBold", $this->cellStyles)) {
            $this->cellStyles["$fontFamily,$fontSize,$isBold"] = $cellStyle;
        }
        return $this->cellStyles["$fontFamily,$fontSize,$isBold"];
    }
}