<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	protected $fillable = ['name', 'slug', 'website'];
	
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
