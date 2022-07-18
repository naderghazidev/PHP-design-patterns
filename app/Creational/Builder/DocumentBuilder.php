<?php

namespace App\Creational\Builder;

interface DocumentBuilder
{
    public function addText(TextElement $element);

    public function addImage(ImageElement $element);

    public function getResult(): string;
}