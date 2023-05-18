<?php

namespace App\Http\Controllers;

use App\Models\UjuziCoin;
use App\Models\UjuziProduct;
use App\Models\UjuziProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UjuziProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = UjuziProductCategory::all();
        $products = UjuziProduct::all();
        $productCount =UjuziProduct::count();
        $totalAmount = UjuziCoin::sum('amount');
        //summation based on coin type
        $amountByType = UjuziCoin::select('type', DB::raw('SUM(amount) as total_amount'))
            ->groupBy('type')
            ->get();
        //calculate total units for products
        $slotUnit = UjuziProduct::sum('slot');
        //retrieve slots based on product category so that when purchasing we can check if product slot is available
        //returns an array
        $unitType = UjuziProduct::select('category',DB::raw('SUM(slot) as slot_unit'))
            ->groupBy('category')
             ->get();

        $categoryCount = UjuziProductCategory::count();

         return view('welcome',compact(
             'categories',
             'products',
             'productCount',
             'amountByType',
             'totalAmount',
             'categoryCount',
             'slotUnit',
             'unitType'
         ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = UjuziProductCategory::all();
        $products = UjuziProduct::all();
        $productCount =UjuziProduct::count();
        $totalAmount = UjuziCoin::sum('amount');

        //summation based on coin type
        $amountByType = UjuziCoin::select('type', DB::raw('SUM(amount) as total_amount'))
            ->groupBy('type')
            ->get();
        $categoryCount = UjuziProductCategory::count();

        return view('_all_ujuzi_products',compact(
            'categories',
            'products',
            'productCount',
            'amountByType',
            'totalAmount',
            'categoryCount'
        ));
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

            request()->validate([
                'image' => 'required',
            ]);
            if ($request->image) {
                $product_pic = time() . '.' . request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $product_pic);
            }
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'price'=>'required',
                'slot'=>'required',
                'quantity'=>'required',
                'category'=>'required',

            ]);

            $product= new UjuziProduct([
                'image' => $product_pic,
                'description' => $request->get('description'),
                'quantity' => $request->get('quantity'),
                'name' => $request->get('name'),
                'slot' => $request->get('slot'),
                'price' => $request->get('price'),
                'category' => $request->get('category'),

            ]);
            try {
//                //for api use
//                return response()->json($product);
                $product->save();
                $slot_number = $request->get('slot');
                $category_type = $request->get('category');
                $message = 'You have successfully saved '.''.'    '.$slot_number.'        '.'slots'.'    '.'of'.'     ' . $category_type;
                //using blade return
                return redirect()->back()->with('success', $message);

            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Unfortunately we could not post your product at this time.');
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UjuziProduct  $ujuziProduct
     * @return \Illuminate\Http\Response
     */
    public function show(UjuziProduct $ujuziProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UjuziProduct  $ujuziProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(UjuziProduct $ujuziProduct,$id)
    {
        //
        $ujuziProduct = UjuziProduct::findorFail($id);
         $categories = UjuziProductCategory::all();
        return view('update_product',compact('ujuziProduct','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UjuziProduct  $ujuziProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UjuziProduct $ujuziProduct,$id)
    {
        //
        $request-> validate([

            'image'=>'nullable',

        ]);

        if ($request->hasFile('image')) {
            $picture = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('/images'), $picture);
        }
    //lets update the image here
        if (isset($picture)) {
            DB::table('ujuzi_products')
                ->where('id', $id)
                ->update(['image' => $picture
                ]);
        }
        $request-> validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'slot'=>'required',
            'quantity'=>'required',
            'category'=>'required',

        ]);
        $ujuziProduct = UjuziProduct::find($id);
        $ujuziProduct->name = $request->get('name');
        $ujuziProduct->category = $request->get('category');
        $ujuziProduct->description = $request->get('description');
        $ujuziProduct->quantity = $request->get('quantity');
        $ujuziProduct->slot = $request->get('slot');
        $ujuziProduct->price = $request->get('price');

        try {
            $ujuziProduct->save();
            return redirect()->back()->with('success', ' Product  Updated successfully');
        }
        catch (\Exception $e){
            return redirect()->back()->with('error', 'Unfortunately Product  could not be updated at this time successfully');
        }

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UjuziProduct  $ujuziProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(UjuziProduct $ujuziProduct,$id)
    {
        //
        $product = UjuziProduct::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('product deleted successfully');
    }
}
