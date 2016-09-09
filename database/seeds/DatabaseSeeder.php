<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $brands = factory(App\Brand::class, 5)->create();

        foreach($brands as $brand)
        {
            $menus = factory(App\Menu::class, 5)->make([
                'brand_id'  => $brand->id
            ]);
            $testimonials = factory(App\Testimonial::class, 5)->make([
                'brand_id'  => $brand->id
            ]);

            $brand->menus()->saveMany($menus);
            $brand->menus()->saveMany($testimonials);
        }

    }
}
