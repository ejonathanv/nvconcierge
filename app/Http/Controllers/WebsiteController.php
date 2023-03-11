<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.pages.index');
    }

    public function about()
    {
        return view('website.pages.about', [
            'pageTitle' => __('website.pages.about.title')
        ]);
    }

    public function services()
    {
        return view('website.pages.services', [
            'pageTitle' => __('website.pages.services.title')
        ]);
    }

    public function testimonials()
    {
        return view('website.pages.testimonials', [
            'pageTitle' => __('website.pages.testimonials.title')
        ]);
    }

    public function contact()
    {
        return view('website.pages.contact', [
            'pageTitle' => __('website.pages.contact.title')
        ]);
    }
    
}
