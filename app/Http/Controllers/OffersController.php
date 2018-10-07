<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        $offers = Offer::with('orders')->get();
        return view('offers.index',compact('offers'));
    }

    public function getOffer(Request $request)
    {
        $offer = Offer::find($request->offer_id)->orders;

        return response()->json($offer);
    }
}
