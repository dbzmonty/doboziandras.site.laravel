<?php

namespace App\Http\Controllers;

use App\Models\cv_job;
use Illuminate\Http\Request;

class CV_jobsController extends Controller
{
    // Lista megjelenítés
    public function index()
    {
        
    }

    // Megjelenítse az űrlapot
    public function create()
    {
        return view('cv.addJob');
    }

    // Elmentse az űrlapot
    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|min:3|max:240',
            'company' => 'required|min:3|max:240',
            'location' => 'required|min:3|max:240',
            'date_period' => 'required|min:3|max:240'
        ]);

        dd($request->all());
    }









    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cv_job  $cv_job
     * @return \Illuminate\Http\Response
     */
    public function show(cv_job $cv_job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cv_job  $cv_job
     * @return \Illuminate\Http\Response
     */
    public function edit(cv_job $cv_job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cv_job  $cv_job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cv_job $cv_job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cv_job  $cv_job
     * @return \Illuminate\Http\Response
     */
    public function destroy(cv_job $cv_job)
    {
        //
    }
}
