<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search   = $request->search;
        $teachers = Teacher::isActive();

        if ($search) {
            if (is_numeric($search)) {
                $teachers = $teachers->where('id', $search)->get();
            } else {
                $teachers = $teachers->where('full_name', 'like', $search . '%')->get();
            }
        } else {
            $teachers = $teachers->orderBy('full_name')->get();
        }


        return view('dashboard.teacher.index', [
            'teachers' => $teachers,
            'search'   => $search,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Teacher $teacher)
    {
        $last_teacher = Teacher::isActive()->latest()->first();

        return view('dashboard/teacher/create', [
            'last_teacher' => $last_teacher,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        $validated = $request->validated();

        Teacher::create($validated);

        return redirect()
            ->route('teacher.create')
            ->with('msg', 'Professor cadastrado com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('dashboard.teacher.show', [
            'teacher' => $teacher,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('dashboard.teacher.edit', [
            'teacher' => $teacher,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {
        $validated = $request->validated();

        $teacher->update($validated);

        return redirect()
            ->route('teacher.show', $teacher)
            ->with('msg', 'Professor atualizado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
