<?php

namespace App\Http\Controllers;

use App\Models\UjuziProductCategory;
use Illuminate\Http\Request;

class UjuziProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //categories view
        $categoryCount = UjuziProductCategory::count();
        return  view('add_category',compact('categoryCount'));
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
        //here we save categories
        $request->validate([
            'category' => 'required|unique:ujuzi_product_categories',
        ]);
        $category = new UjuziProductCategory([
            'category'=>$request->get('category'),

        ]);

        try {
            $category->save();
            $category = $request->get('category');
            $message = 'You have successfully saved' .''   . ''.   $category;
            return redirect()->back()->with('success', $message);

        }
        catch (\Exception $e){
            return redirect()->back()->with('error','we couldnt save category currently, please try again later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UjuziProductCategory  $ujuziProductCategory
     * @return \Illuminate\Http\Response
     */
    public function show(UjuziProductCategory $ujuziProductCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UjuziProductCategory  $ujuziProductCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(UjuziProductCategory $ujuziProductCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UjuziProductCategory  $ujuziProductCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UjuziProductCategory $ujuziProductCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UjuziProductCategory  $ujuziProductCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(UjuziProductCategory $ujuziProductCategory)
    {
        //
    }
}
