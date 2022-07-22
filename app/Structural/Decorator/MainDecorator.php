<?php

namespace App\Structural\Decorator;

class MainDecorator implements AbstractArtefact
{
    public function __construct(private AbstractArtefact $artefact)
    {
    }

    public function render(): string
    {

        return $this->artefact->render() . ' is main ';
    }
}