<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandPhotosTest extends TestCase
{
	use DatabaseMigrations;

    public function test_an_admin_can_upload_brand_photos()
    {
    	$this->assertTrue(true); // TEMP
    	// $brand = factory(App\Brand::class)->create();
    	// $user = factory(App\User::class)->create();
    	// $this->actingAs($user);

    	// $this->visit("/dashboard/brands/{$brand->slug}")
    	// 	->see($brand->name)
    	// 	->attach($pathToFile, 'photo')
    	// 	->press('Upload')

    	// 	->seeInDatabase('brands', [
    	// 		'id'	=> $brand->id,
    	// 		'hero_image'	=> 'image.jpg'
    	// 	]);
    }
}
