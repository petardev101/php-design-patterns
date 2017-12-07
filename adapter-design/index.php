<?php

require 'vendor/autoload.php';

use Acme\Book;
use Acme\Kindle; 
use Acme\BookInterface;
use Acme\eReaderInterface;
use Acme\KindleAdapter;

class Person
{ 
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

//new up the KindleAdapter and pass into the Kindle object
(new Person)-> read(new KindleAdapter(new Kindle));
 