<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandAboutTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_displays_the_about_information_of_a_brand()
    {
    	$brand = factory(App\Brand::class)->create([
    		'about'	=> 'Immediate Opportunities & Who we are looking for'
    	]);

    	$this->visit("/brands/{$brand->slug}")
    		->see($brand->about);
    }
}
