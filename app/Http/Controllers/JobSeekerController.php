<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Http\Request;

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
        return view('jobseeker'); // Assuming there's a jobseeker/create.blade.php view
    }

   
    public function show(JobSeeker $jobSeeker)
    {
        return view('jobseeker', compact('jobSeeker')); // Assuming there's a jobseeker/show.blade.php view
    }

 

    public function destroy(JobSeeker $jobSeeker)
    {
        $jobSeeker->delete();

        return redirect()->route('jobseeker.index')->with('success', 'Job seeker deleted successfully.');
    }
}
