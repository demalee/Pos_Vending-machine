<?php

namespace App\Http\Controllers;

use App\Models\UjuziCoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UjuziCoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $totalAmount = UjuziCoin::sum('amount');
        //summation based on coin type
        $amountByType = UjuziCoin::select('type', DB::raw('SUM(amount) as total_amount'))
            ->groupBy('type')
            ->get();


        return view('add-coin',compact('amountByType','totalAmount'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save and increment coin
        $request->validate([
            'amount'=>'required|numeric|between:0,999.99',
            'type'=>'required',
        ]);
        $coin = new UjuziCoin([
            'amount' => $request->get('amount'),
            'type' => $request->get('type'),
        ]);

        try {
            $coin->save();
            //pop a message to show the type of coin and amount saved for that particular coin
            $coinType = $request->get('type');
            $amountSaved = $request->get('amount');
            $message = 'You have saved ' . $amountSaved .      ' of '      . $coinType;
            return redirect()->back()->with('success', $message);

        }
        catch (\Exception $e){
            return redirect()->back()->with('error','we couldnt save coin currently, please try again later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UjuziCoin  $ujuziCoin
     * @return \Illuminate\Http\Response
     */
    public function show(UjuziCoin $ujuziCoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UjuziCoin  $ujuziCoin
     * @return \Illuminate\Http\Response
     */
    public function edit(UjuziCoin $ujuziCoin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UjuziCoin  $ujuziCoin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UjuziCoin $ujuziCoin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UjuziCoin  $ujuziCoin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UjuziCoin $ujuziCoin)
    {
        //
    }
}
