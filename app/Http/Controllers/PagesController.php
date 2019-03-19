<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function offers(){
        return view('offers');
    }

    public function myoffers(){
        return view('MisOfertas');
    }
}
