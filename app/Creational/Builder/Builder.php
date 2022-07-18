<?php

namespace App\Creational\Builder;

class Builder
{
    public function run()
    {
        $document = new Document();
        $document->add(new TextElement("Here is a nice text"));
        $document->add(new ImageElement("https://picsum.photos/200/300"));

        $document->export(new HtmlDocumentBuilder());
        echo '</br>';
        $document->export(new TextDocumentBuilder());
    }
}