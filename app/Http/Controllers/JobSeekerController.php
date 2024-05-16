<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class JobSeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobseekers = JobSeeker::all(); // Assuming JobSeeker is your model name
        return view('jobseeker', ['jobseekers' => $jobseekers]);
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
    public function show(JobSeeker $JobSeeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobSeeker $JobSeeker)
    {
        //
    }


    public function destroy($jobSeeker)
    {

        JobSeeker::find($jobSeeker)->delete();

        return redirect()->route('jobseeker.index');
    }
}
