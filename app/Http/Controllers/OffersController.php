<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use DB;

class OffersController extends Controller
{
    public function index()
    {   
        $offers = Offer::all();
        return view('offers')->with('offers', $offers);
    }

    public function create()
    {
        return view('/offers');
    }
    
    public function store(Request $request)
    {
        $offers = new Offer;
        $offers->user_id = auth()->user()->id;
        $offers->code = $request->input('code');
        $offers->save();
        return redirect('/promotions')->with('status', 'La oferta ha sido canjeada.' );
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offers = Offer::find($id);
        $offers->user_id = auth()->user()->id;

        $offers->save();
        return redirect('/offers')->with('status', 'La oferta ha sido canjeada.' );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

