<?php

namespace App\Http\Controllers;

use App\Models\CvEntry;
use App\Models\CvCategory;
use Illuminate\Http\Request;

class CvEntryController extends Controller
{
    public function index()
    {
        $qualifications = CvEntry::where('category_id', 1)->orderByDesc('year_to')->get();
        $workexperiences = CvEntry::where('category_id', 2)->orderByDesc('year_to')->get();
        $courses = CvEntry::where('category_id', 3)->orderBy('title')->get();

        return view('cv.list')->with([
            'qualifications' => $qualifications,
            'workexperiences' => $workexperiences,
            'courses' => $courses
        ]);
    }

    public function create()
    {
        $categories = CvCategory::orderBy('id')->get();

        return view('cv.add')->with(['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate(['category_id' => 'required|exists:cv_categories,id']);

        if ($request->category_id == 1 || $request->category_id == 2) // Qualification or Work experience
        {
            $request->validate([                    
                'title' => 'required|min:3|max:240',
                'company' => 'required|min:3|max:240',
                'location' => 'required|min:3|max:240',
                'year_from' => 'required|numeric|min:1900|max:2100',
                'year_to' => 'required|numeric|min:1900|max:2100|gte:year_from'
            ]);

            $cventry = new CvEntry();
            $cventry->category_id = $request->category_id;
            $cventry->title = $request->title;
            $cventry->company = $request->company;
            $cventry->location = $request->location;
            $cventry->year_from = $request->year_from;
            $cventry->year_to = $request->year_to;
            $cventry->save();

            //$cvcat = CvCategory::find($request->category_id);
            //$cvcat->cv_entries()->create($request->except('_token'));
        }
        else if ($request->category_id == 3) // Course
        {
            $request->validate([                    
                'title' => 'required|min:3|max:240',
                'company' => 'required|min:3|max:240'
            ]);

            $cventry = new CvEntry();
            $cventry->category_id = $request->category_id;
            $cventry->title = $request->title;
            $cventry->company = $request->company;
            $cventry->save();
        }

        return redirect()->route('cv.list');
    }








    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CvEntry  $cvEntry
     * @return \Illuminate\Http\Response
     */
    public function show(CvEntry $cvEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CvEntry  $cvEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(CvEntry $cvEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CvEntry  $cvEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CvEntry $cvEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CvEntry  $cvEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(CvEntry $cvEntry)
    {
        //
    }
}
