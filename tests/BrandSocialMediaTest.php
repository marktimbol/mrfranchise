<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandSocialMediaTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_applies_the_url_of_the_brands_social_media_on_the_brands_page()
    {
    	$brand = factory(App\Brand::class)->create([
    		'facebook'	=> 'http://facebook.com',
    		'twitter'	=> 'http://twitter.com',
    		'instagram'	=> 'http//instagram.com',
    		'email'	=> 'mark.timbol@hotmail.com'
    	]);

    	$this->visit("/brands/{$brand->slug}")
    		->see($brand->facebook)
    		->see($brand->twitter)
    		->see($brand->instagram)
    		->see("mailto:{$brand->email}");
    }
}
