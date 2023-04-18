<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search   = $request->search;
        $students = Student::isActive();


        if ($search) {
            if (is_numeric($search)) {
                $students = $students->where('id', $search)->get();
            } else {
                $students = $students->where('name', 'like', $search . '%')->paginate(15);
            }
        } else {
            $students = $students->orderBy('name')->paginate(15);
        }


        return view('dashboard.student.index', compact('students', 'search'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Student $student)
    {
        $lastStudent = Student::isActive()->max('id');

        return view('dashboard.student.create', compact('lastStudent'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $validated = $request->validated();
        $school_id = Auth::user()->school_id;

        $student = Student::create($validated);

        $student->fill(['school_id' => $school_id]);

        $student->save();

        return redirect()
            ->route('student.create')
            ->with('store');
    }


    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('dashboard.student.show', compact('student'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('dashboard.student.edit', compact('student'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        $validated = $request->validated();

        $student->update($validated);

        return redirect()
            ->route('student.show', $student)
            ->with('update');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
