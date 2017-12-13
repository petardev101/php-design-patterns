<?php

interface Subject 
{
    public function attach($observer);
    public function detach($observer);
    public function release($observer);
}

interface Observer 
{
    public function handle();
}