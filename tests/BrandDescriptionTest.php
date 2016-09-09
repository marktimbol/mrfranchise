<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandDescriptionTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_displays_brand_description_on_the_brand_page()
    {
    	$brand = factory(App\Brand::class)->create([
    		'description'	=> 'The brand description'
    	]);

    	$this->visit("/brands/{$brand->slug}")
    		->see('The brand description');
    }
}
