<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }
    public function products()
    {
        return view('products');
    }
}
