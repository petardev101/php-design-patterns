<?php

interface Subject
{
    public function attach($observable); //attach an observer
    public function detach($observer); //detach an observer
    public function notify(); //release method that cleans out array of observers and returns it to client
} //like the "Publisher"

interface Observer 
{
    public function handle(); //triggers observer
} //like the "Subscriber"

class Login implements Subject       
{
    protected $observers = [];
    
    public function attach($observable)
    {
        if (is_array($observable)) {
            return $this->attachObservers($observable);
        }   
        $this->observers[] = $observable;

        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify($observer)
    {
         foreach ($this->observers as $observer) {
            $observer->handle();
         }
    }

    private function attachObservers($observable)
    {
        foreach ($observable as $observer) {
            if (! $observer instanceof Observer) {
                throw new Exception;
            }

            $this->attach($observer);
        }
    }

    public function fire()
    {
        $this->login;
    }
}

class LogHandler implements Observer
{
    public function handle()
    {
        var_dump('log something important');
    }
}

class EmailNotifier implements Observer
{
    public function handle()
    {
        var_dump('fire off an email.');
    }
}

class LoginReporter implements Observer
{
    public function handle()
    {
        var_dump('do some reporting.');
    }
}

$login = new login;
$login->attach([
    new LogHandler,
    new EmailNotifier,
    new LoginReporter
]);
$login->fire();