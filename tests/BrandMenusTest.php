<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandMenusTest extends TestCase
{
	use DatabaseMigrations;

    public function test_it_displays_brand_menu_on_the_brand_page()
    {
    	$brand = factory(App\Brand::class)->create();
    	$menu = factory(App\Menu::class)->make([
            'brand_id'  => $brand->id
        ]);

    	$brand->menus()->save($menu);

    	$this->visit("/brands/{$brand->slug}")
    		->see($menu->name)
    		->see(str_limit($menu->description, 50));
    }

    public function test_it_displays_the_latest_menus_on_the_brands_page()
    {
        $brand = factory(App\Brand::class)->create();
        $menus = factory(App\Menu::class, 5)->make([
            'brand_id'  => $brand->id
        ]);

        $brand->menus()->saveMany($menus);

        $latestMenus = $brand->getLatestMenus(3);

        $this->visit("/brands/{$brand->slug}");
        foreach($latestMenus as $menu)
        {
            $this->see($menu->name);
        }
    }
}
