<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolClassRequest;
use App\Models\SchoolClass;
use App\Models\SchoolYear;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.school_class.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(SchoolClass $request)
    {
        $limiter_school_years = SchoolYear::orderBy('year', 'desc')->take(5)->get();
        $last_school_year = SchoolYear::max('year');
        $school_classes = SchoolClass::where('school_year', $last_school_year)->get();


        return view(
            'dashboard.school_class.create',
            compact('school_classes', 'limiter_school_years', 'last_school_year')
        );
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(SchoolClassRequest $request)
    {
        $validated = $request->validated();

        $school_class = SchoolClass::create($validated);

        $school_class->school_year = SchoolYear::max('year');
        $school_class->save();


        return back()
            ->with('msg', 'Turma cadastrada com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(SchoolClass $schoolClass)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolClass $schoolClass)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolClass $schoolClass)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolClass $schoolClass)
    {
        //
    }
}
