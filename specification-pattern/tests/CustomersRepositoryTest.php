<?php 

// use App\CustomersRepository;

class CustomersRepositoryTest extends PHPUnit\Framework\TestCase
{
     /** @test */
     function it_fetches_all_customers_who_match_a_given_specification()
     {
        $customers = new App\CustomersRepository(
            [
                new App\Customer('gold'),
                new App\Customer('bronze'),
                new App\Customer('silver'),
                new App\Customer('gold') 
            ]
        );

        $results = $customers->bySpecification(new App\CustomerIsGold);

        $this->assertCount(2, $results);
    }
}