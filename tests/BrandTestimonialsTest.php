<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandTestimonialsTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_displays_the_brand_testimonials_on_the_brand_page()
    {
    	$brand = factory(App\Brand::class)->create();
    	$testimonials = factory(App\Testimonial::class, 5)->make([
            'brand_id'  => $brand->id
        ]);
    	
    	$brand->testimonials()->saveMany($testimonials);

    	$this->visit("/brands/{$brand->slug}");
    	foreach( $brand->testimonials as $testimonial )
    	{
    		$this->see($testimonial->text);
    	}
    }
}
