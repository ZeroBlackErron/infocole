<?php

namespace Infocole\Http\Controllers;

use Infocole\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schools = School::orderBy('id', 'DESC')->paginate();
        return view('schools.index', compact('schools'));
        /*$schools = School::all();
        return view('schools.index',compact('schools'))
            ->with('i', (request()->input('page', 1) - 1) * 5);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		request()->validate([
            'photo' => 'required',
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'address' => 'required',
            'url' => 'required',
        ]);

        School::create($request->all());
        return redirect()->route('schools.index')
                        ->with('success','School created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Infocole\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
        return view('schools.show',compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Infocole\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Infocole\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Infocole\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
