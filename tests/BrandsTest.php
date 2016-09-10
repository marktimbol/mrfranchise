<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandsTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_displays_all_the_brands_in_the_brands_page()
    {
    	$brand = factory(App\Brand::class)->create();

    	$this->visit('/brands')
    		->see($brand->name);
    }

    public function test_it_displays_a_single_brand_on_the_page()
    {
    	$brand = factory(App\Brand::class)->create();

    	$this->visit("/brands/$brand->slug")
    		->see($brand->name);
    }

    public function test_it_displays_all_the_brands_on_the_admin_page()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $brand = factory(App\Brand::class)->create([
            'name'  => 'Krush Burger'
        ]);

        $this->visit('/dashboard/brands')
            ->see($brand->name);
    }
}
