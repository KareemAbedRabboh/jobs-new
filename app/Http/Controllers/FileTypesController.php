<?php

namespace App\Http\Controllers;

use App\Models\FileTypes;
use Illuminate\Http\Request;

class FileTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fileTypes = FileTypes::all(); // Assuming \ is your model name
        return view('FileTypes', ['fileTypes' => $fileTypes]); 
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
    public function show(FileTypes $fileTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileTypes $fileTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FileTypes $fileTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileTypes $fileTypes)
    {
        FileTypes::find($fileTypes)->delete();

        return redirect()->route('fileTypes.index');
    }
}
