<?php

namespace App;

use App\CustomersRepository;


class CustomersRepositoryTest extends \PHPUnit\Framework\TestCase
{
     /** @test */
     function it_fetches_all_customers_who_match_a_given_specification()
     {
        $customers = new CustomersRepository(
            [
                new Customer('gold'),
                new Customer('bronze'),
                new Customer('silver'),
                new Customer('gold') 
            ]
        );

        $results = $customers->bySpecification(new CustomerIsGold);

        $this->assertCount(2, $results);
    }
}