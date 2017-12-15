<?php

interface Subject
{
    public function attach($observer); //attach an observer
    public function detach($observer); //detach an observer
    public function release($observer); //release method that cleans out array of observers and returns it to client
} //like the "Publisher"

interface Observer 
{
    public function handle(); //triggers observer
} //like the "Subscriber"

class Auth implements Subject       
{
    protected $observers = [];

    public function attach($observer)
    {
        $this->observers[] = $observer;
    }

    public function detach($observer)
    {
        
    }

    public function release($observer)
    {
        
    }
}