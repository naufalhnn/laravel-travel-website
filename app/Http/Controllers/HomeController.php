<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;
use Auth;
use Carbon\Carbon;
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

    public function checkout(Request $request, $slug) 
    {
        $travelPackage = TravelPackage::query()->where('slug', $slug)->firstOrFail();
        $user = Auth::user();

        $transaction = Transaction::create([
            'travel_package_id' => $travelPackage->id,
            'user_id' => $user->id,
            'additional_visa' => 0,
            'transaction_total' => $travelPackage->price + $travelPackage->additional_visa,
            'transaction_status' => 'IN CART',
        ]);

        $transactionDetail = TransactionDetail::create([
            'transaction_id' => $transaction->id,
            'username' => $user->username,
            'nationality' => $user->nationality,
            'is_visa' => 0,
            'doe_passport' => Carbon::now()->addYears(5),
        ]);

        return view('pages.checkout', compact('travelPackage', 'user', 'transaction'));
    }

    public function success($id) 
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';
        $transaction->update();
        return view('pages.checkout-success');
    } 
}
