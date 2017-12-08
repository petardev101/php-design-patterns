<?php

require 'vendor/autoload.php';

$data = [
    "one" => 1, 
    "two" => 2, 
    "three" => 3, 
    "four" => 4, 
    "five" => 5, 
    "six" => 6, 
    "seven" => 7, 
    "eight" => 8, 
    "nine" => 9
];

print_r($data);

//encapsulate and make them interchangeable
interface Logger 
{
    public function log($data);
}
//Define a family of algorithms
class LogToFile implements Logger 
{
    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger     
{
    public function log($data)
    {
        var_dump('Log the data to a database');
    }
}

class LogToXWebService implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to a Sass site'); 
    }   
}

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;

        $logger->log($data);
    }
}

$app = new App;

$app->log('Some information here', new LogToDatabase);
