<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\TravelPackage;
use Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $travelPackages = TravelPackage::with(['galleries'])->latest()->get()->take(3);
        return view('pages.home', compact('travelPackages'));
    }

    public function details(Request $request, $slug)
    {
        $travelPackage = TravelPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.details', compact('travelPackage'));
    }
}
