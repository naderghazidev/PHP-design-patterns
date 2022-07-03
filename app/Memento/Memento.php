<?php

declare(strict_types=1);

namespace App\Memento;

class Memento
{

    public function run()
    {
        $document = new Document('Hello 1', 'font 1', 1);
        $documentHistory = new DocumentHistory();
        $documentHistory->push($document->createState());

        $document->content = 'Hello 2';
        $document->fontName = 'font 2';
        $document->fontSize = 2;
        $documentHistory->push($document->createState());

        $document->content = 'Hello 3';
        $document->fontName = 'font 3';
        $document->fontSize = 3;
        $documentHistory->push($document->createState());

        echo('current State!' . PHP_EOL);
        var_dump($document);
        echo(PHP_EOL);

        echo('Undo once!' . PHP_EOL);
        $document->restore($documentHistory->pop());
        var_dump($document);
        echo(PHP_EOL);

        echo('Undo twice!' . PHP_EOL);
        $document->restore($documentHistory->pop());
        var_dump($document);
        echo(PHP_EOL);

        // let's undo once more to make sure undo functionality has a valid limit
        echo('Undo third!' . PHP_EOL);
        $document->restore($documentHistory->pop());
        var_dump($document);
        echo(PHP_EOL);

    }
}