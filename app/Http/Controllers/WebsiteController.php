<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\WhySection;
use App\Models\Destination;
use App\Models\Explore;
use App\Models\Footer;

class WebsiteController extends Controller
{
    public function index()
    {
        $banner = Banner::where('is_active', true)->first();
        $whysection = WhySection::first();
        $destinations = Destination::where('is_active', true)->get();
        $explore = Explore::where('is_active', true)->first();
        $footer = Footer::first();

        return view('website.home', compact(
            'banner',
            'whysection',
            'destinations',
            'explore',
            'footer'
        ));
    }
}