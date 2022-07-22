<?php

namespace App\Structural\Decorator;

class ErrorDecorator implements AbstractArtefact
{
    public function __construct(private AbstractArtefact $artefact)
    {
    }

    public function render(): string
    {
        return $this->artefact->render() . ' has error ';
    }
}