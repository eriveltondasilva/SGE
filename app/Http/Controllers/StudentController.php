<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Variáveis
        $search   = $request->search;
        $students = Student::isActive();

        if ($search) {
            if (is_numeric($search)) {
                $students = $students->where('id', $search)->get();
            } else {
                $students = $students->where('name', 'like', $search . '%')->paginate(25);
            }
        } else {
            $students = $students->orderBy('name')->paginate(25);
        }



        //
        return view('dashboard.student.index', compact('students', 'search'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.student.create');
    }





    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        // Variável para encurtar validação
        $validated = $request->validated();

        // Criar o cadastro do aluno
        $student = Student::create($validated);

        // Adicionar id da escola no cadastro do aluno
        $student->school_id = Auth::user()->school_id;
        $student->save();

        // Adicionar responsável ao cadastro do aluno
        $student->relative()->create($validated['relative']);

        // Adicionar endereço ao cadastro do aluno
        $student->address()->create($validated['address']);

        // Captura id do último aluno cadastrado para apresentar no 'alert.saved-person'
        $lastStudent = $student->id;



        //
        return to_route('student.create', compact('lastStudent'))
            ->with('msg', 'Cadastro do aluno realizado com sucesso!');
    }





    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        return view('dashboard.student.show', compact('student'));
    }





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
        return view('dashboard.student.edit', compact('student'));
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Student $student)
    {
        // Variável
        $validated = $request->validated();


        // Atualizar cadastro do aluno
        $student->update($validated);

        // Atualizar dados do responsável pelo aluno
        $student->relative()->update($validated['relative']);

        // Atualizar endereço do aluno
        $student->address()->update($validated['address']);



        //
        return to_route('student.show', $student)
            ->with('msg', 'Cadastro do aluno atualizado com sucesso!');
    }





    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Student $student)
    // {
    //     //
    // }
}
