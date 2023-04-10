<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\SchoolYear;
use Illuminate\Http\Request;
use App\Http\Requests\SchoolClassRequest;

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
    public function create()
    {
        $school_classes   = SchoolClass::get();
        $last_school_year = SchoolYear::max('year');

        return view('dashboard.school_class.create', [
            'school_classes'   => $school_classes,
            'last_school_year' => $last_school_year,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(SchoolClassRequest $request)
    {
        $validated = $request->validated();

        SchoolClass::create($validated);

        return redirect()
            ->route('school_class.create')
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
