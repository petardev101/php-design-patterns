<?php 

require_once ('PHPUnit/Framework/TestCase.php');

class CustomersRepositoryTest extends PHPUnit_Framework_TestCase
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