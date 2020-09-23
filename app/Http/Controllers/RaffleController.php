<?php

namespace App\Http\Controllers;

use App\Models\Raffle;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Mail\RaffleValidation;
use Illuminate\Support\Facades\Mail;
use DB;

class RaffleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raffles = Raffle::all();
        return view('raffle.index', ['raffles' => $raffles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!DB::table('raffles_inscriptions')->where('email', $request->email)->first()){

            DB::table('raffles_inscriptions')->insert([
                'raffle_id' => $request->raffle_id,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email
            ]);

            Mail::to($request->email)->send(new RaffleValidation($request->firstname, $request->lastname, $request->email));

            return redirect()->back()->with('success', 'Vous êtes bien inscrit sur la raffle ! Merci');
        }

        return redirect()->back()->with('error', 'Vous êtes déjà inscrit dans la raffle !');
        
    }

    public function lunch(Request $request, $id){
        $allEmail = DB::table('raffles_inscriptions')->where('raffle_id', $id)->pluck('email')->toArray();
        $productNbr = Raffle::find($id)->product()->pluck('quantity')->first();
        return redirect()->back()->with('success', 'Raffle lancée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raffle  $raffle
     * @return \Illuminate\Http\Response
     */
    public function show(Raffle $raffle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raffle  $raffle
     * @return \Illuminate\Http\Response
     */
    public function edit(Raffle $raffle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raffle  $raffle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raffle $raffle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raffle  $raffle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raffle $raffle)
    {
        //
    }
}
