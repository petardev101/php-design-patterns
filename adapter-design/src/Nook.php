<?php

namespace Acme;

use Acme\eReaderInterface;

class Nook implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('turn the Nook on.');     
    }

    public function pressNextButton()
    {
        \var_dump('press the next button on the Nook.');
    }
}