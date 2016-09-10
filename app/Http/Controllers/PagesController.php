<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	return view('public.home');
    }

    public function queensChips()
    {
    	return view('public.brands.queens-chips');
    }

    public function alsBeef()
    {
    	return view('public.brands.als-beef');
    }
}
