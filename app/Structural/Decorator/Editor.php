<?php

namespace App\Structural\Decorator;

class Editor
{
    public function openProject(string $path)
    {

        $artefacts = [
            new Artefact("Main"),
            new Artefact("Demo"),
            new Artefact("EmailClient"),
            new Artefact("EmailProvider"),
        ];

        $artefacts[0] = new ErrorDecorator(new MainDecorator($artefacts[0]));
        $artefacts[2] = new ErrorDecorator($artefacts[2]);

        foreach ($artefacts as $artefact)
            echo($artefact->render().'</br>');
    }
}