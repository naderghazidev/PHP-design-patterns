<?php

namespace App\Behavioral\Command;

class VideoEditor
{
    private float $contrast = 0.5;
    private string $text = "";

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function removeText(): void
    {
        $this->text = "";
    }

    public function getContrast(): float
    {
        return $this->contrast;
    }

    public function setContrast(float $contrast): void
    {
        $this->contrast = $contrast;
    }

    public function toString(): string
    {
        return "VideoEditor{" .
            "contrast=" . $this->contrast .
            ", text='" . $this->text . '\'' .
            '} </br>';
    }
}