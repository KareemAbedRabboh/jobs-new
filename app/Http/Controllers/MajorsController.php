<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Majors::all(); // Assuming \ is your model name
        return view('Majors', ['majors' => $majors]); 
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
    public function show(Majors $majors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Majors $majors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Majors $majors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $majors)
    {
        Majors::find($majors)->delete();

        return redirect()->route('majors.index');
    }
}
