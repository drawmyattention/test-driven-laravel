<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductControllerTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_displays_all_of_the_products_in_our_catalogue()
    {
        // Given there are 15 products in the database
        $products = factory(\App\Product::class, 15)->create();

        // When I visit the product catalogue
        $this->visit('/catalogue');

        // Then I can see all of the products on the page
        $this->see('Total products: 15');

        $products->each(function (\App\Product $product) {
            $this->see($product->name);
        });
    }

    /** @test */
    public function a_user_can_view_a_products_full_details()
    {
        // Given there are some products in the database
        // And I am interested in a specific product

        // When I visit the product catalogue
        // And I click on the product that I am interested in

        // Then I am redirected to the product's page
        // And I see the full product's details
    }
}
