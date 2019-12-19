<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        
    }

    public function sitemap()
    {
        // return view('front.sitemap', [
        //     'news'          => News::active()->get(),
        //     'products'      => Product::active()->get(),
        //     'categories'    => Category::parent(false)->active()->get(),
        // ]);
    }
}
