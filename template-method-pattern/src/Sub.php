<?php

namespace App;

abstract class Sub
{
    public function make()
    {
        return $this    
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    protected function layBread()
    {
        var_dump('laying down bread');

        return $this;
    }

    protected function addLettuce()
    {
        var_dump('adding lettuce');

        return $this;  
    }

    protected function addSauces()
    {
        var_dump('add HOT and other sauces!');

        return $this;
    }

    //subclasses are required to include this method
    protected abstract function addPrimaryToppings();
}