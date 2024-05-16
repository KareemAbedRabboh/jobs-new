<?php

namespace App\Http\Controllers;

use App\Models\JobSeekerSkills;
use Illuminate\Http\Request;

class JobSeekerSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobseeker_skills = JobSeekerSkills::all(); // Assuming JobseekerSkill is your model name
        return view('jobseeker_skills', ['jobseeker_skills' => $jobseeker_skills]); // Corrected variable name and view file name
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
    public function show(JobSeekerSkills $jobSeekerSkills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobSeekerSkills $jobSeekerSkills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobSeekerSkills $jobSeekerSkills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $jobSeekerSkills)
    {
        jobSeekerSkills::find($jobSeekerSkills)->delete();

        return redirect()->route('jobseeker_skills.index');
    }
}
