<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OffersController extends Controller
{
    public function index()
    {   
        $offers = Offer::all();
        return view('offers')->with('offers', $offers);
    }
}
