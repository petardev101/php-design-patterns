<?php

class Customer
{
    protected $plan;

    public function __construct($plan)
        {
            $this->plan = $plan;
        }
}

$spec = new CustomerIsGold;

$spec->isSatisfiedBy(new CustomerIsGold);