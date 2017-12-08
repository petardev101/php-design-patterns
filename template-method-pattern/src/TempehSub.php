<?php

namespace App;

class TempehSub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('adding tempeh');

        return $this;
    }
}  