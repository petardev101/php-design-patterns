<?php

// use App\CustomerIsGold;

class CustomerIsGoldTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    function a_customer_is_gold_if_they_have_the_respective_type()
    {
        $specification = new App\CustomerIsGold;
        $goldCustomer = new App\Customer('gold');
        $silverCustomer = new App\Customer('silver');

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy($silverCustomer));
    }
}