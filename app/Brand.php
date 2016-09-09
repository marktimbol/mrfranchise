<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	protected $fillable = ['name', 'slug', 'website'];
	protected $with = ['menus', 'testimonials'];
	
	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function menus()
	{
		return $this->hasMany(Menu::class);
	}

	public function testimonials()
	{
		return $this->hasMany(Testimonial::class);
	}

	public function getLatestMenus($count = 3)
	{
		return $this->menus()->latest()->take($count)->get();
	}
}
