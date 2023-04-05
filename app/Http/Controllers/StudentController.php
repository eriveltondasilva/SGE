<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $students = Student::isActive();


        if ($search) {
            if (is_numeric($search)) {
                $students = $students->where('id', $search)->get();
            } else {
                $students = $students->where('full_name', 'like', $search . '%')->get();
            }
        } else {
            $students = $students->orderBy('full_name')->get();
        }


        return view('dashboard.student.index', [
            'students' => $students,
            'search'   => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Student $student)
    {
        $lastStudent = Student::isActive()->latest()->first();

        return view('dashboard.student.create', ['lastStudent' => $lastStudent]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'            => 'required|string|max:100',
            'rg'                   => 'string|nullable|max:9',
            'cpf'                  => 'string|nullable|max:14',
            'email'                => 'email|nullable',
            'birth_place'          => 'string|nullable|max:50',
            'birth_date'           => 'date|nullable',
            'gender'               => 'string|nullable|max:1',
            'kin_name'             => 'string|nullable|max:100',
            'kin_kinship'          => 'string|nullable',
            'kin_telephone'        => 'string|nullable|max:16',
            'address_street'       => 'string|nullable|max:255',
            'address_complement'   => 'string|nullable|max:255',
            'address_neighborhood' => 'string|nullable|max:255',
            'address_city'         => 'string|nullable|max:255',
            'address_cep'          => 'string|nullable|max:9',
            'address_state'        => 'string|nullable',
            'nationality'          => 'string|nullable',
            'gov_benefits'         => 'string|nullable|',
            'health_problem'       => 'string|nullable|',
            'note'                 => 'string|nullable|',
        ]);

        Student::create($validated);

        return redirect()
            ->route('student.create')
            ->with('msg', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('dashboard.student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('dashboard.student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'full_name'            => 'required|string|max:100',
            'rg'                   => 'string|nullable|max:9',
            'cpf'                  => 'string|nullable|max:14',
            'email'                => 'email|nullable',
            'birth_place'          => 'string|nullable|max:50',
            'birth_date'           => 'date|nullable',
            'gender'               => 'string|nullable|max:1',
            'kin_name'             => 'string|nullable|max:100',
            'kin_kinship'          => 'string|nullable',
            'kin_telephone'        => 'string|nullable|max:16',
            'address_street'       => 'string|nullable|max:255',
            'address_complement'   => 'string|nullable|max:255',
            'address_neighborhood' => 'string|nullable|max:255',
            'address_city'         => 'string|nullable|max:255',
            'address_cep'          => 'string|nullable|max:9',
            'address_state'        => 'string|nullable',
            'nationality'          => 'string|nullable',
            'gov_benefits'         => 'string|nullable|',
            'health_problem'       => 'string|nullable|',
            'note'                 => 'string|nullable|',
        ]);

        $student->update($validated);

        return redirect()
            ->route('student.show', $student)
            ->with('msg', 'Aluno atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
