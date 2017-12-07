<?php

namespace App;

class TempehSub
{
    public function make()
    {
        return $this    
            ->layBread()
            ->addLettuce()
            ->addTempeh()
            ->addSauces();

            print_r($this);
    }

    public function layBread()
    {
        var_dump('laying down bread');

        return $this;
    }

    public function addLettuce()
    {
        var_dump('adding lettuce');

        return $this;
    }

    public function addTempeh()
    {
        var_dump('adding tempeh');

        return $this;
    }

    public function addSauces()
    {
        var_dump('add sauces!');

        return $this;
    }
} 