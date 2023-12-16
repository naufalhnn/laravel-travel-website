<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TravelPackage $travelPackage, Request $request)
    {
        $items = Gallery::where('travel_package_id', $travelPackage->id)->with('travel_packages')->get();

        return view("pages.dashboard.gallery.index", compact("travelPackage"), compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(TravelPackage $travelPackage)
    {
        return view("pages.dashboard.gallery.create", compact("travelPackage"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request, TravelPackage $travelPackage)
    {
        $data = $request->all();
        $data['travel_package_id'] = $travelPackage->id;
        $data['image'] = $request->file('image')->store('public/gallery');

        Gallery::create($data);

        return redirect()->route('travel-packages.gallery.index', $travelPackage->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('travel-packages.gallery.index', $gallery->travel_package_id);
    }
}
