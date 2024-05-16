<?php

namespace App\Http\Controllers;

use App\Models\AcademicDegree;
use Illuminate\Http\Request;

class AcademicDegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academicDegree = AdemicDegreees::all(); // Assuming \ is your model name
        return view('AdemicDegreees', ['academicDegree' => $academicDegree]); 
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
    public function show(AcademicDegree $academicDegree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcademicDegree $academicDegree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AcademicDegree $academicDegree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($academicDegree)
    {
        academicDegree::find($academicDegree)->delete();

        return redirect()->route('cities.index');
    }
}
