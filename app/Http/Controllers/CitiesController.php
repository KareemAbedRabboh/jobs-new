<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = Cities::all(); // Assuming \ is your model name
        return view('Cities', ['cities' => $cities]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cities $cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cities $cities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cities $cities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cities)
    {
        Cities::find($cities)->delete();

        return redirect()->route('cities.index');
    }
}
