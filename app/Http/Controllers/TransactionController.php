<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Transaction::query();
            return DataTables::eloquent($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a href="' . route('transactions.show', $item->id) . '" >
                        <button class="bg-blue-500 text-white rounded-md px-2 py-1 mx-2">
                        Details
                        </button>
                        </a>
                        <a href="' . route('transactions.edit', $item->id) . '" >
                        <button class="bg-gray-500 text-white rounded-md px-2 py-1 mx-2">
                        Edit
                        </button>
                        </a>
                        <form action="' . route('transactions.destroy', $item->id) . '"  class="inline-block" method="POST">
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
        return view('pages.dashboard.transactions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction, Request $request)
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
    public function destroy(string $id)
    {
        //
    }
}
