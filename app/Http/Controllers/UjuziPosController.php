<?php

namespace App\Http\Controllers;

use App\Models\UjuziCoin;
use App\Models\UjuziPos;
use App\Models\UjuziProduct;
use App\Models\UjuziProductCategory;
use App\Models\UjuziSale;
use Illuminate\Http\Request;

class UjuziPosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = UjuziProduct::all();
        $categories =UjuziProductCategory::all();
        return view('ujuzi_pos',compact('categories','products'));
    }
    public function checkout($ujuziProduct)
    {
          $coins = UjuziCoin::all();
          $ujuziProduct = (int) $ujuziProduct;
        $product =  UjuziProduct::findorFail($ujuziProduct);
        return view('ujuzi_checkout',compact('coins','product'));
   }
    public function buy(Request $request,$id)
    {
        //Note, i will return json response here  hence we wont have amazing UI But just response

          $amount = $request->input('amount');
          $type = $request->input('type');
            $slot = (int) $request->input('slot');

            // Get the ujuzikilimo product slot based on the provided slot
          $product = UjuziProduct::where('id', $id)->first();
          $available_slots = $product->slot;


        // If the product exists, check if the user has provided enough money
            if ($available_slots >=$slot) {

                $price = $product->price;

                $coin = UjuziCoin::where('type', $type)->sum('amount');
                // If the coin type exists, check if the user has provided enough money and exact change can be given back
                if ($coin) {
                    if ($coin >= $price) {
                        // Calculate the change to be returned to the user
                        $change = $amount - $price;

                     // Calculate the change in dollars
                        $change_amount = floor($change);
                        // Update the product slot in the ujuzi_products table
                        $product->slot = $product->slot - 1;
                        $product->save();

                        // Update the coin count in the ujuzi_coins table
                        $updated_coin = new UjuziCoin();
                        $updated_coin->amount = $price *-1;
                        $updated_coin->type =$type;
                        $updated_coin->save();
                        //save product sold in ujuzi_sales table
                        $sale = new UjuziSale();
                        $sale->amount = $amount;
                        $sale->type = $type;
                        $sale->slot = $slot;
                        $sale->change_amount = $change_amount;
                        $sale->save();
                        // Return the change to the user
                        $pennies = $change % 1;
                        $dollars = floor($change);
                        $cents = round(($change - $dollars) * 100);

                            return response()->json([
                                'message' => 'Purchase made  successfully',
                                'change' => [
                                    'cents' => $cents,
                                    'pennies' => $pennies,
                                    'dollar' => $dollars
                                ],
                            ]);


                    } else {
                        return response()->json([
                            'message' => ' We were unable to give you change for now,you gave lesser amount',
                        ]);
                    }
                } else {
                    return response()->json([
                        'message' => 'Invalid or unavailable coin type',
                    ]);
                }
            } else {
                return response()->json([
                    'message' => 'unavailable product slot',
                ]);
            }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UjuziPos  $ujuziPos
     * @return \Illuminate\Http\Response
     */
    public function show(UjuziPos $ujuziPos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UjuziPos  $ujuziPos
     * @return \Illuminate\Http\Response
     */
    public function edit(UjuziPos $ujuziPos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UjuziPos  $ujuziPos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UjuziPos $ujuziPos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UjuziPos  $ujuziPos
     * @return \Illuminate\Http\Response
     */
    public function destroy(UjuziPos $ujuziPos)
    {
        //
    }
}
