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

    public function ourProcess()
    {
        return view('public.our-process');
    }

    public function justSold()
    {
        return view('public.just-sold');
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function faq()
    {
        return view('public.faq');
    }

    public function queensChips()
    {
    	return view('public.brands.queens-chips');
    }

    public function alsBeef()
    {
    	return view('public.brands.als-beef');
    }

    public function krushBurger()
    {
        return view('public.brands.krush-burger');
    }

    public function nancysPizza()
    {
        return view('public.brands.nancys-pizza');
    }

    public function eyescream()
    {
        return view('public.brands.eyescream');
    }
}
