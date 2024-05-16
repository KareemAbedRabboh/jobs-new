<?php

namespace App\Http\Controllers;

use App\Models\Universities;
use Illuminate\Http\Request;

class UniversitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = Universities::all(); // Assuming University is your model name
        return view('universities', ['universities' => $universities]); // Assuming your view file is named 'index.blade.php' and it's located in the 'universities' directory
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
    public function show(Universities $universities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Universities $universities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Universities $universities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $Universities)
    { 
        Universities::find($Universities)->delete();
    
        return redirect()->route('universities.index')->with('success', 'Company deleted successfully');
}
}