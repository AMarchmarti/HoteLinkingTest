<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyOffersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
    $user_id = auth()->user()->id;
    $user = User::find($user_id);
    return view('MisOfertas')->with('offers', $user->offers);}
}
