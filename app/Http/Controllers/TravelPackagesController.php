<?php

namespace App\Http\Controllers;

use App\Http\Requests\TravelPackageRequest;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class TravelPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = TravelPackage::query();
            return DataTables::eloquent($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a href="' . route('travel-packages.gallery.index', $item->id) . '" >
                        <button class="bg-blue-500 text-white rounded-md px-2 py-1 mx-2">
                        Gallery
                        </button>
                        </a>
                        <a href="' . route('travel-packages.edit', $item->id) . '" >
                        <button class="bg-gray-500 text-white rounded-md px-2 py-1 mx-2">
                        Edit
                        </button>
                        </a>
                        <form action="' . route('travel-packages.destroy', $item->id) . '"  class="inline-block" method="POST">
                        <button class="bg-red-500 text-white rounded-md px-2 py-1 mx-2">
                        Delete
                        </button>
                        ' . method_field('delete') . csrf_field() . '
                       </form>
                    ';
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('pages.dashboard.travel-packages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.travel-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        TravelPackage::create($data);

        return redirect()->route('travel-packages.index');

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
    public function destroy(TravelPackage $travelPackage)
    {
        $travelPackage->delete();
        return redirect()->route('travel-packages.index')->with('success', 'Data Berhasil Dihapus');
    }
}
