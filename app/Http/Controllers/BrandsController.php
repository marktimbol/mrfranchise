<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
    	$brands = Brand::latest()->get();
    	return view('pages.brands.index', compact('brands'));
    }

    public function show($brand)
    {
    	$menus = $brand->getLatestMenus(3);
    	return view('pages.brands.show', compact('brand', 'menus'));
    }
}
