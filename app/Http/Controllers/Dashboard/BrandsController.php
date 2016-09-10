<?php

namespace App\Http\Controllers\Dashboard;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
	public function index()
	{
		$brands = Brand::latest()->get();

		return view('dashboard.brands.index', compact('brands'));
	}

    public function show($brand)
    {
    	return view('dashboard.brands.show', compact('brand'));
    }
}
